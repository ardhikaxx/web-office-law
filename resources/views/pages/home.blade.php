@extends('layouts.app')

@section('title', 'Holong Siregar & Co. Law Office | Pendampingan Hukum Profesional')
@section('meta_description', 'Holong Siregar & Co. Law Office memberikan pendampingan hukum profesional: perdata, pidana, kontrak, korporasi, ketenagakerjaan, keluarga, dan pertanahan.')

@section('content')
    {{-- HERO --}}
    <section class="hero">
        <div class="hero-bg" aria-hidden="true"></div>
        <div class="hero-overlay" aria-hidden="true"></div>
        <div class="container hero-content">
            <span class="hero-label">HOLONG SIREGAR &amp; CO. LAW OFFICE</span>
            <h1 class="hero-title">Solusi Hukum yang Tegas, Terukur, dan Terpercaya</h1>
            <p class="hero-text">
                Holong Siregar &amp; Co. memberikan pendampingan hukum profesional melalui analisis
                yang cermat, strategi yang relevan, serta komunikasi yang bertanggung jawab.
            </p>
            <div class="hero-actions">
                <a href="{{ route('contact') }}" class="btn btn-gold btn-lg">Konsultasi Sekarang</a>
                <a href="{{ route('services.index') }}" class="btn btn-outline-light btn-lg">Pelajari Layanan</a>
            </div>
            <div class="hero-stats">
                <div class="hero-stat">
                    <strong>8+</strong>
                    <span>Bidang Layanan Hukum</span>
                </div>
                <div class="hero-stat">
                    <strong>2</strong>
                    <span>Area Praktik: Litigasi &amp; Non-Litigasi</span>
                </div>
                <div class="hero-stat">
                    <strong>4+</strong>
                    <span>Advokat &amp; Profesional</span>
                </div>
            </div>
        </div>
    </section>

    {{-- INTRO --}}
    <section class="section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('assets/images/office-team.svg') }}" alt="Suasana kantor Holong Siregar & Co." loading="lazy" width="800" height="620">
                    </div>
                </div>
                <div class="col-lg-6">
                    <x-section-heading align="start" eyebrow="Profil Kantor"
                        title="Pendampingan Hukum dengan Pendekatan yang Terukur"
                        description="Kami mengutamakan ketelitian, kerahasiaan, komunikasi yang terbuka, strategi yang relevan, serta orientasi pada solusi dalam setiap perkara dan transaksi yang kami tangani." />
                    <ul class="check-list">
                        <li><i class="fa-solid fa-circle-check"></i>Analisis fakta dan dokumen secara cermat sebelum bertindak</li>
                        <li><i class="fa-solid fa-circle-check"></i>Kerahasiaan informasi klien sebagai prioritas</li>
                        <li><i class="fa-solid fa-circle-check"></i>Strategi yang disesuaikan dengan kebutuhan dan konteks</li>
                        <li><i class="fa-solid fa-circle-check"></i>Komunikasi perkembangan perkara secara terbuka</li>
                    </ul>
                    <a href="{{ route('about') }}" class="btn btn-navy mt-2">Tentang Kami</a>
                </div>
            </div>
        </div>
    </section>

    {{-- SERVICES --}}
    <section class="section section-soft">
        <div class="container">
            <x-section-heading eyebrow="Layanan Hukum" title="Ruang Lingkup Praktik"
                description="Delapan bidang layanan utama yang dapat disesuaikan dengan kebutuhan perorangan, keluarga, maupun perusahaan." />
            @if (count($services))
                <div class="row g-4">
                    @foreach ($services as $service)
                        <div class="col-md-6 col-lg-4">
                            <x-service-card :service="$service" />
                        </div>
                    @endforeach
                </div>
                <div class="text-center mt-4">
                    <a href="{{ route('services.index') }}" class="btn btn-outline-navy">Lihat Semua Layanan</a>
                </div>
            @else
                <div class="empty-state">Data layanan belum tersedia.</div>
            @endif
        </div>
    </section>

    {{-- PRACTICE AREAS --}}
    <section class="section">
        <div class="container">
            <x-section-heading eyebrow="Area Praktik" title="Litigasi &amp; Non-Litigasi"
                description="Dua pendekatan utama pendampingan: penyelesaian melalui jalur hukum dan pencegahan melalui pendampingan preventif." />
            <div class="row g-4">
                @foreach ($practiceAreas as $area)
                    <div class="col-md-6">
                        <x-practice-card :area="$area" />
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- WHY US --}}
    <section class="section section-soft">
        <div class="container">
            <x-section-heading eyebrow="Pendekatan Kami" title="Mengapa Memilih Kami"
                description="Prinsip kerja yang menjaga profesionalisme tanpa klaim berlebihan." />
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

    {{-- TEAM --}}
    <section class="section">
        <div class="container">
            <x-section-heading eyebrow="Tim Kami" title="Advokat &amp; Profesional"
                description="Kenali tim yang akan mendampingi kebutuhan hukum Anda." />
            <div class="row g-4">
                @foreach ($lawyers as $lawyer)
                    <div class="col-sm-6 col-lg-3">
                        <x-lawyer-card :lawyer="$lawyer" />
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('lawyers.index') }}" class="btn btn-outline-navy">Lihat Seluruh Tim</a>
            </div>
        </div>
    </section>

    {{-- ARTICLES --}}
    @if (count($articles))
        <section class="section section-soft">
            <div class="container">
                <x-section-heading eyebrow="Insight Hukum" title="Artikel &amp; Wawasan"
                    description="Tulisan informatif seputar persoalan hukum yang sering dihadapi masyarakat dan pelaku usaha." />
                <div class="row g-4">
                    @foreach ($articles as $article)
                        <div class="col-md-6 col-lg-4">
                            <x-article-card :article="$article" />
                        </div>
                    @endforeach
                </div>
                <div class="text-center mt-4">
                    <a href="{{ route('articles.index') }}" class="btn btn-outline-navy">Lihat Semua Artikel</a>
                </div>
            </div>
        </section>
    @endif

    <x-cta />
@endsection
