<?php

use Illuminate\Support\Facades\DB;

test('public pages render without error', function () {
    $urls = [
        '/',
        '/tentang-kami',
        '/layanan',
        '/layanan/perdata-umum-khusus',
        '/area-praktik',
        '/area-praktik/litigasi',
        '/area-praktik/non-litigasi',
        '/tim',
        '/tim/holong-siregar',
        '/kontak',
        '/faq',
        '/disclaimer',
        '/kebijakan-privasi',
        '/syarat-ketentuan',
        '/sitemap.xml',
    ];

    foreach ($urls as $url) {
        $response = $this->get($url);
        expect($response->getStatusCode())->toBe(200, "Failed GET {$url}");
    }
});

test('unknown slugs return 404 with law firm branding', function () {
    $response = $this->get('/layanan/tidak-ada');
    $response->assertNotFound();
    $response->assertSee('Holong Siregar');

    $this->get('/tim/tidak-ada')->assertNotFound();
    $this->get('/area-praktik/tidak-ada')->assertNotFound();
    $this->get('/artikel')->assertNotFound();
});

test('home page renders official justice symbol asset in hero', function () {
    $response = $this->get('/');
    $response->assertOk();
    $response->assertSee('simbol-justice.png');
    $response->assertSee('Holong Siregar');
    $response->assertDontSee('Dedicated to Justice');
});

test('browser tab favicon, navbar, and footer render logo asset', function () {
    $response = $this->get('/');
    $response->assertOk();
    $response->assertSee('assets/images/logo.png');
    $response->assertSee('rel="icon" type="image/png"', false);
    $response->assertSee('rounded-circle');
    $response->assertSee('rounded-full');
});

test('article page and article menus are completely removed', function () {
    $response = $this->get('/');
    $response->assertOk();
    $response->assertDontSee('Legal Insights &amp; Wawasan', false);
    $response->assertDontSee('LATEST FROM OUR BLOG');
    $response->assertDontSee('/artikel');
});

test('services section renders all 7 services with real text from image reference', function () {
    $response = $this->get('/');
    $response->assertOk();
    $response->assertSee('Layanan hukum untuk berbagai kebutuhan');
    $response->assertSee('Setiap layanan disusun untuk membantu klien memahami pilihan');
    $response->assertSee('Perdata Umum & Khusus');
    $response->assertSee('Pidana Umum & Khusus');
    $response->assertSee('Legal Contract & Review Contract');
    $response->assertSee('Hukum Keluarga & Perceraian');
    $response->assertSee('Hukum Perusahaan');
    $response->assertSee('Legal Konsultasi');
    $response->assertSee('Recovery Asset');
    $response->assertSee('Lihat detail layanan');

    // All 7 service detail pages render successfully
    $slugs = [
        'perdata-umum-khusus',
        'pidana-umum-khusus',
        'legal-contract-review-contract',
        'hukum-keluarga-perceraian',
        'hukum-perusahaan',
        'legal-konsultasi',
        'recovery-asset',
    ];

    foreach ($slugs as $slug) {
        $this->get("/layanan/{$slug}")->assertOk();
    }
});

test('consultation form validates and redirects directly to whatsapp with formatted chat', function () {
    $payload = [
        'name' => 'Budi Santoso',
        'phone' => '081234567890',
        'legal_need' => 'Perdata Umum & Khusus',
        'message' => 'Saya butuh bantuan hukum wanprestasi kerja sama usaha.',
        'agreement' => '1',
    ];

    $response = $this->post('/kontak', $payload);
    $response->assertRedirect();
    $targetUrl = $response->headers->get('Location');
    expect($targetUrl)->toContain('https://wa.me/6281318841961?text=')
        ->toContain('Budi+Santoso')
        ->toContain('Perdata+Umum+%26+Khusus');

    $this->post('/kontak', [])->assertSessionHasErrors(['name', 'phone', 'legal_need', 'message', 'agreement']);
});

test('about page renders authentic vision and mission', function () {
    $response = $this->get('/tentang-kami');
    $response->assertOk();
    $response->assertSee('Visi Kami');
    $response->assertSee('Misi Kami');
    $response->assertSee('Memberikan solusi tepat pada permasalahan hukum');
    $response->assertSee('OFFICIUM NOBILE');
});

test('application operates purely hardcoded without any database queries', function () {
    DB::enableQueryLog();

    $this->get('/')->assertOk();
    $this->get('/tentang-kami')->assertOk();
    $this->get('/layanan')->assertOk();
    $this->get('/area-praktik')->assertOk();
    $this->get('/tim')->assertOk();
    $this->get('/kontak')->assertOk();
    $this->get('/faq')->assertOk();

    $payload = [
        'name' => 'Budi Hardcode',
        'phone' => '081234567890',
        'legal_need' => 'Perdata Umum & Khusus',
        'message' => 'Uji konsultasi tanpa koneksi atau query database.',
        'agreement' => '1',
    ];
    $this->post('/kontak', $payload)->assertRedirect();

    expect(DB::getQueryLog())->toBeEmpty();
});

test('team section renders all 8 members in correct order with authentic photos and no linkedin or email', function () {
    $response = $this->get('/tim');
    $response->assertOk();

    // Check all 8 members and their positions
    $response->assertSeeInOrder([
        'HOLONG SIREGAR, S.H.',
        'M.AKUNG KURNIA R, S.H., M.H.',
        'ADYTIA RACHMAN, S.H.',
        'DAUD WILTON PURBA, S.H.',
        'AKTOVEN L. RUMAPEA, S.H.',
        'YUDHA ANTARIKSA PUTRA, S.H.',
        'FELIX JONATHAN, S.H.',
        'DANIEL SORMIN',
    ]);

    // Check all photo assets are present in order
    $response->assertSeeInOrder([
        'holong-siregar.jpg',
        'm-akung-kurnia.jpg',
        'adytia-rachman.jpg',
        'daud-wilton.jpg',
        'aktoven.jpg',
        'yudha-antariksa.jpg',
        'felix-jonathan.jpg',
        'daniel.jpg',
    ]);

    // Verify linkedin and email are not present for lawyer cards
    $response->assertDontSee('law-attorney-social');
    $response->assertDontSee('aria-label="Email HOLONG', false);

    // Verify lawyers without detail do not have links to profile
    $response->assertDontSee('href="'.route('lawyers.show', 'felix-jonathan').'"', false);
    $response->assertDontSee('href="'.route('lawyers.show', 'daniel-sormin').'"', false);

    // Home page also displays all 8 members in order
    $home = $this->get('/');
    $home->assertOk();
    $home->assertSeeInOrder([
        'HOLONG SIREGAR, S.H.',
        'M.AKUNG KURNIA R, S.H., M.H.',
        'ADYTIA RACHMAN, S.H.',
        'DAUD WILTON PURBA, S.H.',
        'AKTOVEN L. RUMAPEA, S.H.',
        'YUDHA ANTARIKSA PUTRA, S.H.',
        'FELIX JONATHAN, S.H.',
        'DANIEL SORMIN',
    ]);
});

test('lawyers with detail profile can be viewed while lawyers without detail return 404', function () {
    // 1. Holong Siregar
    $holong = $this->get('/tim/holong-siregar');
    $holong->assertOk();
    $holong->assertSee('Pengadilan Tinggi Banten');
    $holong->assertSee('Indonesia 50 Best Lawyer');

    // 2. M. Akung Kurnia
    $akung = $this->get('/tim/m-akung-kurnia-r');
    $akung->assertOk();
    $akung->assertSee('Univ. Muhammadiyah Tangerang');
    $akung->assertSee('Doktoral (S3)');

    // 3. Adytia Rachman
    $adytia = $this->get('/tim/adytia-rachman');
    $adytia->assertOk();
    $adytia->assertSee('Badan Narkotika Nasional (BNN)');
    $adytia->assertSee('Universitas Esa Unggul');

    // 4. Daud Wilton Purba
    $daud = $this->get('/tim/daud-wilton-purba');
    $daud->assertOk();
    $daud->assertSee('IKHAPI');
    $daud->assertSee('Universitas Harapan Indonesia');

    // 5. Aktoven L. Rumapea
    $aktoven = $this->get('/tim/aktoven-l-rumapea');
    $aktoven->assertOk();
    $aktoven->assertSee('Universitas Indonesia');

    // 6. Yudha Antariksa Putra
    $yudha = $this->get('/tim/yudha-antariksa-putra');
    $yudha->assertOk();
    $yudha->assertSee('Universitas Esa Unggul');

    // 7 & 8: Felix Jonathan and Daniel Sormin do NOT have detail profiles -> 404
    $this->get('/tim/felix-jonathan')->assertNotFound();
    $this->get('/tim/daniel-sormin')->assertNotFound();
});

test('contact info renders official email, phone, and whatsapp url with 081-3188-41961 and 0857-7163-3860 across website', function () {
    $response = $this->get('/kontak');
    $response->assertOk();
    $response->assertSee('lawofficeholongsiregar@gmail.com');
    $response->assertSee('081-3188-41961');
    $response->assertSee('0857-7163-3860');
    $response->assertSee('https://wa.me/6281318841961', false);

    $home = $this->get('/');
    $home->assertOk();
    $home->assertSee('lawofficeholongsiregar@gmail.com');
    $home->assertSee('081-3188-41961');
    $home->assertSee('0857-7163-3860');
    $home->assertSee('https://wa.me/6281318841961', false);
    $home->assertSee('wa-float');
});

test('authentic office addresses for bogor and tangerang render across website', function () {
    $contact = $this->get('/kontak');
    $contact->assertOk();
    $contact->assertSee('Aspol Panaragan Kidul RT/RW: 04/04, Kec. Bogor Tengah, Kota Bogor');
    $contact->assertSee('Villa Grand Tomang, Periuk, Kota Tangerang');

    $home = $this->get('/');
    $home->assertOk();
    $home->assertSee('Aspol Panaragan Kidul RT/RW: 04/04, Kec. Bogor Tengah, Kota Bogor');
    $home->assertSee('Villa Grand Tomang, Periuk, Kota Tangerang');
    $home->assertSee('Kota Bogor &amp; Kota Tangerang', false);
});

test('authentic operating hours render across website', function () {
    $contact = $this->get('/kontak');
    $contact->assertOk();
    $contact->assertSee('Senin – Sabtu, 08:00 – 17:30 WIB');

    $home = $this->get('/');
    $home->assertOk();
    $home->assertSee('Senin – Sabtu, 08:00 – 17:30 WIB');
});
