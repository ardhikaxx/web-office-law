@extends('layouts.app')

@section('title', $article['title'] . ' | Holong Siregar & Co.')
@section('meta_description', $article['excerpt'])

@section('content')
    <section class="law-page-hero page-hero">
        <div class="container">
            <x-breadcrumb :items="[
                ['label' => 'Beranda', 'url' => route('home')],
                ['label' => 'Artikel', 'url' => route('articles.index')],
                ['label' => \Illuminate\Support\Str::limit($article['title'], 45)],
            ]" />
            <span class="law-section-eyebrow eyebrow text-gold-light">
                {{ strtoupper($article['category']) }}
            </span>
            <h1 class="law-heading">{{ $article['title'] }}</h1>
            <p>
                <i class="fa-regular fa-calendar text-gold me-1"></i>{{ \Carbon\Carbon::parse($article['date'])->translatedFormat('d F Y') }}
                &nbsp;&bull;&nbsp;
                <i class="fa-regular fa-user text-gold me-1"></i>{{ $article['author'] }}
            </p>
        </div>
    </section>

    <section class="law-section section">
        <div class="container">
            <div class="row g-5">
                {{-- Main Article Content --}}
                <article class="col-lg-8">
                    <div class="law-card p-4 p-md-5 bg-white mb-4">
                        <div class="law-article-media ratio ratio-16x9 rounded overflow-hidden mb-4">
                            <img src="{{ \App\Support\LawFirm::assetOrFallback($article['image'] ?? null) }}"
                                 alt="{{ $article['title'] }}"
                                 class="object-fit-cover"
                                 loading="eager">
                        </div>

                        <div class="article-read law-article-content">
                            <p class="lead text-navy fw-semibold">{{ $article['excerpt'] }}</p>
                            <hr class="my-4">
                            <p>{{ $article['content'] }}</p>
                        </div>

                        <div class="alert alert-light border mt-4 p-3 d-flex align-items-center gap-3" role="note">
                            <i class="fa-solid fa-circle-info text-gold fs-4"></i>
                            <div class="small text-muted">
                                Artikel ini bersifat edukasi dan informasi hukum umum, bukan merupakan nasihat hukum formal bagi kasus tertentu. Untuk konsultasi spesifik, silakan hubungi advokat kami.
                            </div>
                        </div>

                        <div class="mt-4 pt-2">
                            <a href="{{ route('contact') }}" class="btn btn-gold law-btn-primary">
                                <i class="fa-solid fa-comments me-2"></i>Konsultasikan Persoalan Serupa
                            </a>
                        </div>
                    </div>
                </article>

                {{-- Sidebar --}}
                <aside class="col-lg-4">
                    {{-- Quick Action --}}
                    <div class="law-card p-4 bg-white mb-4 border">
                        <h2 class="h5 law-heading mb-2">Butuh Konsultasi Terkait Topik Ini?</h2>
                        <p class="text-muted small">Sampaikan ringkasan permasalahan Anda kepada tim advokat kami.</p>
                        <a href="{{ route('contact') }}" class="btn btn-gold law-btn-primary w-100 mb-2">
                            <i class="fa-solid fa-calendar-check me-2"></i>Jadwalkan Konsultasi
                        </a>
                        <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener" class="btn btn-outline-navy law-btn-outline w-100">
                            <i class="fa-brands fa-whatsapp text-success me-2"></i>Chat WhatsApp
                        </a>
                    </div>

                    {{-- Related Articles --}}
                    <div class="law-card p-4 bg-white border">
                        <h2 class="h6 law-heading mb-3">Artikel Terkait Lainnya</h2>
                        <div class="d-flex flex-column gap-3">
                            @forelse ($related as $item)
                                <div class="border-bottom pb-3">
                                    <span class="small text-gold-dark fw-bold d-block mb-1">
                                        {{ $item['category'] }} &bull; {{ \Carbon\Carbon::parse($item['date'])->translatedFormat('d M Y') }}
                                    </span>
                                    <a href="{{ route('articles.show', $item['slug']) }}" class="fw-bold text-navy text-decoration-none small d-block">
                                        {{ $item['title'] }}
                                    </a>
                                </div>
                            @empty
                                <div class="empty-state py-3">Tidak ada artikel terkait.</div>
                            @endforelse
                        </div>

                        <div class="mt-3 pt-2">
                            <a href="{{ route('articles.index') }}" class="btn btn-outline-navy law-btn-outline w-100 btn-sm">
                                <span>Lihat Semua Artikel</span>
                                <i class="fa-solid fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <x-cta />
@endsection
