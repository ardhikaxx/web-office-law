@extends('layouts.app')

@php
    $pageTitle = $service['title'] . ' | Pengacara Holong Siregar';
    $targetKeywords = implode(', ', $service['target_keywords'] ?? []);
    $metaKeywords = \App\Support\Seo::keywords($targetKeywords);
@endphp

@section('title', $pageTitle)
@section('meta_description', 'Layanan ' . strtolower($service['title']) . ' di Kota Tangerang, BSD & Bogor oleh advokat Holong Siregar & Co. Konsultasi cepat via WhatsApp.')
@section('meta_keywords', $metaKeywords)
@section('canonical', route('services.show', $service['slug']))

@section('content')
    <section class="law-page-hero page-hero">
        <div class="container">
            <x-breadcrumb :items="[
                ['label' => 'Beranda', 'url' => route('home')],
                ['label' => 'Layanan Hukum', 'url' => route('services.index')],
                ['label' => $service['title']],
            ]" />
            <span class="law-section-eyebrow eyebrow text-gold-light">LAYANAN HUKUM — SELURUH WILAYAH INDONESIA</span>
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
                            <span class="text-gold-dark fw-bold small">BIDANG PRAKTIK PROFESIONAL PADA SELURUH WILAYAH INDONESIA</span>
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

                        @if (!empty($service['when_needed']))
                            <h3 class="h5 law-heading mt-5 mb-3">
                                <i class="fa-solid fa-clipboard-question text-gold me-2"></i>Kapan Anda Membutuhkan Layanan Ini?
                            </h3>
                            <p class="text-muted small">Situasi konkret yang paling sering dihadapi calon klien di wilayah Tangerang dan sekitarnya:</p>
                            <ul class="law-check-list check-list">
                                @foreach ($service['when_needed'] as $item)
                                    <li>
                                        <i class="fa-solid fa-triangle-exclamation text-gold"></i>
                                        <span>{{ $item }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        @endif

                        @if (!empty($service['workflow']))
                            <h3 class="h5 law-heading mt-5 mb-3">
                                <i class="fa-solid fa-diagram-project text-gold me-2"></i>Alur &amp; Tahapan Pendampingan Hukum
                            </h3>
                            <div class="row g-3 mb-3">
                                @foreach ($service['workflow'] as $flow)
                                    <div class="col-md-6">
                                        <div class="p-3 bg-light rounded-3 h-100 border">
                                            <div class="d-flex align-items-center gap-2 mb-2">
                                                <span class="badge bg-gold text-white fw-bold">Langkah {{ $flow['step'] }}</span>
                                                <strong class="text-navy small">{{ $flow['title'] }}</strong>
                                            </div>
                                            <p class="text-muted small mb-0">{{ $flow['desc'] }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        @if (!empty($service['jurisdiction']))
                            <div class="p-3 bg-light rounded-3 mt-4 border">
                                <div class="d-flex align-items-start gap-2">
                                    <i class="fa-solid fa-earth-asia text-gold mt-1 flex-shrink-0"></i>
                                    <div>
                                        <strong class="text-navy d-block small">Basis Kantor &amp; Cakupan Wilayah Penanganan:</strong>
                                        <p class="text-muted small mb-1">
                                            <strong>Basis Kantor Operasional:</strong> Kota Tangerang &amp; Kota Bogor.
                                        </p>
                                        <p class="text-muted small mb-0">
                                            <strong>Wilayah Penanganan Perkara:</strong> Tidak terbatas di Tangerang dan Bogor — penanganan hukum dan pendampingan perkara kami terbuka <strong>pada seluruh wilayah Indonesia</strong> ({{ $service['jurisdiction'] }}).
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if (!empty($service['faqs']))
                            <h3 class="h5 law-heading mt-5 mb-3">
                                <i class="fa-solid fa-circle-question text-gold me-2"></i>Pertanyaan Umum Terkait Layanan Ini (FAQ)
                            </h3>
                            <div class="accordion law-accordion" id="serviceFaqAccordion">
                                @foreach ($service['faqs'] as $idx => $f)
                                    <div class="accordion-item mb-2 border rounded">
                                        <h4 class="accordion-header" id="headingServiceFaq{{ $idx }}">
                                            <button class="accordion-button {{ $idx !== 0 ? 'collapsed' : '' }} py-3"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapseServiceFaq{{ $idx }}"
                                                    aria-expanded="{{ $idx === 0 ? 'true' : 'false' }}"
                                                    aria-controls="collapseServiceFaq{{ $idx }}">
                                                {{ $f['q'] }}
                                            </button>
                                        </h4>
                                        <div id="collapseServiceFaq{{ $idx }}"
                                             class="accordion-collapse collapse {{ $idx === 0 ? 'show' : '' }}"
                                             aria-labelledby="headingServiceFaq{{ $idx }}"
                                             data-bs-parent="#serviceFaqAccordion">
                                            <div class="accordion-body text-muted small leading-relaxed">
                                                {{ $f['a'] }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        <div class="alert alert-light border mt-4 p-3 d-flex align-items-center gap-3">
                            <i class="fa-solid fa-circle-info text-gold fs-4"></i>
                            <div class="small text-muted">
                                Informasi di halaman ini merupakan panduan edukasi umum dan tidak otomatis membentuk hubungan advokat–klien. Hubungi kantor kami untuk konsultasi perkara spesifik Anda.
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
                            <p class="text-muted small">Diskusikan kebutuhan hukum Anda bersama tim advokat profesional kami di Tangerang &amp; Bogor.</p>
                        </div>
                        <a href="{{ route('contact') }}" class="btn btn-gold law-btn-primary w-100 mb-2">
                            <i class="fa-solid fa-comments me-2"></i>Konsultasi Sekarang
                        </a>
                        <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener" class="btn btn-outline-navy law-btn-outline w-100">
                            <i class="fa-brands fa-whatsapp text-success me-2"></i>Chat WhatsApp Cepat
                        </a>
                    </div>

                    {{-- Local Office Quick Info --}}
                    <div class="law-card p-4 bg-white mb-4 border">
                        <h3 class="h6 law-heading mb-3">
                            <i class="fa-solid fa-building-columns text-gold me-2"></i>Basis Kantor Operasional
                        </h3>
                        <div class="small mb-3">
                            <strong class="text-navy d-block">Kantor Tangerang:</strong>
                            <span class="text-muted">Villa Grand Tomang, Periuk, Kota Tangerang</span>
                        </div>
                        <div class="small mb-3">
                            <strong class="text-navy d-block">Kantor Bogor:</strong>
                            <span class="text-muted">Aspol Panaragan Kidul RT/RW: 04/04, Kec. Bogor Tengah, Kota Bogor</span>
                        </div>
                        <div class="small">
                            <strong class="text-navy d-block">Waktu Operasional:</strong>
                            <span class="text-muted">Senin – Sabtu, 08:00 – 17:30 WIB</span>
                        </div>
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

@push('schema_extra')
    @php
        $serviceSchema = \App\Support\Seo::serviceSchema($service);
        $faqSchema = !empty($service['faqs']) ? \App\Support\Seo::faqSchema($service['faqs']) : null;
    @endphp
    <script type="application/ld+json">{!! json_encode($serviceSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
    @if ($faqSchema)
        <script type="application/ld+json">{!! json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
    @endif
@endpush
