@extends('layouts.app')

@section('title', $article['title'] . ' | Holong Siregar & Co.')
@section('meta_description', $article['excerpt'])

@section('content')
    <section class="page-hero">
        <div class="container">
            <x-breadcrumb :items="[
                ['label' => 'Beranda', 'url' => route('home')],
                ['label' => 'Artikel', 'url' => route('articles.index')],
                ['label' => \Illuminate\Support\Str::limit($article['title'], 50)],
            ]" />
            <p class="eyebrow">{{ strtoupper($article['category']) }}</p>
            <h1>{{ $article['title'] }}</h1>
            <p>
                <i class="fa-regular fa-calendar me-1"></i>{{ \Carbon\Carbon::parse($article['date'])->translatedFormat('d F Y') }}
                &nbsp;&middot;&nbsp; <i class="fa-regular fa-user me-1"></i>{{ $article['author'] }}
            </p>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row g-5">
                <article class="col-lg-8">
                    <div class="article-hero-img mb-4">
                        <img src="{{ \App\Support\LawFirm::assetOrFallback($article['image'] ?? null) }}" alt="{{ $article['title'] }}" loading="eager" width="900" height="500">
                    </div>
                    <div class="article-read">
                        <p>{{ $article['content'] }}</p>
                    </div>
                    <div class="alert alert-light border mt-4" role="note">
                        <i class="fa-solid fa-circle-info me-2"></i>
                        Artikel ini bersifat informasi umum dan bukan nasihat hukum. Untuk persoalan spesifik, silakan berkonsultasi langsung.
                    </div>
                    <a href="{{ route('contact') }}" class="btn btn-gold mt-2">Konsultasikan Persoalan Serupa</a>
                </article>
                <aside class="col-lg-4">
                    <h2 class="h5 mb-3">Artikel Terkait</h2>
                    @forelse ($related as $item)
                        <div class="border rounded p-3 mb-2 bg-white">
                            <p class="small text-muted mb-1">{{ $item['category'] }} &middot; {{ \Carbon\Carbon::parse($item['date'])->translatedFormat('d M Y') }}</p>
                            <a href="{{ route('articles.show', $item['slug']) }}" class="fw-bold text-dark">{{ $item['title'] }}</a>
                        </div>
                    @empty
                        <div class="empty-state">Tidak ada artikel terkait.</div>
                    @endforelse
                    <a href="{{ route('articles.index') }}" class="btn btn-outline-navy w-100 mt-2">Kembali ke Daftar Artikel</a>
                </aside>
            </div>
        </div>
    </section>

    <x-cta />
@endsection
