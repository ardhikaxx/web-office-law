@extends('layouts.app')

@section('title', 'Kebijakan Privasi | Holong Siregar & Co. Law Office')
@section('meta_description', 'Kebijakan privasi Holong Siregar & Co. mengenai penggunaan data formulir konsultasi dan informasi kontak.')

@section('content')
    <section class="page-hero">
        <div class="container">
            <x-breadcrumb :items="[
                ['label' => 'Beranda', 'url' => route('home')],
                ['label' => 'Kebijakan Privasi'],
            ]" />
            <p class="eyebrow">INFORMASI LEGAL</p>
            <h1>Kebijakan Privasi</h1>
        </div>
    </section>

    <section class="section">
        <div class="container" style="max-width: 820px;">
            <div class="article-read">
                <p>Holong Siregar &amp; Co. Law Office menghormati privasi setiap pengunjung website. Kebijakan ini menjelaskan data yang kami terima melalui formulir konsultasi dan cara kami menggunakannya.</p>
                <p><strong>1. Data yang dikumpulkan.</strong> Melalui formulir konsultasi kami menerima nama, nomor telepon/WhatsApp, email, jenis kebutuhan hukum, subjek, dan ringkasan permasalahan yang Anda tuliskan.</p>
                <p><strong>2. Tujuan penggunaan.</strong> Data tersebut digunakan semata-mata untuk meninjau permintaan konsultasi awal dan menghubungi Anda mengenai langkah berikutnya. Data tidak ditampilkan kepada publik.</p>
                <p><strong>3. Kerahasiaan.</strong> Setiap permintaan ditangani dengan mengutamakan kerahasiaan dan hanya diakses untuk keperluan peninjauan awal.</p>
                <p><strong>4. Penyimpanan.</strong> Dalam versi hard-coded ini data tidak disimpan permanen pada database. Hindari mencantumkan data yang sangat sensitif (misalnya kata sandi atau nomor identitas lengkap) pada formulir.</p>
                <p><strong>5. Kontak.</strong> Untuk pertanyaan mengenai data Anda, hubungi kami melalui email atau WhatsApp resmi yang tercantum pada halaman Kontak.</p>
            </div>
        </div>
    </section>

    <x-cta />
@endsection
