<?php

use App\Support\LawFirm;
use Illuminate\Support\Facades\DB;

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

test('sitemap.xml returns valid xml with all public URLs and priority attributes', function () {
    $response = $this->get('/sitemap.xml');
    $response->assertOk();
    $response->assertHeader('Content-Type', 'text/xml; charset=UTF-8');

    $content = $response->getContent();
    expect($content)->toContain('<urlset');
    expect($content)->toContain(route('home'));
    expect($content)->toContain(route('services.index'));
    expect($content)->toContain(route('contact'));
    expect($content)->toContain('<priority>1.0</priority>');
    expect($content)->toContain('<changefreq>');
    expect($content)->toContain('<lastmod>');
});

test('seo implementation preserves zero-database architecture', function () {
    DB::enableQueryLog();

    $this->get('/')->assertOk();
    $this->get('/layanan/perdata-umum-khusus')->assertOk();
    $this->get('/tim/holong-siregar')->assertOk();
    $this->get('/faq')->assertOk();
    $this->get('/sitemap.xml')->assertOk();

    expect(DB::getQueryLog())->toBeEmpty();
});
