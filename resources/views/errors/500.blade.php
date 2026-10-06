@extends('layouts.app')

@section('title', 'Terjadi Gangguan (500) | Holong Siregar & Co.')
@section('meta_description', 'Terjadi gangguan pada server. Silakan coba beberapa saat lagi.')

@section('content')
    <section class="section text-center">
        <div class="container" style="max-width: 640px;">
            <p class="section-eyebrow">500 — GANGGUAN SERVER</p>
            <h1 class="display-5">Mohon maaf, terjadi gangguan</h1>
            <p class="text-muted">Sistem kami mengalami kendala sesaat. Silakan muat ulang halaman atau hubungi kami melalui WhatsApp bila bersifat mendesak.</p>
            <div class="d-flex gap-2 justify-content-center flex-wrap mt-3">
                <a href="{{ route('home') }}" class="btn btn-navy">Kembali ke Beranda</a>
                <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener" class="btn btn-outline-navy">
                    <i class="fa-brands fa-whatsapp me-2"></i>WhatsApp
                </a>
            </div>
        </div>
    </section>
@endsection
