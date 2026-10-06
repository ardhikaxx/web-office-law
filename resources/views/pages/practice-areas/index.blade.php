@extends('layouts.app')

@section('title', 'Area Praktik | Holong Siregar & Co. Law Office')
@section('meta_description', 'Area praktik Holong Siregar & Co.: Litigasi (pendampingan perkara dan sengketa) dan Non-Litigasi (konsultasi, kontrak, legal opinion, dan mitigasi risiko).')

@section('content')
    <section class="page-hero">
        <div class="container">
            <x-breadcrumb :items="[
                ['label' => 'Beranda', 'url' => route('home')],
                ['label' => 'Area Praktik'],
            ]" />
            <p class="eyebrow">AREA PRAKTIK</p>
            <h1>Area Praktik</h1>
            <p>Dua pendekatan utama kami: Litigasi untuk penyelesaian melalui jalur hukum, dan Non-Litigasi untuk pendampingan preventif dan transaksional.</p>
        </div>
    </section>

    <section class="section">
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
