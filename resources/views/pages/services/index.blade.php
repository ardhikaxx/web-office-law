@extends('layouts.app')

@section('title', 'Layanan Hukum Terpadu | Holong Siregar & Co. Law Office (Bogor & Tangerang)')
@section('meta_description', 'Katalog lengkap layanan hukum profesional Holong Siregar & Co.: perdata, pidana, legal contract review, hukum keluarga & perceraian, hukum perusahaan, dan recovery asset.')
@section('meta_keywords', 'layanan hukum bogor, jasa pengacara bogor, layanan hukum tangerang, advokat perdata tangerang, pengacara pidana bogor, konsultan hukum perusahaan, review kontrak bisnis, pengacara perceraian bogor tangerang')

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
