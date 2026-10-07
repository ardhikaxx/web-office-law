@extends('layouts.app')

@section('title', 'Tanya Jawab Layanan Pengacara di Tangerang & Bogor (FAQ) | Holong Siregar & Co.')
@section('meta_description', 'Pertanyaan umum seputar layanan pengacara di Tangerang & Bogor: proses konsultasi WhatsApp, penanganan perkara di Pengadilan Negeri Tangerang & Bogor, serta biaya advokat.')
@section('meta_keywords', 'tanya jawab pengacara tangerang, faq pengacara di tangerang, biaya pengacara tangerang, prosedur konsultasi hukum tangerang, pengacara bogor, jasa advokat tangerang')

@section('content')
    <section class="law-page-hero page-hero">
        <div class="container">
            <x-breadcrumb :items="[
                ['label' => 'Beranda', 'url' => route('home')],
                ['label' => 'FAQ'],
            ]" />
            <span class="law-section-eyebrow eyebrow text-gold-light">PUSAT BANTUAN</span>
            <h1 class="law-heading">Pertanyaan yang Sering Diajukan</h1>
            <p>Penjelasan transparan seputar proses konsultasi, prosedur penanganan, dan komitmen profesional kantor hukum kami.</p>
        </div>
    </section>

    <section class="law-section section">
        <div class="container" style="max-width: 860px;">
            @if (count($faqs))
                <div class="accordion law-accordion" id="faqAccordion">
                    @foreach ($faqs as $i => $faq)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading{{ $i }}">
                                <button class="accordion-button {{ $i !== 0 ? 'collapsed' : '' }}"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#faqCollapse{{ $i }}"
                                        aria-expanded="{{ $i === 0 ? 'true' : 'false' }}"
                                        aria-controls="faqCollapse{{ $i }}">
                                    {{ $faq['q'] }}
                                </button>
                            </h2>
                            <div id="faqCollapse{{ $i }}"
                                 class="accordion-collapse collapse {{ $i === 0 ? 'show' : '' }}"
                                 aria-labelledby="faqHeading{{ $i }}"
                                 data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    {{ $faq['a'] }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="empty-state">Data FAQ belum tersedia.</div>
            @endif

            <div class="law-card p-4 p-md-5 text-center mt-5 bg-white border">
                <i class="fa-solid fa-headset text-gold fs-1 mb-3"></i>
                <h3 class="h4 law-heading mb-2">Memiliki Pertanyaan Lain yang Belum Terjawab?</h3>
                <p class="text-muted mb-4">Tim kami siap memberikan penjelasan mendalam dan panduan langkah awal terkait situasi hukum Anda.</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="{{ route('contact') }}" class="btn btn-navy law-btn-navy">
                        <i class="fa-solid fa-envelope me-2"></i>Hubungi Kami
                    </a>
                    <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener" class="btn btn-gold law-btn-primary">
                        <i class="fa-brands fa-whatsapp me-2"></i>Konsultasi via WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <x-cta />

    @if (!empty($faqs) && count($faqs))
        @php
            $faqSchema = [
                '@context' => 'https://schema.org',
                '@type' => 'FAQPage',
                'mainEntity' => array_map(function ($f) {
                    return [
                        '@type' => 'Question',
                        'name' => strip_tags($f['q'] ?? ''),
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text' => strip_tags($f['a'] ?? ''),
                        ],
                    ];
                }, $faqs),
            ];
        @endphp
        <script type="application/ld+json">{!! json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
    @endif
@endsection
