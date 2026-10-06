@extends('layouts.app')

@section('title', 'Tentang Kami | Holong Siregar & Co. Law Office')
@section('meta_description', 'Profil Holong Siregar & Co. Law Office: kantor hukum yang berkomitmen memberikan pendampingan profesional, strategis, dan berintegritas.')

@section('content')
    <section class="page-hero">
        <div class="container">
            <x-breadcrumb :items="[
                ['label' => 'Beranda', 'url' => route('home')],
                ['label' => 'Tentang Kami'],
            ]" />
            <p class="eyebrow">TENTANG KAMI</p>
            <h1>Tentang Kami</h1>
            <p>Holong Siregar &amp; Co. adalah kantor hukum yang berkomitmen memberikan pendampingan dan solusi hukum yang profesional, strategis, dan berintegritas — dengan ketelitian, kerahasiaan, dan komunikasi yang terbuka.</p>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <x-section-heading align="start" eyebrow="Profil Kantor" title="Pendampingan yang Profesional &amp; Bertanggung Jawab"
                        description="Kami memahami bahwa setiap persoalan hukum menyangkut kepercayaan. Karena itu setiap mandat ditangani dengan pemahaman mendalam terhadap kebutuhan klien, analisis yang cermat, dan pendekatan yang berorientasi pada solusi — bukan sekadar prosedur." />
                    <p class="text-muted">Holong Siregar &amp; Co. mendampingi perorangan, keluarga, dan perusahaan dalam persoalan perdata, pidana, kontrak, korporasi, ketenagakerjaan, keluarga, hingga pertanahan — melalui jalur litigasi maupun non-litigasi sesuai kebutuhan.</p>
                </div>
                <div class="col-lg-6">
                    <div class="quote-box">
                        “Kami memegang teguh ketelitian, kerahasiaan, dan kejujuran dalam berkomunikasi — agar setiap langkah hukum yang diambil benar-benar dipahami dan disetujui klien.”
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-soft">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="info-card h-100">
                        <h2 class="h4">Visi</h2>
                        <p class="text-muted mb-0">Menjadi kantor hukum yang dipercaya karena integritas, ketelitian, dan kualitas pendampingan — memberikan kepastian dan ketenangan bagi setiap klien dalam menghadapi persoalan hukum.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="info-card h-100">
                        <h2 class="h4">Misi</h2>
                        <ul class="check-list mt-2 mb-0">
                            <li><i class="fa-solid fa-circle-check"></i>Memberikan analisis hukum yang cermat dan jujur</li>
                            <li><i class="fa-solid fa-circle-check"></i>Menyusun strategi yang relevan dengan kebutuhan klien</li>
                            <li><i class="fa-solid fa-circle-check"></i>Menjaga kerahasiaan dan etika profesi</li>
                            <li><i class="fa-solid fa-circle-check"></i>Mengomunikasikan setiap perkembangan secara terbuka</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <x-section-heading eyebrow="Nilai-Nilai Kami" title="Prinsip yang Kami Pegang" />
            <div class="row g-4">
                @foreach ($values as $value)
                    <div class="col-md-6 col-lg-4">
                        <div class="value-card h-100">
                            <i class="{{ $value['icon'] }}" aria-hidden="true"></i>
                            <h3>{{ $value['title'] }}</h3>
                            <p>{{ $value['text'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section section-soft">
        <div class="container">
            <x-section-heading eyebrow="Pendekatan" title="Alur Pendampingan Kami"
                description="Proses yang terstruktur agar klien memahami setiap tahapan — tanpa menjanjikan hasil perkara." />
            <div class="row g-4">
                @php
                    $steps = [
                        ['t' => 'Memahami Kebutuhan', 'd' => 'Mendengarkan kronologi dan tujuan klien, serta mengumpulkan dokumen awal.'],
                        ['t' => 'Menganalisis Persoalan', 'd' => 'Menelaah fakta, dokumen, dan regulasi yang relevan secara cermat.'],
                        ['t' => 'Menyusun Strategi', 'd' => 'Merumuskan opsi langkah hukum beserta risiko dan estimasinya.'],
                        ['t' => 'Melakukan Pendampingan', 'd' => 'Menjalankan strategi yang disepakati dengan dokumentasi tertib.'],
                        ['t' => 'Mengevaluasi Hasil', 'd' => 'Meninjau capaian bersama klien dan menentukan langkah lanjutan.'],
                    ];
                @endphp
                @foreach ($steps as $i => $step)
                    <div class="col-md-6 col-lg-4">
                        <div class="step-card">
                            <span class="step-num">{{ $i + 1 }}</span>
                            <h3>{{ $step['t'] }}</h3>
                            <p class="text-muted mb-0">{{ $step['d'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <x-section-heading eyebrow="Tim Kami" title="Advokat &amp; Profesional" />
            <div class="row g-4">
                @foreach ($lawyers as $lawyer)
                    <div class="col-sm-6 col-lg-3">
                        <x-lawyer-card :lawyer="$lawyer" />
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <x-cta />
@endsection
