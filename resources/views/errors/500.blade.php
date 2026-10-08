@extends('layouts.app')

@section('title', 'Gangguan Server (500) | Holong Siregar & Co.')
@section('meta_description', 'Terjadi kendala sesaat pada sistem server kami.')
@section('meta_robots', 'noindex, nofollow')

@section('content')
    <section class="law-section section text-center py-5 my-5">
        <div class="container" style="max-width: 680px;">
            <div class="law-service-icon mx-auto mb-3" style="width:72px;height:72px;font-size:2rem;">
                <i class="fa-solid fa-triangle-exclamation text-gold"></i>
            </div>
            <span class="law-section-eyebrow">500 — GANGGUAN SISTEM SESAAT</span>
            <h1 class="law-heading display-6 mb-3">Mohon Maaf, Terjadi Kendala Sesaat</h1>
            <p class="text-muted mb-4 leading-relaxed">
                Server kami sedang mengalami kendala teknis sesaat. Silakan coba muat ulang halaman beberapa saat lagi
                atau hubungi tim kami langsung melalui WhatsApp untuk keperluan yang mendesak.
            </p>
            <div class="d-flex gap-3 justify-content-center flex-wrap">
                <a href="{{ route('home') }}" class="btn btn-navy law-btn-navy">
                    <i class="fa-solid fa-house me-2"></i>Kembali ke Beranda
                </a>
                <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener" class="btn btn-gold law-btn-primary">
                    <i class="fa-brands fa-whatsapp me-2"></i>Hubungi via WhatsApp
                </a>
            </div>
        </div>
    </section>
@endsection
