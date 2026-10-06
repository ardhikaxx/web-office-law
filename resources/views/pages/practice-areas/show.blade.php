@extends('layouts.app')

@section('title', $area['title'] . ' | Area Praktik Holong Siregar & Co.')
@section('meta_description', $area['short_description'])

@section('content')
    <section class="page-hero">
        <div class="container">
            <x-breadcrumb :items="[
                ['label' => 'Beranda', 'url' => route('home')],
                ['label' => 'Area Praktik', 'url' => route('practice-areas.index')],
                ['label' => $area['title']],
            ]" />
            <p class="eyebrow">AREA PRAKTIK — {{ strtoupper($area['type'] ?? $area['title']) }}</p>
            <h1>{{ $area['title'] }}</h1>
            <p>{{ $area['short_description'] }}</p>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8">
                    <h2 class="h4 mb-3">Pendekatan Kami</h2>
                    <p class="text-muted">{{ $area['description'] }}</p>

                    @if (!empty($area['points']))
                        <h3 class="h5 mt-4 mb-3">Yang Kami Tangani</h3>
                        <ul class="check-list">
                            @foreach ($area['points'] as $point)
                                <li><i class="fa-solid fa-circle-check"></i>{{ $point }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <div class="alert alert-light border mt-4" role="note">
                        <i class="fa-solid fa-scale-balanced me-2"></i>
                        Kami tidak menjanjikan hasil perkara. Setiap langkah dirancang berdasarkan analisis fakta dan koridor hukum yang berlaku.
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info-card mb-4">
                        <h3 class="h5">Diskusikan Kebutuhan Anda</h3>
                        <p class="text-muted small">Sampaikan ringkasan kebutuhan untuk ditinjau lebih lanjut oleh tim kami.</p>
                        <a href="{{ route('contact') }}" class="btn btn-gold w-100 mb-2">Konsultasi Sekarang</a>
                        <a href="{{ route('services.index') }}" class="btn btn-outline-navy w-100">Lihat Layanan</a>
                    </div>
                    @if (count($others))
                        @foreach ($others as $other)
                            <div class="border rounded p-3 bg-white">
                                <p class="small text-muted mb-1">AREA LAINNYA</p>
                                <a href="{{ route('practice-areas.show', $other['slug']) }}" class="fw-bold text-dark">{{ $other['title'] }}</a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>

    <x-cta />
@endsection
