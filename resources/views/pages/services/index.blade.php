@extends('layouts.app')

@section('title', 'Layanan Hukum | Holong Siregar & Co. Law Office')
@section('meta_description', 'Katalog layanan hukum Holong Siregar & Co.: perdata, pidana, kontrak, korporasi, ketenagakerjaan, keluarga, pertanahan, dan penyelesaian sengketa.')

@section('content')
    <section class="page-hero">
        <div class="container">
            <x-breadcrumb :items="[
                ['label' => 'Beranda', 'url' => route('home')],
                ['label' => 'Layanan Hukum'],
            ]" />
            <p class="eyebrow">LAYANAN HUKUM</p>
            <h1>Layanan Hukum</h1>
            <p>Katalog layanan pendampingan hukum untuk perorangan, keluarga, dan perusahaan — masing-masing dengan ruang lingkup yang jelas.</p>
        </div>
    </section>

    <section class="section">
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
