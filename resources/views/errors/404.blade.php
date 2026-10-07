@extends('layouts.app')

@section('title', 'Halaman Tidak Ditemukan (404) | Holong Siregar & Co.')
@section('meta_description', 'Halaman yang Anda cari tidak ditemukan atau telah berpindah alamat.')

@section('content')
    <section class="law-section section text-center py-5 my-5">
        <div class="container" style="max-width: 680px;">
            <div class="law-service-icon mx-auto mb-3" style="width:72px;height:72px;font-size:2rem;">
                <i class="fa-solid fa-scale-unbalanced text-gold"></i>
            </div>
            <span class="law-section-eyebrow">404 — HALAMAN TIDAK DITEMUKAN</span>
            <h1 class="law-heading display-6 mb-3">Halaman yang Anda Cari Tidak Tersedia</h1>
            <p class="text-muted mb-4 leading-relaxed">
                Tautan yang Anda tuju mungkin telah diperbarui, berpindah alamat, atau tidak lagi aktif.
                Silakan kembali ke beranda atau hubungi tim kami bila Anda membutuhkan panduan layanan hukum tertentu.
            </p>
            <div class="d-flex gap-3 justify-content-center flex-wrap">
                <a href="{{ route('home') }}" class="btn btn-navy law-btn-navy">
                    <i class="fa-solid fa-house me-2"></i>Kembali ke Beranda
                </a>
                <a href="{{ route('contact') }}" class="btn btn-gold law-btn-primary">
                    <i class="fa-solid fa-comments me-2"></i>Hubungi Kami
                </a>
            </div>
        </div>
    </section>
@endsection
