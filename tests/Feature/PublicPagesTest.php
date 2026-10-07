<?php

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

test('consultation form validates and succeeds', function () {
    $payload = [
        'name' => 'Budi Santoso',
        'phone' => '081234567890',
        'email' => 'budi@example.com',
        'legal_need' => 'Perdata Umum & Khusus',
        'subject' => 'Konsultasi wanprestasi kontrak',
        'message' => 'Saya membutuhkan pendampingan terkait wanprestasi kontrak kerja sama usaha yang terjadi sejak tiga bulan lalu.',
        'agreement' => '1',
    ];

    $this->post('/kontak', $payload)->assertRedirect(route('contact'));
    $this->post('/kontak', [])->assertSessionHasErrors(['name', 'phone', 'email', 'message', 'agreement']);
});

test('about page renders authentic vision and mission', function () {
    $response = $this->get('/tentang-kami');
    $response->assertOk();
    $response->assertSee('Visi Kami');
    $response->assertSee('Misi Kami');
    $response->assertSee('Memberikan solusi tepat pada permasalahan hukum');
    $response->assertSee('OFFICIUM NOBILE');
});
