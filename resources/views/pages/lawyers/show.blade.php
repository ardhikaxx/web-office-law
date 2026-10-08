@extends('layouts.app')

@section('title', $lawyer['name'] . ' | Advokat Holong Siregar')
@section('meta_description', 'Profil advokat ' . $lawyer['name'] . ' (' . $lawyer['position'] . ' pada Holong Siregar & Co.). Praktisi hukum di Tangerang & Bogor.')
@section('meta_keywords', \App\Support\Seo::keywords(['advokat ' . strtolower($lawyer['name']), 'pengacara ' . strtolower($lawyer['name']), 'profil advokat tangerang', 'pengacara ' . strtolower($lawyer['specialization'])]))
@section('canonical', route('lawyers.show', $lawyer['slug']))

@section('content')
    <section class="law-page-hero page-hero">
        <div class="container">
            <x-breadcrumb :items="[
                ['label' => 'Beranda', 'url' => route('home')],
                ['label' => 'Tim Kami', 'url' => route('lawyers.index')],
                ['label' => $lawyer['name']],
            ]" />
            <span class="law-section-eyebrow eyebrow text-gold-light">PROFIL ADVOKAT</span>
            <h1 class="law-heading">{{ $lawyer['name'] }}</h1>
            <p>{{ $lawyer['position'] }} — {{ $lawyer['specialization'] }}</p>
        </div>
    </section>

    <section class="law-section section">
        <div class="container">
            <div class="row g-5">
                {{-- Lawyer Sidebar Card --}}
                <div class="col-lg-4">
                    <div class="law-card p-0 overflow-hidden bg-navy text-white mb-4 border">
                        <div class="law-attorney-photo">
                            <img src="{{ \App\Support\LawFirm::assetOrFallback($lawyer['photo'] ?? null) }}"
                                 alt="Foto {{ $lawyer['name'] }}"
                                 class="w-100"
                                 width="400"
                                 height="480">
                        </div>
                        <div class="p-4">
                            <h2 class="h4 text-white law-heading mb-1">{{ $lawyer['name'] }}</h2>
                            <p class="text-gold-light fw-bold small mb-2">{{ $lawyer['position'] }}</p>
                            <p class="text-light small mb-4">
                                <i class="fa-solid fa-briefcase text-gold me-2"></i>{{ $lawyer['specialization'] }}
                            </p>
                            <a href="{{ route('contact') }}" class="btn btn-gold law-btn-primary w-100">
                                <i class="fa-solid fa-comments me-2"></i>Konsultasi Terkait Bidang Ini
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Lawyer Biography & Credentials --}}
                <div class="col-lg-8">
                    <div class="law-card p-4 p-md-5 bg-white mb-4">
                        <h2 class="h3 law-heading mb-3">Profil &amp; Dedikasi Profesional</h2>
                        <p class="text-muted leading-relaxed">{{ $lawyer['bio'] }}</p>

                        @if (!empty($lawyer['education']))
                            <h3 class="h5 law-heading mt-4 mb-3">Latar Belakang Pendidikan</h3>
                            <ul class="law-check-list check-list">
                                @foreach ($lawyer['education'] as $edu)
                                    <li>
                                        <i class="fa-solid fa-graduation-cap text-gold"></i>
                                        <span>{{ $edu }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        @endif

                        @if (!empty($lawyer['experience']))
                            <h3 class="h5 law-heading mt-4 mb-3">Pengalaman Praktik</h3>
                            <ul class="law-check-list check-list">
                                @foreach ($lawyer['experience'] as $exp)
                                    <li>
                                        <i class="fa-solid fa-circle-check text-gold"></i>
                                        <span>{{ $exp }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        @endif

                        @if (!empty($lawyer['organizations']))
                            <h3 class="h5 law-heading mt-4 mb-3">Organisasi Advokat &amp; Profesi</h3>
                            <ul class="law-check-list check-list">
                                @foreach ($lawyer['organizations'] as $org)
                                    <li>
                                        <i class="fa-solid fa-landmark text-gold"></i>
                                        <span>{{ $org }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        @endif

                        <h3 class="h5 law-heading mt-4 mb-3">Bidang Praktik Terkait</h3>
                        <div class="d-flex flex-wrap gap-2">
                            @foreach (array_slice(config('lawfirm.services', []), 0, 6) as $service)
                                <a href="{{ route('services.show', $service['slug']) }}" class="btn btn-outline-navy law-btn-outline btn-sm">
                                    {{ $service['title'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{-- Other Lawyers --}}
            @if (count($others))
                <div class="mt-5 pt-3">
                    <h2 class="h4 law-heading mb-4">Advokat Lainnya di Holong Siregar &amp; Co.</h2>
                    <div class="row g-4">
                        @foreach ($others as $other)
                            <div class="col-sm-6 col-lg-4">
                                <x-lawyer-card :lawyer="$other" />
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section>

    <x-cta />
@endsection

@push('schema_extra')
    @php
        $personSchema = \App\Support\Seo::personSchema($lawyer);
    @endphp
    <script type="application/ld+json">{!! json_encode($personSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
@endpush
