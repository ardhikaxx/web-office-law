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
        '/artikel',
        '/artikel/memahami-wanprestasi-hak-anda-saat-kontrak-dilanggar',
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
    $this->get('/artikel/tidak-ada')->assertNotFound();
    $this->get('/area-praktik/tidak-ada')->assertNotFound();
});

test('home page renders official justice symbol asset in hero', function () {
    $response = $this->get('/');
    $response->assertOk();
    $response->assertSee('simbol-justice.png');
    $response->assertSee('Holong Siregar');
});

test('navbar and footer render logo with full rounded styling', function () {
    $response = $this->get('/');
    $response->assertOk();
    $response->assertSee('assets/images/logo.png');
    $response->assertSee('rounded-circle');
    $response->assertSee('rounded-full');
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
