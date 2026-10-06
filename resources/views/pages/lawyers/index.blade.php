@extends('layouts.app')

@section('title', 'Tim Kami | Holong Siregar & Co. Law Office')
@section('meta_description', 'Kenali advokat dan profesional Holong Siregar & Co. Law Office beserta fokus praktik masing-masing.')

@section('content')
    <section class="page-hero">
        <div class="container">
            <x-breadcrumb :items="[
                ['label' => 'Beranda', 'url' => route('home')],
                ['label' => 'Tim Kami'],
            ]" />
            <p class="eyebrow">TIM KAMI</p>
            <h1>Advokat &amp; Profesional</h1>
            <p>Tim yang mendampingi setiap mandat dengan ketelitian, kerahasiaan, dan komunikasi yang bertanggung jawab.</p>
        </div>
    </section>

    <section class="section">
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
