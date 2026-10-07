@extends('layouts.app')

@section('title', 'Area Praktik Litigasi & Non-Litigasi | Holong Siregar & Co.')
@section('meta_description', 'Pendampingan hukum komprehensif jalur Litigasi (penyelesaian sengketa di pengadilan) dan Non-Litigasi (mediasi, review kontrak, legal compliance) di Bogor & Tangerang.')
@section('meta_keywords', 'pengacara litigasi bogor, advokat non litigasi tangerang, mediasi sengketa hukum, penanganan perkara pengadilan, konsultan hukum preventif')

@section('content')
    <section class="law-page-hero page-hero">
        <div class="container">
            <x-breadcrumb :items="[
                ['label' => 'Beranda', 'url' => route('home')],
                ['label' => 'Area Praktik'],
            ]" />
            <span class="law-section-eyebrow eyebrow text-gold-light">AREA PRAKTIK</span>
            <h1 class="law-heading">Area Praktik Utama</h1>
            <p>Dua pilar pendekatan utama: Litigasi untuk penanganan sengketa peradilan, dan Non-Litigasi untuk pendampingan preventif dan konsultatif.</p>
        </div>
    </section>

    <section class="law-section section">
        <div class="container">
            <div class="row g-4">
                @foreach ($areas as $area)
                    <div class="col-md-6">
                        <x-practice-card :area="$area" />
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <x-cta />
@endsection
