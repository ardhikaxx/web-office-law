@extends('layouts.app')

@section('title', $service['title'] . ' | Layanan Advokat & Pengacara Holong Siregar & Co.')
@section('meta_description', $service['short_description'] . ' Pendampingan hukum terpercaya oleh kantor advokat Holong Siregar & Co. di Bogor & Tangerang.')
@section('meta_keywords', strtolower($service['title']) . ', pengacara ' . strtolower($service['title']) . ', jasa hukum ' . strtolower($service['title']) . ', kantor hukum bogor, advokat tangerang, holong siregar')

@section('content')
    <section class="law-page-hero page-hero">
        <div class="container">
            <x-breadcrumb :items="[
                ['label' => 'Beranda', 'url' => route('home')],
                ['label' => 'Layanan Hukum', 'url' => route('services.index')],
                ['label' => $service['title']],
            ]" />
            <span class="law-section-eyebrow eyebrow text-gold-light">LAYANAN HUKUM</span>
            <h1 class="law-heading">{{ $service['title'] }}</h1>
            <p>{{ $service['short_description'] }}</p>
        </div>
    </section>

    <section class="law-section section">
        <div class="container">
            <div class="row g-5">
                {{-- Main Content --}}
                <div class="col-lg-8">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="law-service-icon mb-0" style="width:60px;height:60px;font-size:1.6rem;">
                            <i class="{{ $service['icon'] ?? 'fa-solid fa-scale-balanced' }}"></i>
                        </div>
                        <div>
                            <h2 class="h3 law-heading mb-1">Ruang Lingkup &amp; Penanganan</h2>
                            <span class="text-gold-dark fw-bold small">BIDANG PRAKTIK PROFESIONAL</span>
                        </div>
                    </div>

                    <div class="law-card p-4 p-md-5 bg-white mb-4">
                        <h3 class="h5 law-heading mb-3">Deskripsi Layanan</h3>
                        <p class="text-muted leading-relaxed">{{ $service['description'] }}</p>

                        @if (!empty($service['scopes']))
                            <h3 class="h5 law-heading mt-4 mb-3">Cakupan Pendampingan Kami</h3>
                            <ul class="law-check-list check-list">
                                @foreach ($service['scopes'] as $scope)
                                    <li>
                                        <i class="fa-solid fa-circle-check"></i>
                                        <span>{{ $scope }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        @endif

                        <h3 class="h5 law-heading mt-4 mb-3">Pendekatan Kerja Tim Kami</h3>
                        <p class="text-muted">
                            Setiap penanganan diawali dengan telaah fakta dan alat bukti, pemetaan risiko yuridis,
                            serta formulasi opsi strategi yang proporsional. Seluruh keputusan krusial didiskusikan
                            bersama klien, dan perkembangan proses terdokumentasi secara transparan dan tertib hukum.
                        </p>

                        <div class="alert alert-light border mt-4 p-3 d-flex align-items-center gap-3">
                            <i class="fa-solid fa-circle-info text-gold fs-4"></i>
                            <div class="small text-muted">
                                Informasi di halaman ini merupakan panduan umum dan bukan nasihat hukum individual. Hubungi kantor kami untuk konsultasi perkara spesifik Anda.
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Sidebar --}}
                <div class="col-lg-4">
                    {{-- Consultation Action Card --}}
                    <div class="law-card p-4 bg-white mb-4 border">
                        <div class="text-center mb-3">
                            <i class="fa-solid fa-calendar-check text-gold fs-2 mb-2"></i>
                            <h3 class="h5 law-heading mb-1">Konsultasikan Perkara Anda</h3>
                            <p class="text-muted small">Diskusikan kebutuhan Anda dengan tim advokat kami untuk mendapatkan arahan yang tepat.</p>
                        </div>
                        <a href="{{ route('contact') }}" class="btn btn-gold law-btn-primary w-100 mb-2">
                            <i class="fa-solid fa-comments me-2"></i>Konsultasi Sekarang
                        </a>
                        <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener" class="btn btn-outline-navy law-btn-outline w-100">
                            <i class="fa-brands fa-whatsapp text-success me-2"></i>Chat WhatsApp
                        </a>
                    </div>

                    {{-- Related Services --}}
                    @if (count($related))
                        <div class="law-card p-4 bg-white border">
                            <h3 class="h6 law-heading mb-3">Layanan Terkait Lainnya</h3>
                            <div class="d-flex flex-column gap-3">
                                @foreach ($related as $item)
                                    <div class="d-flex gap-3 align-items-start border-bottom pb-3">
                                        <div class="law-strip-icon" style="width:36px;height:36px;font-size:0.9rem;">
                                            <i class="{{ $item['icon'] }}"></i>
                                        </div>
                                        <div>
                                            <a href="{{ route('services.show', $item['slug']) }}" class="fw-bold text-navy text-decoration-none small d-block mb-1">
                                                {{ $item['title'] }}
                                            </a>
                                            <p class="small text-muted mb-0">
                                                {{ \Illuminate\Support\Str::limit($item['short_description'], 75) }}
                                            </p>
                                        </div>
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
