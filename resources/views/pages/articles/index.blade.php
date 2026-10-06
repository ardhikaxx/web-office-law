@extends('layouts.app')

@section('title', 'Artikel & Insight Hukum | Holong Siregar & Co.')
@section('meta_description', 'Artikel dan insight hukum Holong Siregar & Co.: perdata, pidana, kontrak, korporasi, ketenagakerjaan, dan pertanahan.')

@section('content')
    <section class="page-hero">
        <div class="container">
            <x-breadcrumb :items="[
                ['label' => 'Beranda', 'url' => route('home')],
                ['label' => 'Artikel'],
            ]" />
            <p class="eyebrow">ARTIKEL &amp; INSIGHT</p>
            <h1>Artikel &amp; Insight Hukum</h1>
            <p>Informasi umum seputar persoalan hukum yang sering dihadapi — bukan nasihat hukum individual.</p>
        </div>
    </section>

    <section class="section">
        <div class="container">
            @if (count($articles))
                @if ($featured)
                    <div class="row g-4 mb-5 align-items-stretch">
                        <div class="col-lg-6">
                            <div class="article-hero-img h-100">
                                <img src="{{ \App\Support\LawFirm::assetOrFallback($featured['image'] ?? null) }}" alt="{{ $featured['title'] }}" loading="eager" width="800" height="450">
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex flex-column justify-content-center">
                            <span class="article-cat position-static d-inline-block mb-3" style="width:fit-content;">{{ $featured['category'] }}</span>
                            <h2 class="h3">{{ $featured['title'] }}</h2>
                            <p class="text-muted">{{ $featured['excerpt'] }}</p>
                            <div>
                                <a href="{{ route('articles.show', $featured['slug']) }}" class="btn btn-navy">Baca Artikel Unggulan</a>
                            </div>
                        </div>
                    </div>
                @endif

                @if (count($categories))
                    <div class="d-flex flex-wrap gap-2 mb-4" role="group" aria-label="Filter kategori">
                        <span class="btn btn-navy btn-sm disabled">Semua</span>
                        @foreach ($categories as $cat)
                            <span class="btn btn-outline-navy btn-sm disabled">{{ $cat }}</span>
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
