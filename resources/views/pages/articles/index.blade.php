@extends('layouts.app')

@section('title', 'Artikel & Panduan Hukum | Holong Siregar & Co.')
@section('meta_description', 'Artikel, edukasi, dan panduan hukum praktis seputar biaya pengacara, alur sidang perdata, somasi wanprestasi, dan hukum pidana di Tangerang & Bogor.')
@section('meta_keywords', \App\Support\Seo::keywords(['artikel hukum tangerang', 'panduan hukum advokat', 'biaya pengacara tangerang', 'alur sidang pengadilan']))
@section('canonical', route('articles.index'))

@section('content')
    <section class="law-page-hero page-hero">
        <div class="container">
            <x-breadcrumb :items="[
                ['label' => 'Beranda', 'url' => route('home')],
                ['label' => 'Artikel & Panduan Hukum'],
            ]" />
            <span class="law-section-eyebrow eyebrow text-gold-light">EDUKASI &amp; PANDUAN HUKUM</span>
            <h1 class="law-heading">Artikel &amp; Panduan Hukum Praktis</h1>
            <p>Informasi hukum terpercaya, panduan litigasi peradilan, serta pemahaman regulasi terkini untuk masyarakat dan pelaku bisnis di Tangerang Raya &amp; Bogor.</p>
        </div>
    </section>

    <section class="law-section section">
        <div class="container">
            {{-- Category Filter Pills --}}
            @if (count($categories))
                <div class="d-flex flex-wrap gap-2 mb-5">
                    <a href="{{ route('articles.index') }}"
                       class="btn btn-sm {{ empty($selectedCategory) ? 'btn-gold law-btn-primary' : 'btn-outline-secondary' }}">
                        Semua Topik
                    </a>
                    @foreach ($categories as $cat)
                        <a href="{{ route('articles.index', ['kategori' => $cat]) }}"
                           class="btn btn-sm {{ strtolower($selectedCategory ?? '') === strtolower($cat) ? 'btn-gold law-btn-primary' : 'btn-outline-secondary' }}">
                            {{ $cat }}
                        </a>
                    @endforeach
                </div>
            @endif

            @if (count($articles))
                <div class="row g-4">
                    @foreach ($articles as $article)
                        <div class="col-md-6 col-lg-4">
                            <article class="law-card law-article-card h-100 d-flex flex-column border rounded-3 p-4 bg-white shadow-sm transition-hover">
                                <div class="law-article-badge-wrap d-flex justify-content-between align-items-center mb-3">
                                    <span class="badge bg-navy text-gold-light px-3 py-2 fw-semibold" style="background-color: var(--law-navy) !important; font-size: 0.78rem;">
                                        {{ $article['category'] }}
                                    </span>
                                    <span class="text-muted small">
                                        <i class="fa-regular fa-clock me-1"></i>{{ $article['reading_time'] }}
                                    </span>
                                </div>

                                <h2 class="h5 fw-bold mb-3" style="font-family: var(--law-font-serif); line-height: 1.35;">
                                    <a href="{{ route('articles.show', $article['slug']) }}" class="text-navy text-decoration-none hover-gold">
                                        {{ $article['title'] }}
                                    </a>
                                </h2>

                                <p class="text-muted small flex-grow-1 leading-relaxed mb-4">
                                    {{ $article['excerpt'] }}
                                </p>

                                <div class="pt-3 border-top d-flex justify-content-between align-items-center mt-auto">
                                    <div class="small text-muted">
                                        <i class="fa-regular fa-calendar me-1"></i>{{ date('d M Y', strtotime($article['published_at'])) }}
                                    </div>
                                    <a href="{{ route('articles.show', $article['slug']) }}" class="text-gold fw-semibold small text-decoration-none">
                                        Baca Artikel <i class="fa-solid fa-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="alert alert-info py-4 text-center">
                    Belum ada artikel pada kategori ini. <a href="{{ route('articles.index') }}" class="fw-semibold">Lihat semua artikel</a>.
                </div>
            @endif
        </div>
    </section>

    <x-cta />
@endsection
