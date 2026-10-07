@extends('layouts.app')

@section('title', 'Tentang Kami | Holong Siregar & Co. Law Office')
@section('meta_description', 'Profil Holong Siregar & Co. Law Office: kantor hukum yang berkomitmen memberikan pendampingan profesional, strategis, dan berintegritas.')

@section('content')
    {{-- Internal Page Hero --}}
    <section class="law-page-hero page-hero">
        <div class="container">
            <x-breadcrumb :items="[
                ['label' => 'Beranda', 'url' => route('home')],
                ['label' => 'Tentang Kami'],
            ]" />
            <span class="law-section-eyebrow eyebrow text-gold-light">TENTANG KAMI</span>
            <h1 class="law-heading">Tentang Holong Siregar &amp; Co.</h1>
            <p>
                Kantor hukum profesional yang berpegang teguh pada integritas, ketelitian analitis,
                dan komunikasi yang bertanggung jawab demi memberikan kepastian hukum bagi setiap klien.
            </p>
        </div>
    </section>

    {{-- Editorial Firm Profile --}}
    <section class="law-section section">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <x-section-heading
                        align="start"
                        eyebrow="PROFIL KANTOR"
                        title="Pendampingan Hukum yang Profesional &amp; Bertanggung Jawab"
                        description="Kami memahami bahwa setiap persoalan hukum menyangkut kepercayaan dan kelangsungan hak klien. Karena itu, setiap mandat ditangani dengan pemahaman mendalam, analisis cermat, dan strategi terukur — bukan sekadar rutinitas prosedur." />

                    <p>
                        Holong Siregar &amp; Co. mendampingi perorangan, keluarga, dan korporasi dalam persoalan perdata,
                        pidana, kontrak, tata kelola korporasi, ketenagakerjaan, hingga pertanahan melalui jalur litigasi
                        maupun non-litigasi yang proporsional.
                    </p>

                    <ul class="law-check-list check-list">
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Analisis komprehensif atas dokumen dan regulasi sebelum menentukan strategi</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Kerahasiaan data dan perlindungan informasi klien sebagai prioritas utama</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Komunikasi terbuka dan pelaporan perkembangan perkara secara berkala</span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="about-img law-card p-2 mb-4">
                        <img src="{{ asset('assets/images/office-team.svg') }}"
                             alt="Suasana kantor Holong Siregar &amp; Co."
                             class="rounded w-100"
                             loading="lazy">
                    </div>
                    <div class="law-quote-box quote-box">
                        “Kami memegang teguh ketelitian, kerahasiaan, dan kejujuran dalam berkomunikasi — agar setiap langkah hukum yang diambil benar-benar dipahami dan memberikan ketenangan bagi klien.”
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Visi & Misi --}}
    <section class="law-section section-soft bg-off-white" id="visi-misi">
        <div class="container">
            <x-section-heading
                eyebrow="VISI &amp; MISI"
                title="Komitmen &amp; Standar Pelayanan Kami"
                description="Landasan dedikasi Holong Siregar &amp; Co. dalam memberikan pendampingan hukum prima dan menjaga integritas profesi." />

            <div class="row g-4 align-items-stretch">
                {{-- Official Emblem Card: Officium Nobile & Simbol Keadilan --}}
                <div class="col-lg-4">
                    <div class="law-emblem-card text-white p-4 h-100 rounded-3 shadow-sm d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="law-emblem-glow" aria-hidden="true"></div>
                        <img src="{{ asset('assets/images/simbol-justice.png') }}"
                             alt="Simbol Keadilan - Holong Siregar &amp; Co."
                             class="law-emblem-img mb-3"
                             width="1855"
                             height="2048"
                             loading="lazy">
                        <span class="badge bg-gold text-navy fw-bold text-uppercase px-3 py-1 mb-2" style="letter-spacing: 0.15em;">
                            Officium Nobile
                        </span>
                        <h3 class="h5 text-white fw-bold mb-2">Simbol Integritas &amp; Keadilan</h3>
                        <p class="small text-white-50 mb-0">
                            Menjunjung tinggi kehormatan profesi advokat dengan integritas moral, kepatuhan kode etik, dan dedikasi penuh memperjuangkan hak hukum klien.
                        </p>
                    </div>
                </div>

                {{-- Visi Kami --}}
                <div class="col-lg-4 col-md-6">
                    <div class="law-card bg-white p-4 p-md-5 h-100 border rounded-3 shadow-sm d-flex flex-column">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="law-service-icon mb-0" style="font-size:1.85rem;">
                                <i class="fa-solid fa-compass text-gold"></i>
                            </div>
                            <div>
                                <span class="text-gold-dark fw-bold small text-uppercase">Standar Jasa Hukum</span>
                                <h2 class="h3 law-heading mb-0">Visi Kami</h2>
                            </div>
                        </div>
                        <p class="law-section-desc fs-5 leading-relaxed text-navy mb-0 pt-2">
                            {{ $vision ?? config('lawfirm.vision') }}
                        </p>
                    </div>
                </div>

                {{-- Misi Kami --}}
                <div class="col-lg-4 col-md-6">
                    <div class="law-card bg-white p-4 p-md-5 h-100 border rounded-3 shadow-sm d-flex flex-column">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="law-service-icon mb-0" style="font-size:1.85rem;">
                                <i class="fa-solid fa-scale-balanced text-gold"></i>
                            </div>
                            <div>
                                <span class="text-gold-dark fw-bold small text-uppercase">Officium Nobile</span>
                                <h2 class="h3 law-heading mb-0">Misi Kami</h2>
                            </div>
                        </div>
                        <p class="law-section-desc fs-5 leading-relaxed text-navy mb-0 pt-2">
                            {{ $mission ?? config('lawfirm.mission') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Nilai-Nilai Kami --}}
    <section class="law-section section">
        <div class="container">
            <x-section-heading
                eyebrow="NILAI-NILAI UTAMA"
                title="Prinsip yang Menjadi Fondasi Kami"
                description="Standar profesionalitas dan etika yang membimbing setiap langkah kerja advokat kami." />

            <div class="row g-4">
                @foreach ($values as $value)
                    <div class="col-md-6 col-lg-4">
                        <div class="law-value-card value-card">
                            <i class="{{ $value['icon'] }}" aria-hidden="true"></i>
                            <h3>{{ $value['title'] }}</h3>
                            <p>{{ $value['text'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Alur Pendampingan --}}
    <section class="law-section section-soft bg-off-white">
        <div class="container">
            <x-section-heading
                eyebrow="METODOLOGI KERJA"
                title="Alur Pendampingan Terstruktur"
                description="Proses kerja transparan agar klien memahami setiap tahapan dan perkembangan penanganan perkara." />

            @php
                $steps = [
                    ['t' => 'Memahami Kebutuhan', 'd' => 'Mendengarkan kronologi, identifikasi tujuan klien, dan inventarisasi berkas pendukung awal.'],
                    ['t' => 'Menganalisis Persoalan', 'd' => 'Menelaah fakta hukum, dokumen, dan regulasi terkait secara komprehensif.'],
                    ['t' => 'Menyusun Strategi', 'd' => 'Merumuskan opsi tindakan hukum beserta analisis risiko dan estimasi sumber daya.'],
                    ['t' => 'Pelaksanaan Pendampingan', 'd' => 'Menjalankan langkah hukum yang disepakati dengan pelaporan berkala yang tertib.'],
                    ['t' => 'Evaluasi & Solusi Lanjutan', 'd' => 'Meninjau capaian bersama klien dan memastikan kepastian hukum jangka panjang.'],
                ];
            @endphp

            <div class="row g-4">
                @foreach ($steps as $i => $step)
                    <div class="col-md-6 col-lg-4">
                        <div class="law-step-card step-card">
                            <span class="law-step-num step-num">{{ $i + 1 }}</span>
                            <h3>{{ $step['t'] }}</h3>
                            <p class="text-muted mb-0">{{ $step['d'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Tim Kami --}}
    <section class="law-section section">
        <div class="container">
            <x-section-heading
                eyebrow="TIM ADVOKAT"
                title="Advokat &amp; Konsultan Hukum Kami"
                description="Profesional berdedikasi yang siap memberikan solusi hukum terbaik untuk Anda." />

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
