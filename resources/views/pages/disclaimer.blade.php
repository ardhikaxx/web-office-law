@extends('layouts.app')

@section('title', 'Disclaimer | Holong Siregar & Co.')
@section('meta_description', 'Disclaimer resmi Holong Siregar & Co. Materi situs ini bersifat informasi umum dan bukan pengganti konsultasi hukum formal advokat.')
@section('canonical', route('disclaimer'))

@section('content')
    <section class="law-page-hero page-hero">
        <div class="container">
            <x-breadcrumb :items="[
                ['label' => 'Beranda', 'url' => route('home')],
                ['label' => 'Disclaimer'],
            ]" />
            <span class="law-section-eyebrow eyebrow text-gold-light">INFORMASI LEGAL</span>
            <h1 class="law-heading">Disclaimer Resmi</h1>
            <p>Ketentuan dan batasan hukum terkait penggunaan materi dan informasi di website ini.</p>
        </div>
    </section>

    <section class="law-section section">
        <div class="container" style="max-width: 860px;">
            <div class="law-card p-4 p-md-5 bg-white border">
                <div class="article-read">
                    <p>Informasi yang dimuat pada website <strong>Holong Siregar &amp; Co. Law Office</strong> disajikan semata-mata sebagai informasi umum dan edukasi hukum, bukan sebagai nasihat hukum formal atau pendapat hukum (legal opinion) untuk persoalan kasus individual tertentu. Setiap persoalan hukum memiliki dinamika, fakta, dan konteks tersendiri yang memerlukan telaah khusus.</p>
                    
                    <p>Membaca konten di website ini, mengirim pesan melalui formulir konsultasi, atau berkomunikasi awal melalui WhatsApp atau email <strong>tidak secara otomatis membentuk hubungan hukum advokat–klien</strong> (attorney-client relationship). Hubungan advokat–klien resmi hanya terbentuk setelah ada kesepakatan formal penugasan (surat kuasa/perjanjian jasa hukum) dari pihak kantor.</p>
                    
                    <p>Kami senantiasa berupaya memperbarui informasi secara akurat, namun tidak memberikan jaminan mutlak mengenai kesesuaian dan kelengkapan regulasi sewaktu-waktu. Kantor kami tidak bertanggung jawab atas tindakan atau keputusan yang diambil sepihak berdasarkan pembacaan informasi website tanpa konsultasi langsung bersama advokat kami.</p>
                    
                    <p>Apabila Anda memerlukan kepastian hukum atas situasi konkret yang sedang dihadapi, kami menyarankan untuk menjadwalkan konsultasi langsung bersama tim advokat kami.</p>
                </div>

                <div class="mt-4 pt-3 border-top d-flex gap-3 flex-wrap">
                    <a href="{{ route('contact') }}" class="btn btn-gold law-btn-primary">
                        <i class="fa-solid fa-comments me-2"></i>Jadwalkan Konsultasi
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
