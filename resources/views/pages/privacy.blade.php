@extends('layouts.app')

@section('title', 'Kebijakan Privasi | Holong Siregar & Co. Law Office')
@section('meta_description', 'Kebijakan privasi Holong Siregar & Co. Law Office mengenai komitmen kerahasiaan data pribadi dan informasi perkara klien.')
@section('canonical', route('privacy'))

@section('content')
    <section class="law-page-hero page-hero">
        <div class="container">
            <x-breadcrumb :items="[
                ['label' => 'Beranda', 'url' => route('home')],
                ['label' => 'Kebijakan Privasi'],
            ]" />
            <span class="law-section-eyebrow eyebrow text-gold-light">INFORMASI LEGAL</span>
            <h1 class="law-heading">Kebijakan Privasi</h1>
            <p>Komitmen kami dalam menjaga kerahasiaan dan keamanan data pengunjung serta calon klien.</p>
        </div>
    </section>

    <section class="law-section section">
        <div class="container" style="max-width: 860px;">
            <div class="law-card p-4 p-md-5 bg-white border">
                <div class="article-read">
                    <p><strong>Holong Siregar &amp; Co. Law Office</strong> menghormati dan menjunjung tinggi hak privasi setiap pengunjung. Kebijakan ini menguraikan bagaimana kami mengelola data yang disampaikan melalui formulir konsultasi maupun saluran komunikasi resmi kami.</p>

                    <h3 class="h5 law-heading mt-4 mb-2">1. Pengumpulan Informasi</h3>
                    <p>Melalui formulir konsultasi, kami menerima identitas berupa nama lengkap, nomor kontak/WhatsApp, alamat email, jenis kebutuhan hukum, subjek, dan ringkasan persoalan yang Anda sampaikan secara sukarela.</p>

                    <h3 class="h5 law-heading mt-4 mb-2">2. Pemanfaatan Data</h3>
                    <p>Data tersebut digunakan semata-mata untuk peninjauan awal kebutuhan perkara hukum Anda dan keperluan korespondensi tim advokat kami guna menindaklanjuti permintaan konsultasi. Data tidak pernah disebarluaskan, diperjualbelikan, atau dialihkan kepada pihak ketiga untuk kepentingan komersial.</p>

                    <h3 class="h5 law-heading mt-4 mb-2">3. Kerahasiaan &amp; Etika Profesi</h3>
                    <p>Setiap informasi yang diterima dilindungi oleh etika kerahasiaan profesi advokat dan hanya diakses oleh personel yang berwenang untuk menganalisis perkara terkait.</p>

                    <h3 class="h5 law-heading mt-4 mb-2">4. Batasan Informasi Rahasia</h3>
                    <p>Demi keamanan bersama pada tahap pra-konsultasi daring, kami mengimbau agar tidak menyertakan data autentikasi sangat sensitif (seperti kata sandi, kode PIN, atau detail perbankan privat) di dalam formulir website sebelum terikat dalam hubungan kuasa resmi.</p>

                    <h3 class="h5 law-heading mt-4 mb-2">5. Kontak Privasi</h3>
                    <p>Apabila Anda memiliki pertanyaan lebih lanjut mengenai pengelolaan data pribadi Anda, silakan hubungi kami melalui alamat email resmi yang tercantum di website ini.</p>
                </div>

                <div class="mt-4 pt-3 border-top d-flex gap-3 flex-wrap">
                    <a href="{{ route('contact') }}" class="btn btn-gold law-btn-primary">
                        <i class="fa-solid fa-comments me-2"></i>Hubungi Kantor Kami
                    </a>
                    <a href="{{ route('home') }}" class="btn btn-outline-navy law-btn-outline">
                        Kembali ke Beranda
                    </a>
                </div>
            </div>
        </div>
    </section>

    <x-cta />
@endsection
