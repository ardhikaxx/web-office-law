@extends('layouts.app')

@section('title', 'Tim Advokat & Pengacara di Tangerang & Bogor | Holong Siregar & Co.')
@section('meta_description', 'Profil tim advokat dan pengacara profesional Holong Siregar & Co. Law Office yang berpengalaman dan berintegritas melayani wilayah Tangerang dan Bogor.')
@section('meta_keywords', 'tim pengacara tangerang, advokat tangerang, pengacara di tangerang, advokat bogor, holong siregar sh, konsultan hukum tangerang, advokat peradi tangerang')

@section('content')
    <section class="law-page-hero page-hero">
        <div class="container">
            <x-breadcrumb :items="[
                ['label' => 'Beranda', 'url' => route('home')],
                ['label' => 'Tim Kami'],
            ]" />
            <span class="law-section-eyebrow eyebrow text-gold-light">TIM ADVOKAT</span>
            <h1 class="law-heading">Advokat &amp; Tim Profesional</h1>
            <p>Advokat berpengalaman yang siap mendampingi setiap kebutuhan hukum Anda dengan ketelitian, integritas, dan komitmen penuh.</p>
        </div>
    </section>

    <section class="law-section section">
        <div class="container">
            @if (count($lawyers))
                <div class="row g-4">
                    @foreach ($lawyers as $lawyer)
                        <div class="col-sm-6 col-lg-3">
                            <x-lawyer-card :lawyer="$lawyer" />
                        </div>
                    @endforeach
                </div>
            @else
                <div class="empty-state">Data tim belum tersedia.</div>
            @endif
        </div>
    </section>

    <x-cta />
@endsection
