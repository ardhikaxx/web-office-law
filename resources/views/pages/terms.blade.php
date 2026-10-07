@extends('layouts.app')

@section('title', 'Syarat & Ketentuan | Holong Siregar & Co. Law Office')
@section('meta_description', 'Syarat dan ketentuan resmi penggunaan website Holong Siregar & Co. Law Office.')

@section('content')
    <section class="law-page-hero page-hero">
        <div class="container">
            <x-breadcrumb :items="[
                ['label' => 'Beranda', 'url' => route('home')],
                ['label' => 'Syarat & Ketentuan'],
            ]" />
            <span class="law-section-eyebrow eyebrow text-gold-light">INFORMASI LEGAL</span>
            <h1 class="law-heading">Syarat &amp; Ketentuan</h1>
            <p>Ketentuan umum mengenai akses dan pemanfaatan sarana informasi website kantor hukum kami.</p>
        </div>
    </section>

    <section class="law-section section">
        <div class="container" style="max-width: 860px;">
            <div class="law-card p-4 p-md-5 bg-white border">
                <div class="article-read">
                    <h3 class="h5 law-heading mb-2">1. Ketentuan Penggunaan</h3>
                    <p>Website ini dikelola sebagai media informasi resmi profil firma, cakupan layanan hukum, dan sarana awal kontak Holong Siregar &amp; Co. Law Office. Pengunjung diharapkan mengakses informasi dengan itikad baik dan tidak menyalahgunakan sarana formulir yang disediakan.</p>

                    <h3 class="h5 law-heading mt-4 mb-2">2. Bukan Nasihat Hukum Formal</h3>
                    <p>Seluruh materi publikasi dan ringkasan layanan merupakan penjelasan umum dan tidak dapat dipersamakan dengan advis hukum formal. Keputusan hukum harus senantiasa didasarkan pada konsultasi komprehensif terhadap dokumen dan fakta perkara yang utuh.</p>

                    <h3 class="h5 law-heading mt-4 mb-2">3. Penanganan Permintaan Konsultasi</h3>
                    <p>Penyampaian formulir merupakan permintaan awal untuk ditinjau. Kantor berhak meminta penjelasan pendukung atau menyatakan tidak dapat menerima penanganan suatu perkara apabila terdapat potensi benturan kepentingan (conflict of interest) atau kendala kapasitas penanganan sesuai kode etik advokat.</p>

                    <h3 class="h5 law-heading mt-4 mb-2">4. Hak Cipta &amp; Kekayaan Intelektual</h3>
                    <p>Seluruh teks, logo, desain, dan materi grafis di dalam website ini merupakan kekayaan intelektual milik Holong Siregar &amp; Co. Law Office dan dilarang untuk disalin, direproduksi, atau didistribusikan secara komersial tanpa persetujuan tertulis resmi.</p>

                    <h3 class="h5 law-heading mt-4 mb-2">5. Perubahan Ketentuan</h3>
                    <p>Firma kami berhak memperbarui dan menyesuaikan syarat dan ketentuan ini sewaktu-waktu sejalan dengan perkembangan regulasi yang berlaku di Indonesia.</p>
                </div>

                <div class="mt-4 pt-3 border-top d-flex gap-3 flex-wrap">
                    <a href="{{ route('contact') }}" class="btn btn-gold law-btn-primary">
                        <i class="fa-solid fa-comments me-2"></i>Konsultasi dengan Kami
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
