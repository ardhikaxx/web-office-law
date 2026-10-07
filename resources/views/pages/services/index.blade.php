@extends('layouts.app')

@section('title', 'Layanan Hukum | Holong Siregar & Co. Law Office')
@section('meta_description', 'Katalog layanan hukum Holong Siregar & Co.: perdata, pidana, kontrak, korporasi, ketenagakerjaan, keluarga, pertanahan, dan penyelesaian sengketa.')

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
                        <div class="col-md-6 col-lg-4">
                            <x-service-card :service="$service" />
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
