@extends('layouts.app')

@section('title', 'Disclaimer | Holong Siregar & Co. Law Office')
@section('meta_description', 'Disclaimer Holong Siregar & Co.: informasi website bersifat umum dan bukan nasihat hukum individual.')

@section('content')
    <section class="page-hero">
        <div class="container">
            <x-breadcrumb :items="[
                ['label' => 'Beranda', 'url' => route('home')],
                ['label' => 'Disclaimer'],
            ]" />
            <p class="eyebrow">INFORMASI LEGAL</p>
            <h1>Disclaimer</h1>
        </div>
    </section>

    <section class="section">
        <div class="container" style="max-width: 820px;">
            <div class="article-read">
                <p>Informasi yang dimuat pada website Holong Siregar &amp; Co. Law Office bersifat informasi umum dan tidak dimaksudkan sebagai nasihat hukum untuk persoalan individual tertentu. Setiap persoalan hukum memiliki fakta dan konteks yang berbeda sehingga memerlukan analisis tersendiri.</p>
                <p>Membaca informasi pada website ini, mengisi formulir konsultasi, atau menghubungi kantor melalui WhatsApp, email, maupun sarana lain tidak dengan sendirinya membentuk hubungan advokat–klien. Hubungan advokat–klien terbentuk setelah adanya konfirmasi dan kesepakatan penugasan dari kantor.</p>
                <p>Kami berupaya menyajikan informasi yang akurat, namun tidak memberikan jaminan mengenai kelengkapan atau kemutakhiran seluruh materi. Kantor tidak bertanggung jawab atas tindakan yang diambil semata-mata berdasarkan informasi pada website ini tanpa konsultasi langsung.</p>
                <p>Apabila Anda membutuhkan pendampingan atas persoalan spesifik, silakan sampaikan permintaan konsultasi melalui halaman Kontak untuk ditinjau lebih lanjut.</p>
            </div>
        </div>
    </section>

    <x-cta />
@endsection
