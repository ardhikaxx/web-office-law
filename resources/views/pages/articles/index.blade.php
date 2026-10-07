@extends('layouts.app')

@section('title', 'Artikel & Insight Hukum | Holong Siregar & Co. Law Office')
@section('meta_description', 'Artikel dan insight hukum Holong Siregar & Co.: perdata, pidana, kontrak, korporasi, ketenagakerjaan, dan pertanahan.')

@section('content')
    <section class="law-page-hero page-hero">
        <div class="container">
            <x-breadcrumb :items="[
                ['label' => 'Beranda', 'url' => route('home')],
                ['label' => 'Artikel &amp; Insight'],
            ]" />
            <span class="law-section-eyebrow eyebrow text-gold-light">LEGAL INSIGHTS</span>
            <h1 class="law-heading">Artikel &amp; Wawasan Hukum</h1>
            <p>Ulasan hukum praktis dan informatif seputar dinamika peraturan perundang-undangan dan penyelesaian sengketa di Indonesia.</p>
        </div>
    </section>

    <section class="law-section section">
        <div class="container">
            @if (count($articles))
                @if ($featured)
                    <div class="law-card p-0 overflow-hidden bg-white border mb-5 shadow-sm">
                        <div class="row g-0 align-items-center">
                            <div class="col-lg-6">
                                <div class="law-article-media ratio ratio-16x9">
                                    <img src="{{ \App\Support\LawFirm::assetOrFallback($featured['image'] ?? null) }}"
                                         alt="{{ $featured['title'] }}"
                                         class="object-fit-cover"
                                         loading="eager">
                                </div>
                            </div>
                            <div class="col-lg-6 p-4 p-md-5">
                                <span class="badge bg-navy text-gold-light mb-3 px-3 py-2 text-uppercase">
                                    {{ $featured['category'] }} &bull; ARTIKEL UNGGULAN
                                </span>
                                <h2 class="h3 law-heading mb-3">
                                    <a href="{{ route('articles.show', $featured['slug']) }}" class="text-navy text-decoration-none">
                                        {{ $featured['title'] }}
                                    </a>
                                </h2>
                                <p class="text-muted mb-4">{{ $featured['excerpt'] }}</p>
                                <div>
                                    <a href="{{ route('articles.show', $featured['slug']) }}" class="btn btn-navy law-btn-navy">
                                        <span>Baca Artikel Unggulan</span>
                                        <i class="fa-solid fa-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if (count($categories))
                    <div class="d-flex flex-wrap gap-2 mb-4 align-items-center" role="group" aria-label="Kategori artikel">
                        <span class="small text-muted fw-bold me-2"><i class="fa-solid fa-filter me-1 text-gold"></i>Kategori:</span>
                        <span class="badge bg-navy text-gold-light px-3 py-2">Semua Artikel</span>
                        @foreach ($categories as $cat)
                            <span class="badge bg-light text-navy border px-3 py-2">{{ $cat }}</span>
                        @endforeach
                    </div>
                @endif

                <div class="row g-4">
                    @foreach ($articles as $article)
                        <div class="col-md-6 col-lg-4">
                            <x-article-card :article="$article" />
                        </div>
                    @endforeach
                </div>
            @else
                <div class="empty-state">Belum ada artikel yang dipublikasikan.</div>
            @endif
        </div>
    </section>

    <x-cta />
@endsection
