@extends('layouts.app')

@section('title', 'Layanan Pengacara di Tangerang & Bogor | Perdata, Pidana, Korporasi & Bisnis')
@section('meta_description', 'Daftar layanan jasa pengacara di Tangerang & Bogor oleh Holong Siregar & Co.: sengketa perdata, pidana, drafting kontrak, perceraian, sengketa tanah, dan hukum perusahaan.')
@section('meta_keywords', 'layanan pengacara di tangerang, jasa pengacara tangerang, pengacara perdata tangerang, pengacara pidana tangerang, pengacara perceraian tangerang, pengacara kontrak bsd tangerang, corporate lawyer tangerang, pengacara bogor, advokat tangerang')

@section('content')
    <section class="law-page-hero page-hero">
        <div class="container">
            <x-breadcrumb :items="[
                ['label' => 'Beranda', 'url' => route('home')],
                ['label' => 'Layanan Hukum'],
            ]" />
            <span class="law-section-eyebrow eyebrow text-gold-light">LAYANAN HUKUM</span>
            <h1 class="law-heading">Ruang Lingkup Layanan Kami</h1>
            <p>Katalog pendampingan hukum komprehensif bagi perorangan maupun entitas bisnis — dirancang dengan kepastian hukum dan ruang lingkup yang jelas.</p>
        </div>
    </section>

    <section class="law-section section">
        <div class="container">
            @if (count($services))
                <div class="row g-4">
                    @foreach ($services as $service)
                        <div class="{{ $loop->last && $loop->iteration % 3 === 1 ? 'col-12' : 'col-md-6 col-lg-4' }}">
                            <x-service-card :service="$service" :is-wide="$loop->last && $loop->iteration % 3 === 1" />
                        </div>
                    @endforeach
                </div>
            @else
                <div class="empty-state">Data layanan belum tersedia.</div>
            @endif
        </div>
    </section>

    <x-cta />
@endsection
