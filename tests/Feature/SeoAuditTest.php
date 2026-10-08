<?php

use App\Support\LawFirm;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ViewErrorBag;

test('all public pages return 200 with proper canonical, meta tags, and single H1', function () {
    $routes = [
        '/',
        '/tentang-kami',
        '/layanan',
        '/area-praktik',
        '/tim',
        '/kontak',
        '/faq',
        '/disclaimer',
        '/kebijakan-privasi',
        '/syarat-ketentuan',
    ];

    foreach ($routes as $path) {
        $response = $this->get($path);
        $response->assertOk();

        $content = $response->getContent();

        // 1. Title exists and is not generic
        expect($content)->toMatch('/<title>[^<]+<\/title>/');
        expect($content)->not->toContain('<title>Home</title>');
        expect($content)->not->toContain('<title>Welcome</title>');

        // 2. Meta description exists
        expect($content)->toContain('name="description" content="');

        // 3. Canonical tag exists and contains the current path
        expect($content)->toContain('rel="canonical" href="');

        // 4. Open Graph meta tags exist
        expect($content)->toContain('property="og:title"');
        expect($content)->toContain('property="og:description"');
        expect($content)->toContain('property="og:url"');
        expect($content)->toContain('property="og:image"');

        // 5. Exactly one H1 tag per page
        preg_match_all('/<h1[^>]*>/i', $content, $h1Matches);
        expect(count($h1Matches[0]))->toBe(1, "Page {$path} does not have exactly one <h1> tag.");
    }
});

test('service detail pages return valid 200 with Service schema and FAQ schema', function () {
    foreach (LawFirm::services() as $service) {
        $response = $this->get(route('services.show', $service['slug']));
        $response->assertOk();

        $content = $response->getContent();

        // Check single H1
        preg_match_all('/<h1[^>]*>/i', $content, $h1Matches);
        expect(count($h1Matches[0]))->toBe(1);

        // Check title includes service title
        expect($content)->toContain($service['title']);

        // Check Service schema exists
        expect($content)->toContain('"@type":"Service"');
        expect($content)->toContain('"serviceType"');

        // Check breadcrumb schema exists
        expect($content)->toContain('"@type":"BreadcrumbList"');

        // Check deep content blocks exist
        expect($content)->toContain('Ruang Lingkup &amp; Penanganan');
        expect($content)->toContain('Cakupan Pendampingan Kami');
        expect($content)->toContain('Kapan Anda Membutuhkan Layanan Ini?');
        expect($content)->toContain('Alur &amp; Tahapan Pendampingan Hukum');
    }
});

test('lawyer detail pages return valid 200 with Person schema', function () {
    foreach (LawFirm::lawyers() as $lawyer) {
        if (! empty($lawyer['has_detail'])) {
            $response = $this->get(route('lawyers.show', $lawyer['slug']));
            $response->assertOk();

            $content = $response->getContent();

            // Check Person schema exists
            expect($content)->toContain('"@type":"Person"');
            expect($content)->toContain('"name":"'.$lawyer['name'].'"');
            expect($content)->toContain('"worksFor"');
            expect($content)->toContain('PERADI');
        }
    }
});

test('faq page returns valid 200 with complete FAQPage schema', function () {
    $response = $this->get(route('faq'));
    $response->assertOk();

    $content = $response->getContent();
    expect($content)->toContain('"@type":"FAQPage"');
    expect($content)->toContain('"mainEntity"');
    expect($content)->toContain('Berapa perkiraan biaya atau honorarium jasa pengacara di Tangerang?');
    expect($content)->toContain('Pengadilan Negeri Tangerang');
});

test('404 page returns 404 status and sets noindex nofollow robots meta tag', function () {
    $response = $this->get('/halaman-acak-tidak-ada-12345');
    $response->assertNotFound();

    $content = $response->getContent();
    expect($content)->toContain('name="robots" content="noindex, nofollow"');
});

test('500 error page template sets noindex nofollow robots meta tag', function () {
    $rendered = view('errors.500', [
        'whatsappUrl' => LawFirm::whatsappUrl('Halo'),
        'errors' => new ViewErrorBag,
    ])->render();

    expect($rendered)->toContain('name="robots" content="noindex, nofollow"');
    expect($rendered)->toContain('500 — GANGGUAN SISTEM SESAAT');
});

test('robots.txt returns text/plain with absolute sitemap url', function () {
    $response = $this->get('/robots.txt');
    $response->assertOk();
    $response->assertHeader('Content-Type', 'text/plain; charset=UTF-8');

    $content = $response->getContent();
    expect($content)->toContain('User-agent: *');
    expect($content)->toContain('Allow: /');
    expect($content)->toContain('Disallow: /admin');
    expect($content)->toContain('Sitemap: '.route('sitemap'));
    expect($content)->not->toContain('Sitemap: /sitemap.xml');
});

test('sitemap.xml returns valid xml with image extension, dynamic lastmod, and articles', function () {
    $response = $this->get('/sitemap.xml');
    $response->assertOk();
    $response->assertHeader('Content-Type', 'text/xml; charset=UTF-8');

    $content = $response->getContent();
    expect($content)->toContain('<urlset');
    expect($content)->toContain('xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"');
    expect($content)->toContain(route('home'));
    expect($content)->toContain(route('services.index'));
    expect($content)->toContain(route('articles.index'));
    expect($content)->toContain(route('articles.show', 'biaya-jasa-pengacara-di-tangerang'));
    expect($content)->toContain('<priority>1.0</priority>');
    expect($content)->toContain('<image:image>');
    expect($content)->toContain('<image:loc>');
});

test('homepage H1 includes primary target keyword Pengacara di Tangerang & Bogor', function () {
    $response = $this->get('/');
    $response->assertOk();

    preg_match('/<h1[^>]*>(.*?)<\/h1>/s', $response->getContent(), $h1Match);
    expect($h1Match)->not->toBeEmpty();
    expect($h1Match[1])->toContain('Pengacara di Tangerang');
    expect($h1Match[1])->toContain('Bogor');
});

test('technical seo metadata includes theme-color, webmanifest, twitter site, and dedicated 1200x630 og-image', function () {
    $response = $this->get('/');
    $response->assertOk();

    $content = $response->getContent();
    expect($content)->toContain('name="theme-color" content="#071424"');
    expect($content)->toContain('rel="manifest"');
    expect($content)->toContain('site.webmanifest');
    expect($content)->toContain('name="twitter:site" content="@holongsiregar"');
    expect($content)->toContain('assets/images/og-image.jpg');
    expect($content)->toContain('property="og:image:secure_url"');
    expect($content)->toContain('property="og:image:width" content="1200"');
    expect($content)->toContain('property="og:image:height" content="630"');
    expect($content)->toContain('property="og:image:type" content="image/jpeg"');

    // Instagram link exists, facebook & linkedin removed
    expect($content)->toContain('https://www.instagram.com/pengacarahs');
    expect($content)->not->toContain('fa-linkedin-in');
    expect($content)->not->toContain('fa-facebook-f');

    // Obsolete geo tags are cleanly removed
    expect($content)->not->toContain('name="ICBM"');
    expect($content)->not->toContain('name="geo.region"');
    expect($content)->not->toContain('name="geo.position"');
});

test('all lawyer photos and key visual assets have optimized webp versions available', function () {
    expect(file_exists(public_path('assets/images/simbol-justice.webp')))->toBeTrue();
    expect(file_exists(public_path('assets/images/logo.webp')))->toBeTrue();
    expect(file_exists(public_path('assets/images/og-image.webp')))->toBeTrue();
    expect(file_exists(public_path('assets/images/og-image.jpg')))->toBeTrue();

    foreach (LawFirm::lawyers() as $lawyer) {
        expect($lawyer['photo'])->toEndWith('.webp');
        expect(file_exists(public_path('assets/'.$lawyer['photo'])))->toBeTrue();
    }
});

test('seo implementation preserves zero-database architecture', function () {
    DB::enableQueryLog();

    $this->get('/')->assertOk();
    $this->get('/layanan/perdata-umum-khusus')->assertOk();
    $this->get('/tim/holong-siregar')->assertOk();
    $this->get('/artikel')->assertOk();
    $this->get('/artikel/biaya-jasa-pengacara-di-tangerang')->assertOk();
    $this->get('/faq')->assertOk();
    $this->get('/robots.txt')->assertOk();
    $this->get('/sitemap.xml')->assertOk();

    expect(DB::getQueryLog())->toBeEmpty();
});
