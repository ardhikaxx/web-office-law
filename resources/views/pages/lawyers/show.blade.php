@extends('layouts.app')

@section('title', $lawyer['name'] . ' | Tim Holong Siregar & Co.')
@section('meta_description', $lawyer['short_bio'] ?? $lawyer['position'])

@section('content')
    <section class="page-hero">
        <div class="container">
            <x-breadcrumb :items="[
                ['label' => 'Beranda', 'url' => route('home')],
                ['label' => 'Tim Kami', 'url' => route('lawyers.index')],
                ['label' => $lawyer['name']],
            ]" />
            <p class="eyebrow">PROFIL ADVOKAT</p>
            <h1>{{ $lawyer['name'] }}</h1>
            <p>{{ $lawyer['position'] }} — {{ $lawyer['specialization'] }}</p>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="lawyer-card">
                        <div class="lawyer-photo">
                            <img src="{{ \App\Support\LawFirm::assetOrFallback($lawyer['photo'] ?? null) }}" alt="Foto {{ $lawyer['name'] }}" width="400" height="460">
                        </div>
                        <div class="lawyer-body">
                            <p class="lawyer-position">{{ $lawyer['position'] }}</p>
                            <p class="lawyer-spec"><i class="fa-solid fa-briefcase me-1"></i>{{ $lawyer['specialization'] }}</p>
                            <a href="{{ route('contact') }}" class="btn btn-gold w-100">Konsultasi Terkait Bidang Ini</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <h2 class="h4">Profil Singkat</h2>
                    <p class="text-muted">{{ $lawyer['bio'] }}</p>

                    @if (!empty($lawyer['education']))
                        <h3 class="h5 mt-4">Pendidikan</h3>
                        <ul class="check-list">
                            @foreach ($lawyer['education'] as $edu)
                                <li><i class="fa-solid fa-graduation-cap"></i>{{ $edu }}</li>
                            @endforeach
                        </ul>
                    @endif

                    @if (!empty($lawyer['experience']))
                        <h3 class="h5 mt-4">Pengalaman Profesional</h3>
                        <ul class="check-list">
                            @foreach ($lawyer['experience'] as $exp)
                                <li><i class="fa-solid fa-circle-check"></i>{{ $exp }}</li>
                            @endforeach
                        </ul>
                    @endif

                    @if (!empty($lawyer['organizations']))
                        <h3 class="h5 mt-4">Organisasi Profesi</h3>
                        <ul class="check-list">
                            @foreach ($lawyer['organizations'] as $org)
                                <li><i class="fa-solid fa-users"></i>{{ $org }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <h3 class="h5 mt-4">Bidang Terkait</h3>
                    <div class="d-flex flex-wrap gap-2">
                        @foreach (array_slice(config('lawfirm.services', []), 0, 6) as $service)
                            <a href="{{ route('services.show', $service['slug']) }}" class="btn btn-outline-navy btn-sm">{{ $service['title'] }}</a>
                        @endforeach
                    </div>
                </div>
            </div>

            @if (count($others))
                <h2 class="h4 mt-5 mb-3">Profil Lainnya</h2>
                <div class="row g-4">
                    @foreach ($others as $other)
                        <div class="col-sm-6 col-lg-4">
                            <x-lawyer-card :lawyer="$other" />
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <x-cta />
@endsection
