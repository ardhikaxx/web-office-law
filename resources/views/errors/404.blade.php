@extends('layouts.app')

@section('title', 'Halaman Tidak Ditemukan (404) | Holong Siregar & Co.')
@section('meta_description', 'Halaman yang Anda cari tidak ditemukan.')

@section('content')
    <section class="section text-center">
        <div class="container" style="max-width: 640px;">
            <p class="section-eyebrow">404 — TIDAK DITEMUKAN</p>
            <h1 class="display-5">Halaman tidak tersedia</h1>
            <p class="text-muted">Tautan yang Anda buka mungkin telah berubah atau tidak lagi tersedia. Silakan kembali ke beranda atau hubungi kami bila membutuhkan bantuan.</p>
            <div class="d-flex gap-2 justify-content-center flex-wrap mt-3">
                <a href="{{ route('home') }}" class="btn btn-navy">Kembali ke Beranda</a>
                <a href="{{ route('contact') }}" class="btn btn-outline-navy">Hubungi Kami</a>
            </div>
        </div>
    </section>
@endsection
