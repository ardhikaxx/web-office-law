@extends('layouts.app')

@section('title', 'FAQ Pengacara Tangerang & Bogor | Holong Siregar')
@section('meta_description', 'Tanya jawab tarif biaya pengacara, alur sidang perdata di PN Tangerang, pendampingan kepolisian, dan konsultasi hukum di Holong Siregar & Co.')
@section('meta_keywords', \App\Support\Seo::keywords(['biaya pengacara tangerang', 'honorarium advokat tangerang', 'tanya jawab hukum tangerang', 'sidang pn tangerang', 'gugatan cerai pa tangerang']))
@section('canonical', route('faq'))

@section('content')
    <section class="law-page-hero page-hero">
        <div class="container">
            <x-breadcrumb :items="[
                ['label' => 'Beranda', 'url' => route('home')],
                ['label' => 'FAQ'],
            ]" />
            <span class="law-section-eyebrow eyebrow text-gold-light">PUSAT BANTUAN &amp; INFORMASI HUKUM</span>
            <h1 class="law-heading">Pertanyaan yang Sering Diajukan</h1>
            <p>Penjelasan transparan seputar tarif biaya, prosedur perkara di Pengadilan Negeri Tangerang &amp; Bogor, serta pendampingan advokat profesional.</p>
        </div>
    </section>

    <section class="law-section section">
        <div class="container" style="max-width: 880px;">
            <div class="p-3 bg-light rounded-3 mb-4 border d-flex align-items-center gap-3">
                <i class="fa-solid fa-circle-info text-gold fs-3 flex-shrink-0"></i>
                <div class="small text-muted">
                    Halaman ini merangkum pertanyaan paling sering diajukan calon klien seputar layanan advokat di wilayah <strong>Kota Tangerang, Tangerang Selatan (BSD, Serpong), dan Bogor</strong>.
                </div>
            </div>

            @if (count($faqs))
                <div class="accordion law-accordion" id="faqAccordion">
                    @foreach ($faqs as $i => $faq)
                        <div class="accordion-item mb-2 border rounded">
                            <h2 class="accordion-header" id="faqHeading{{ $i }}">
                                <button class="accordion-button {{ $i !== 0 ? 'collapsed' : '' }} py-3"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#faqCollapse{{ $i }}"
                                        aria-expanded="{{ $i === 0 ? 'true' : 'false' }}"
                                        aria-controls="faqCollapse{{ $i }}">
                                    <span class="me-2 text-gold fw-bold">#{{ $i + 1 }}</span> {{ $faq['q'] }}
                                </button>
                            </h2>
                            <div id="faqCollapse{{ $i }}"
                                 class="accordion-collapse collapse {{ $i === 0 ? 'show' : '' }}"
                                 aria-labelledby="faqHeading{{ $i }}"
                                 data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted leading-relaxed">
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
                <p class="text-muted mb-4">Tim advokat kami siap memberikan telaah awal dan panduan langkah tepat terkait situasi perkara Anda.</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="{{ route('contact') }}" class="btn btn-navy law-btn-navy">
                        <i class="fa-solid fa-envelope me-2"></i>Hubungi Kantor
                    </a>
                    <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener" class="btn btn-gold law-btn-primary">
                        <i class="fa-brands fa-whatsapp me-2"></i>Konsultasi Cepat via WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <x-cta />
@endsection

@push('schema_extra')
    @if (!empty($faqs) && count($faqs))
        @php
            $faqSchema = \App\Support\Seo::faqSchema($faqs);
        @endphp
        <script type="application/ld+json">{!! json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
    @endif
@endpush
