@extends('layouts.app')

@section('title', \App\Support\Seo::title($article['title']))
@section('meta_description', $article['excerpt'])
@section('meta_keywords', \App\Support\Seo::keywords($article['keywords'] ?? []))
@section('canonical', route('articles.show', $article['slug']))
@section('og_type', 'article')

@push('meta_extra')
    <meta property="article:published_time" content="{{ $article['published_at'] }}">
    <meta property="article:modified_time" content="{{ $article['updated_at'] ?? $article['published_at'] }}">
    <meta property="article:author" content="{{ $article['author'] }}">
    <meta property="article:section" content="{{ $article['category'] }}">
@endpush

@push('schema_extra')
    <script type="application/ld+json">
    {!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endpush

@section('content')
    <section class="law-page-hero page-hero pb-4">
        <div class="container" style="max-width: 860px;">
            <x-breadcrumb :items="[
                ['label' => 'Beranda', 'url' => route('home')],
                ['label' => 'Artikel Hukum', 'url' => route('articles.index')],
                ['label' => $article['category']],
            ]" />
            <div class="d-flex flex-wrap gap-2 align-items-center mb-3">
                <span class="badge bg-gold text-dark px-3 py-2 fw-semibold" style="background-color: var(--law-gold) !important; color: #071424 !important;">
                    {{ $article['category'] }}
                </span>
                <span class="text-white-50 small">
                    <i class="fa-regular fa-clock me-1"></i>{{ $article['reading_time'] }}
                </span>
                <span class="text-white-50 small ms-2">
                    <i class="fa-regular fa-calendar me-1"></i>{{ date('d F Y', strtotime($article['published_at'])) }}
                </span>
            </div>
            <h1 class="law-heading text-white mb-3" style="font-size: clamp(1.75rem, 3.5vw, 2.5rem); line-height: 1.25;">
                {{ $article['title'] }}
            </h1>
            <div class="d-flex align-items-center gap-3 pt-2 text-white-50 small">
                <span><i class="fa-solid fa-user-tie text-gold me-1"></i>Ditulis oleh: <strong>{{ $article['author'] }}</strong> ({{ $article['author_role'] }})</span>
            </div>
        </div>
    </section>

    <section class="law-section section pt-5">
        <div class="container" style="max-width: 860px;">
            <article class="law-article-body bg-white p-4 p-md-5 rounded-4 shadow-sm border">
                {!! $article['body'] !!}

                {{-- Embedded WhatsApp Legal Consultation Box --}}
                <div class="p-4 my-5 rounded-3 bg-navy text-white text-center" style="background: linear-gradient(135deg, #071424 0%, #0c1f38 100%); border: 1px solid rgba(197, 155, 39, 0.35);">
                    <div class="law-service-icon mx-auto mb-3" style="width: 56px; height: 56px; font-size: 1.6rem; border-radius: 50%; background: rgba(197, 155, 39, 0.15); display: flex; align-items: center; justify-content: center;">
                        <i class="fa-solid fa-scale-balanced text-gold"></i>
                    </div>
                    <h3 class="h4 text-white fw-bold mb-2">Butuh Bantuan Hukum Terkait Masalah Ini?</h3>
                    <p class="text-white-50 small mb-4 mx-auto" style="max-width: 580px;">
                        Konsultasikan duduk perkara Anda langsung dengan tim advokat Holong Siregar &amp; Co. Kami siap mendampingi wilayah Tangerang Raya, BSD, Tangsel, dan Bogor.
                    </p>
                    <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener" class="btn btn-gold law-btn-primary px-4 py-2">
                        <i class="fa-brands fa-whatsapp me-2"></i>Konsultasi via WhatsApp Sekarang
                    </a>
                </div>

                {{-- Author Signature Card --}}
                <div class="d-flex align-items-center gap-3 p-4 bg-light rounded-3 border">
                    <div class="flex-shrink-0">
                        <div class="bg-navy rounded-circle d-flex align-items-center justify-content-center text-gold" style="width: 54px; height: 54px; font-size: 1.4rem; background-color: #071424;">
                            <i class="fa-solid fa-user-shield"></i>
                        </div>
                    </div>
                    <div>
                        <div class="fw-bold text-navy">{{ $article['author'] }}</div>
                        <div class="text-muted small">{{ $article['author_role'] }} — Holong Siregar &amp; Co. Law Office</div>
                        <div class="text-muted small mt-1">Berpengalaman dalam litigasi perdata, pidana, dan mitigasi risiko hukum komersial di wilayah hukum Jabodetabek &amp; Banten.</div>
                    </div>
                </div>
            </article>

            {{-- Related Educational Articles --}}
            @if (count($related))
                <div class="mt-5 pt-4">
                    <h2 class="h4 fw-bold text-navy mb-4" style="font-family: var(--law-font-serif);">
                        <i class="fa-solid fa-book-open text-gold me-2"></i>Artikel Hukum Terkait Lainnya
                    </h2>
                    <div class="row g-4">
                        @foreach ($related as $item)
                            <div class="col-md-4">
                                <div class="law-card h-100 p-3 bg-white border rounded-3 shadow-sm d-flex flex-column">
                                    <span class="badge bg-navy text-gold-light align-self-start mb-2" style="background-color: var(--law-navy) !important; font-size: 0.72rem;">
                                        {{ $item['category'] }}
                                    </span>
                                    <h3 class="h6 fw-bold mb-2">
                                        <a href="{{ route('articles.show', $item['slug']) }}" class="text-navy text-decoration-none hover-gold">
                                            {{ $item['title'] }}
                                        </a>
                                    </h3>
                                    <p class="text-muted small mb-3 flex-grow-1" style="font-size: 0.82rem; line-height: 1.45;">
                                        {{ Str::limit($item['excerpt'], 90) }}
                                    </p>
                                    <a href="{{ route('articles.show', $item['slug']) }}" class="text-gold small fw-semibold text-decoration-none mt-auto">
                                        Selengkapnya <i class="fa-solid fa-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section>

    <x-cta />
@endsection
