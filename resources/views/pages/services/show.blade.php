@extends('layouts.app')

@section('title', $service['title'] . ' | Holong Siregar & Co. Law Office')
@section('meta_description', $service['short_description'])

@section('content')
    <section class="page-hero">
        <div class="container">
            <x-breadcrumb :items="[
                ['label' => 'Beranda', 'url' => route('home')],
                ['label' => 'Layanan Hukum', 'url' => route('services.index')],
                ['label' => $service['title']],
            ]" />
            <p class="eyebrow">LAYANAN HUKUM</p>
            <h1>{{ $service['title'] }}</h1>
            <p>{{ $service['short_description'] }}</p>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <span class="service-icon mb-0" aria-hidden="true"><i class="{{ $service['icon'] }}"></i></span>
                        <h2 class="h4 mb-0">Deskripsi Layanan</h2>
                    </div>
                    <p class="text-muted">{{ $service['description'] }}</p>

                    @if (!empty($service['scopes']))
                        <h3 class="h5 mt-4 mb-3">Ruang Lingkup Pendampingan</h3>
                        <ul class="check-list">
                            @foreach ($service['scopes'] as $scope)
                                <li><i class="fa-solid fa-circle-check"></i>{{ $scope }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <h3 class="h5 mt-4 mb-3">Pendekatan Kami</h3>
                    <p class="text-muted">Setiap permintaan diawali dengan pemahaman kebutuhan, penelaahan dokumen, dan penyusunan opsi langkah hukum beserta risiko dan estimasinya. Klien dilibatkan dalam setiap keputusan penting, dan seluruh proses didokumentasikan secara tertib.</p>

                    <div class="alert alert-light border mt-4" role="note">
                        <i class="fa-solid fa-circle-info me-2"></i>
                        Informasi pada halaman ini bersifat umum dan bukan nasihat hukum individual. Sampaikan ringkasan kebutuhan Anda untuk peninjauan lebih lanjut.
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="info-card mb-4">
                        <h3 class="h5">Butuh layanan ini?</h3>
                        <p class="text-muted small">Sampaikan ringkasan kebutuhan Anda. Kami akan menerima permintaan konsultasi untuk ditinjau lebih lanjut.</p>
                        <a href="{{ route('contact') }}" class="btn btn-gold w-100 mb-2">Konsultasi Sekarang</a>
                        <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener" class="btn btn-outline-navy w-100">
                            <i class="fa-brands fa-whatsapp me-2"></i>Chat WhatsApp
                        </a>
                    </div>

                    @if (count($related))
                        <h3 class="h6 mb-3">Layanan Terkait</h3>
                        @foreach ($related as $item)
                            <div class="d-flex gap-3 align-items-start border rounded p-3 mb-2 bg-white">
                                <span class="service-icon mb-0" style="width:42px;height:42px;font-size:1rem;" aria-hidden="true"><i class="{{ $item['icon'] }}"></i></span>
                                <div>
                                    <a href="{{ route('services.show', $item['slug']) }}" class="fw-bold text-dark">{{ $item['title'] }}</a>
                                    <p class="small text-muted mb-0">{{ \Illuminate\Support\Str::limit($item['short_description'], 90) }}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>

    <x-cta />
@endsection
