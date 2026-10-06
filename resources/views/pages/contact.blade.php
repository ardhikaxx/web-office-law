@extends('layouts.app')

@section('title', 'Kontak Kami | Holong Siregar & Co. Law Office')
@section('meta_description', 'Hubungi Holong Siregar & Co. Law Office untuk permintaan konsultasi awal: alamat, email, WhatsApp, jam operasional, dan formulir konsultasi.')

@section('content')
    <section class="page-hero">
        <div class="container">
            <x-breadcrumb :items="[
                ['label' => 'Beranda', 'url' => route('home')],
                ['label' => 'Kontak Kami'],
            ]" />
            <p class="eyebrow">KONTAK KAMI</p>
            <h1>Kontak Kami</h1>
            <p>Sampaikan ringkasan kebutuhan Anda. Kami akan menerima permintaan konsultasi untuk ditinjau lebih lanjut.</p>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row g-4 mb-5">
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info-card">
                        <p><i class="fa-solid fa-location-dot me-2"></i><strong>Alamat</strong></p>
                        <p class="text-muted mb-0">{{ $site['address'] }}, {{ $site['city'] }}</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info-card">
                        <p><i class="fa-solid fa-envelope me-2"></i><strong>Email</strong></p>
                        <p class="text-muted mb-0">{{ $site['email'] }}</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info-card">
                        <p><i class="fa-brands fa-whatsapp me-2"></i><strong>WhatsApp</strong></p>
                        <p class="text-muted mb-2">{{ $site['whatsapp_display'] }}</p>
                        <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener" class="btn btn-outline-navy btn-sm">Chat Sekarang</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info-card">
                        <p><i class="fa-regular fa-clock me-2"></i><strong>Jam Operasional</strong></p>
                        <p class="text-muted mb-0">{{ $site['hours'] }}</p>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <div class="col-lg-7">
                    <h2 class="h4 mb-1">Formulir Permintaan Konsultasi</h2>
                    <p class="text-muted">Lengkapi data berikut. Tanda <span class="text-danger">*</span> wajib diisi.</p>

                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <strong>Mohon periksa kembali:</strong>
                            <ul class="mb-0 mt-2">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form id="consultationForm" method="POST" action="{{ route('contact.store') }}" novalidate>
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="name">Nama Lengkap *</label>
                                <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" name="name"
                                    value="{{ old('name') }}" placeholder="Nama lengkap Anda" required maxlength="100">
                                @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="phone">Nomor WhatsApp/Telepon *</label>
                                <input class="form-control @error('phone') is-invalid @enderror" type="tel" id="phone" name="phone"
                                    value="{{ old('phone') }}" placeholder="cth. 0812xxxxxxx" required maxlength="20">
                                @error('phone')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="email">Email *</label>
                                <input class="form-control @error('email') is-invalid @enderror" type="email" id="email" name="email"
                                    value="{{ old('email') }}" placeholder="nama@email.com" required maxlength="150">
                                @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="legal_need">Jenis Kebutuhan Hukum *</label>
                                <select class="form-select @error('legal_need') is-invalid @enderror" id="legal_need" name="legal_need" required>
                                    <option value="">— Pilih kebutuhan —</option>
                                    @foreach ($services as $service)
                                        <option value="{{ $service['title'] }}" @selected(old('legal_need') === $service['title'])>{{ $service['title'] }}</option>
                                    @endforeach
                                    <option value="Lainnya" @selected(old('legal_need') === 'Lainnya')>Lainnya</option>
                                </select>
                                @error('legal_need')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="subject">Subjek *</label>
                                <input class="form-control @error('subject') is-invalid @enderror" type="text" id="subject" name="subject"
                                    value="{{ old('subject') }}" placeholder="Ringkasan singkat keperluan Anda" required maxlength="150">
                                @error('subject')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="message">Ringkasan Permasalahan *</label>
                                <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="5"
                                    placeholder="Tuliskan kronologi singkat tanpa menyertakan data sangat sensitif" required maxlength="3000">{{ old('message') }}</textarea>
                                @error('message')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input @error('agreement') is-invalid @enderror" type="checkbox" id="agreement" name="agreement" value="1" @checked(old('agreement')) required>
                                    <label class="form-check-label small" for="agreement">
                                        Saya memahami bahwa informasi yang saya kirimkan bersifat permintaan awal dan <strong>bukan otomatis membentuk hubungan advokat–klien</strong> sampai dikonfirmasi oleh kantor. *
                                    </label>
                                    @error('agreement')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-gold btn-lg">
                                    <i class="fa-solid fa-paper-plane me-2"></i>Kirim Permintaan Konsultasi
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-5">
                    <div class="info-card">
                        <h2 class="h5">Sebelum Menghubungi</h2>
                        <ul class="check-list">
                            <li><i class="fa-solid fa-circle-check"></i>Siapkan kronologi singkat dan dokumen pendukung</li>
                            <li><i class="fa-solid fa-circle-check"></i>Hindari mengirim data sangat sensitif via formulir</li>
                            <li><i class="fa-solid fa-circle-check"></i>Kami meninjau setiap permintaan lalu menghubungi Anda</li>
                            <li><i class="fa-solid fa-circle-check"></i>Untuk keadaan mendesak, hubungi WhatsApp langsung</li>
                        </ul>
                        <hr>
                        <h3 class="h6">Pertanyaan Umum</h3>
                        <p class="text-muted small">Lihat halaman <a href="{{ route('faq') }}">FAQ</a>, <a href="{{ route('disclaimer') }}">Disclaimer</a>, dan <a href="{{ route('privacy') }}">Kebijakan Privasi</a> sebelum mengirim formulir.</p>
                        @if ($site['maps_embed'])
                            <div class="ratio ratio-16x9 rounded overflow-hidden border">
                                <iframe title="Lokasi kantor" src="{{ $site['maps_embed'] }}" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
                            </div>
                        @else
                            <div class="empty-state small">Peta lokasi akan ditampilkan setelah alamat resmi tersedia.</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
