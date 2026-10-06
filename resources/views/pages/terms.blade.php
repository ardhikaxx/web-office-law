@extends('layouts.app')

@section('title', 'Syarat & Ketentuan | Holong Siregar & Co. Law Office')
@section('meta_description', 'Syarat dan ketentuan penggunaan website Holong Siregar & Co. Law Office.')

@section('content')
    <section class="page-hero">
        <div class="container">
            <x-breadcrumb :items="[
                ['label' => 'Beranda', 'url' => route('home')],
                ['label' => 'Syarat & Ketentuan'],
            ]" />
            <p class="eyebrow">INFORMASI LEGAL</p>
            <h1>Syarat &amp; Ketentuan</h1>
        </div>
    </section>

    <section class="section">
        <div class="container" style="max-width: 820px;">
            <div class="article-read">
                <p><strong>1. Penggunaan website.</strong> Website ini disediakan sebagai profil dan sarana informasi umum Holong Siregar &amp; Co. Law Office. Pengunjung diharapkan menggunakan informasi secara bijak dan tidak menyalahgunakan formulir yang tersedia.</p>
                <p><strong>2. Bukan nasihat hukum.</strong> Seluruh materi pada website, termasuk artikel dan halaman layanan, bersifat informasi umum dan bukan pengganti konsultasi langsung dengan advokat.</p>
                <p><strong>3. Permintaan konsultasi.</strong> Pengiriman formulir merupakan permintaan awal untuk ditinjau. Kantor dapat meminta informasi tambahan atau menyatakan tidak dapat menangani suatu permintaan sesuai kapasitas dan ketentuan profesi.</p>
                <p><strong>4. Hak kekayaan intelektual.</strong> Seluruh konten website dilindungi dan tidak diperkenankan disalin untuk tujuan komersial tanpa izin tertulis.</p>
                <p><strong>5. Perubahan.</strong> Syarat dan ketentuan ini dapat diperbarui sewaktu-waktu mengikuti kebutuhan layanan dan ketentuan yang berlaku.</p>
            </div>
        </div>
    </section>

    <x-cta />
@endsection
