@extends('layouts.app')

@section('title', 'Kontak Pengacara Tangerang & Bogor | Holong Siregar')
@section('meta_description', 'Kontak kantor advokat Holong Siregar & Co. di Tangerang & Bogor. Konsultasi cepat via WhatsApp 081-3188-41961 atau telepon 0857-7163-3860.')
@section('meta_keywords', \App\Support\Seo::keywords(['kontak pengacara di tangerang', 'alamat kantor pengacara tangerang', 'nomor wa pengacara tangerang', 'kantor hukum periuk tangerang', 'advokat grand tomang tangerang', 'pengacara bsd tangsel']))
@section('canonical', route('contact'))

@section('content')
    <section class="law-page-hero page-hero">
        <div class="container">
            <x-breadcrumb :items="[
                ['label' => 'Beranda', 'url' => route('home')],
                ['label' => 'Kontak Kami'],
            ]" />
            <span class="law-section-eyebrow eyebrow text-gold-light">KONTAK KAMI</span>
            <h1 class="law-heading">Hubungi Tim Advokat Kami</h1>
            <p>Sampaikan ringkasan kebutuhan atau permasalahan hukum Anda. Kami siap meninjau dan memberikan tanggapan awal yang tepat.</p>
        </div>
    </section>

    <section class="law-section section">
        <div class="container">
            {{-- Contact Cards Row --}}
            <div class="row g-4 mb-5">
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info-card h-100">
                        <div class="law-service-icon mb-3">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <h2 class="h5 law-heading">Alamat Kantor</h2>
                        <div class="small mb-2">
                            <strong class="text-navy d-block">1. Kantor Bogor:</strong>
                            <span class="text-muted">Aspol Panaragan Kidul RT/RW: 04/04, Kec. Bogor Tengah, Kota Bogor</span>
                        </div>
                        <div class="small mb-0">
                            <strong class="text-navy d-block">2. Kantor Tangerang:</strong>
                            <span class="text-muted">Villa Grand Tomang, Periuk, Kota Tangerang</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info-card h-100">
                        <div class="law-service-icon mb-3">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <h2 class="h5 law-heading">Email Resmi</h2>
                        <p class="text-muted mb-0">
                            <a href="mailto:{{ $site['email'] }}" class="text-navy text-decoration-none">
                                {{ $site['email'] }}
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info-card h-100">
                        <div class="law-service-icon mb-3">
                            <i class="fa-brands fa-whatsapp text-success"></i>
                        </div>
                        <h2 class="h5 law-heading">Telepon &amp; WhatsApp</h2>
                        <div class="small mb-2">
                            <strong class="text-navy d-block">1. WhatsApp &amp; Telp:</strong>
                            <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener" class="text-navy text-decoration-none fw-semibold">
                                <i class="fa-brands fa-whatsapp text-success me-1"></i>{{ $site['whatsapp_display'] ?? '081-3188-41961' }}
                            </a>
                        </div>
                        <div class="small mb-3">
                            <strong class="text-navy d-block">2. Telepon Kantor:</strong>
                            <a href="tel:{{ preg_replace('/[^0-9]/', '', $site['phone_2'] ?? '085771633860') }}" class="text-navy text-decoration-none fw-semibold">
                                <i class="fa-solid fa-phone text-gold me-1"></i>{{ $site['phone_2'] ?? '0857-7163-3860' }}
                            </a>
                        </div>
                        <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener" class="btn btn-outline-navy law-btn-outline btn-sm w-100">
                            <i class="fa-brands fa-whatsapp text-success me-1"></i>Chat WhatsApp
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info-card">
                        <div class="law-service-icon mb-3">
                            <i class="fa-regular fa-clock"></i>
                        </div>
                        <h2 class="h5 law-heading">Jam Operasional</h2>
                        <p class="text-muted mb-0">{{ $site['hours'] ?? 'Senin – Sabtu, 08:00 – 17:30 WIB' }}</p>
                    </div>
                </div>
            </div>

            {{-- Form & Guidance Section --}}
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="law-card p-4 p-md-5 bg-white border">
                        <div class="mb-4">
                            <span class="law-section-eyebrow">FORMULIR KONSULTASI</span>
                            <h2 class="h3 law-heading mb-2">Permintaan Konsultasi Hukum</h2>
                            <p class="text-muted small">Lengkapi informasi di bawah ini. Bidang bertanda bintang (<span class="text-danger">*</span>) wajib diisi.</p>
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong><i class="fa-solid fa-circle-exclamation me-2"></i>Mohon periksa kembali isian formulir:</strong>
                                <ul class="mb-0 mt-2 ps-3">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form id="consultationForm" class="law-consultation-form" method="POST" action="{{ route('contact.store') }}" novalidate>
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="name">Nama Lengkap *</label>
                                    <input class="form-control @error('name') is-invalid @enderror"
                                           type="text"
                                           id="name"
                                           name="name"
                                           value="{{ old('name') }}"
                                           placeholder="Nama lengkap Anda"
                                           required
                                           maxlength="100">
                                    @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label" for="phone">Nomor WhatsApp *</label>
                                    <input class="form-control @error('phone') is-invalid @enderror"
                                           type="tel"
                                           id="phone"
                                           name="phone"
                                           value="{{ old('phone') }}"
                                           placeholder="cth. 081234567890"
                                           required
                                           maxlength="20">
                                    @error('phone')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label" for="legal_need">Jenis Kebutuhan Hukum *</label>
                                    <select class="form-select @error('legal_need') is-invalid @enderror"
                                            id="legal_need"
                                            name="legal_need"
                                            required>
                                        <option value="">— Pilih Kebutuhan Hukum —</option>
                                        @foreach ($services as $service)
                                            <option value="{{ $service['title'] }}" @selected(old('legal_need') === $service['title'])>
                                                {{ $service['title'] }}
                                            </option>
                                        @endforeach
                                        <option value="Lainnya" @selected(old('legal_need') === 'Lainnya')>Lainnya</option>
                                    </select>
                                    @error('legal_need')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label" for="message">Ringkasan Permasalahan *</label>
                                    <textarea class="form-control @error('message') is-invalid @enderror"
                                              id="message"
                                              name="message"
                                              rows="4"
                                              placeholder="Tuliskan secara ringkas kronologi, inti persoalan, atau pertanyaan hukum Anda..."
                                              required
                                              maxlength="3000">{{ old('message') }}</textarea>
                                    @error('message')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input @error('agreement') is-invalid @enderror"
                                               type="checkbox"
                                               id="agreement"
                                               name="agreement"
                                               value="1"
                                               @checked(old('agreement', '1'))
                                               required>
                                        <label class="form-check-label small" for="agreement">
                                            Saya memahami bahwa informasi yang saya kirimkan bersifat permintaan awal dan <strong>bukan otomatis membentuk hubungan advokat–klien</strong> sebelum konfirmasi resmi dari kantor. *
                                        </label>
                                        @error('agreement')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                                    </div>
                                </div>

                                <div class="col-12 pt-2">
                                    <button type="submit" class="btn btn-gold law-btn-primary btn-lg w-100">
                                        <i class="fa-brands fa-whatsapp me-2"></i>Kirim Konsultasi ke WhatsApp
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="law-card p-4 p-md-5 bg-white border h-100">
                        <h2 class="h4 law-heading mb-3">Panduan Sebelum Konsultasi</h2>
                        <ul class="law-check-list check-list">
                            <li>
                                <i class="fa-solid fa-circle-check"></i>
                                <span><strong>Siapkan kronologi singkat:</strong> Catat urutan kejadian dan para pihak yang terlibat secara sistematis.</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-circle-check"></i>
                                <span><strong>Dokumen pendukung:</strong> Inventarisasi bukti tertulis, perjanjian, atau korespondensi yang relevan.</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-circle-check"></i>
                                <span><strong>Kerahasiaan terjamin:</strong> Setiap pesan dan dokumen ditangani dengan standar kerahasiaan profesi.</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-circle-check"></i>
                                <span><strong>Keadaan mendesak:</strong> Untuk kebutuhan yang membutuhkan penanganan cepat, hubungi kami via WhatsApp.</span>
                            </li>
                        </ul>

                        <hr class="my-4">

                        <h3 class="h6 law-heading mb-3">
                            <i class="fa-solid fa-building-columns text-gold me-2"></i>Lokasi Kantor Operasional
                        </h3>
                        <div class="p-3 bg-light rounded-3 mb-2 border">
                            <div class="d-flex align-items-start gap-2">
                                <i class="fa-solid fa-map-pin text-gold mt-1 flex-shrink-0"></i>
                                <div>
                                    <strong class="text-navy d-block small">Kantor 1 — Kota Bogor</strong>
                                    <p class="text-muted small mb-0">Aspol Panaragan Kidul RT/RW: 04/04, Kec. Bogor Tengah, Kota Bogor</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 bg-light rounded-3 mb-3 border">
                            <div class="d-flex align-items-start gap-2">
                                <i class="fa-solid fa-map-pin text-gold mt-1 flex-shrink-0"></i>
                                <div>
                                    <strong class="text-navy d-block small">Kantor 2 — Kota Tangerang</strong>
                                    <p class="text-muted small mb-0">Villa Grand Tomang, Periuk, Kota Tangerang</p>
                                </div>
                            </div>
                        </div>

                        <h3 class="h6 law-heading">Informasi Terkait</h3>
                        <p class="text-muted small mb-3">
                            Pelajari ketentuan dan kebijakan kantor kami melalui halaman
                            <a href="{{ route('faq') }}" class="text-gold-dark fw-bold">FAQ</a>,
                            <a href="{{ route('disclaimer') }}" class="text-gold-dark fw-bold">Disclaimer</a>, dan
                            <a href="{{ route('privacy') }}" class="text-gold-dark fw-bold">Kebijakan Privasi</a>.
                        </p>

                        @if ($site['maps_embed'] ?? false)
                            <div class="ratio ratio-16x9 rounded overflow-hidden border mt-3">
                                {!! $site['maps_embed'] !!}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
