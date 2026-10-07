@extends('layouts.app')

@section('title', \App\Support\Seo::title('Area Praktik ' . $area['title'] . ' di Tangerang & Bogor'))
@section('meta_description', 'Pendampingan hukum ' . strtolower($area['title']) . ' oleh advokat pengacara Holong Siregar & Co. di Pengadilan Negeri Tangerang, PN Bogor, dan kawasan Jabodetabek.')
@section('meta_keywords', \App\Support\Seo::keywords(['advokat ' . strtolower($area['title']) . ' tangerang', 'pengacara ' . strtolower($area['title']) . ' tangerang', 'litigasi pn tangerang', 'non litigasi bsd']))
@section('canonical', route('practice-areas.show', $area['slug']))

@section('content')
    <section class="law-page-hero page-hero">
        <div class="container">
            <x-breadcrumb :items="[
                ['label' => 'Beranda', 'url' => route('home')],
                ['label' => 'Area Praktik', 'url' => route('practice-areas.index')],
                ['label' => $area['title']],
            ]" />
            <span class="law-section-eyebrow eyebrow text-gold-light">
                AREA PRAKTIK — {{ strtoupper($area['type'] ?? $area['title']) }}
            </span>
            <h1 class="law-heading">{{ $area['title'] }}</h1>
            <p>{{ $area['short_description'] }}</p>
        </div>
    </section>

    <section class="law-section section">
        <div class="container">
            <div class="row g-5">
                {{-- Left Content --}}
                <div class="col-lg-8">
                    <div class="law-card p-4 p-md-5 bg-white mb-4">
                        <div class="d-flex align-items-center gap-3 mb-4">
                            <div class="law-service-icon mb-0">
                                <i class="{{ $area['icon'] ?? 'fa-solid fa-gavel' }}"></i>
                            </div>
                            <div>
                                <h2 class="h3 law-heading mb-1">Pendekatan &amp; Strategi</h2>
                                <span class="badge bg-navy text-gold-light">{{ $area['type'] }}</span>
                            </div>
                        </div>

                        <p class="text-muted leading-relaxed">{{ $area['description'] }}</p>

                        @if (!empty($area['points']))
                            <h3 class="h5 law-heading mt-4 mb-3">Fokus Penanganan</h3>
                            <ul class="law-check-list check-list">
                                @foreach ($area['points'] as $point)
                                    <li>
                                        <i class="fa-solid fa-circle-check"></i>
                                        <span>{{ $point }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        @endif

                        <div class="alert alert-light border mt-4 p-3 d-flex align-items-center gap-3">
                            <i class="fa-solid fa-scale-balanced text-gold fs-4"></i>
                            <div class="small text-muted">
                                Kami tidak menjanjikan hasil kemenangan mutlak perkara. Setiap langkah hukum dirancang cermat berdasarkan fakta objektif, alat bukti yang sah, dan koridor peraturan perundang-undangan.
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Sidebar --}}
                <div class="col-lg-4">
                    <div class="law-card p-4 bg-white mb-4 border">
                        <div class="text-center mb-3">
                            <i class="fa-solid fa-handshake text-gold fs-2 mb-2"></i>
                            <h3 class="h5 law-heading mb-1">Konsultasikan Kasus Anda</h3>
                            <p class="text-muted small">Diskusikan kebutuhan pendampingan di area {{ strtolower($area['title']) }} bersama kami.</p>
                        </div>
                        <a href="{{ route('contact') }}" class="btn btn-gold law-btn-primary w-100 mb-2">
                            <i class="fa-solid fa-comments me-2"></i>Konsultasi Sekarang
                        </a>
                        <a href="{{ route('services.index') }}" class="btn btn-outline-navy law-btn-outline w-100">
                            <span>Lihat Layanan Terkait</span>
                        </a>
                    </div>

                    @if (count($others))
                        <div class="law-card p-4 bg-white border">
                            <h3 class="h6 law-heading mb-3">Area Praktik Lainnya</h3>
                            <div class="d-flex flex-column gap-2">
                                @foreach ($others as $other)
                                    <div class="border rounded p-3 bg-off-white">
                                        <span class="small text-gold-dark fw-bold d-block mb-1">AREA PRAKTIK</span>
                                        <a href="{{ route('practice-areas.show', $other['slug']) }}" class="fw-bold text-navy text-decoration-none">
                                            {{ $other['title'] }} &rarr;
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <x-cta />
@endsection
