@extends('layouts.app')

@section('title', 'FAQ | Holong Siregar & Co. Law Office')
@section('meta_description', 'Pertanyaan yang sering diajukan seputar konsultasi, layanan, dan pendampingan hukum di Holong Siregar & Co.')

@section('content')
    <section class="page-hero">
        <div class="container">
            <x-breadcrumb :items="[
                ['label' => 'Beranda', 'url' => route('home')],
                ['label' => 'FAQ'],
            ]" />
            <p class="eyebrow">BANTUAN</p>
            <h1>Pertanyaan Umum (FAQ)</h1>
            <p>Jawaban atas pertanyaan yang sering diajukan calon klien sebelum memulai konsultasi.</p>
        </div>
    </section>

    <section class="section">
        <div class="container" style="max-width: 820px;">
            @if (count($faqs))
                <div class="accordion" id="faqAccordion">
                    @foreach ($faqs as $i => $faq)
                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="faqHeading{{ $i }}">
                                <button class="accordion-button {{ $i !== 0 ? 'collapsed' : '' }}" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faqCollapse{{ $i }}"
                                    aria-expanded="{{ $i === 0 ? 'true' : 'false' }}" aria-controls="faqCollapse{{ $i }}">
                                    {{ $faq['q'] }}
                                </button>
                            </h2>
                            <div id="faqCollapse{{ $i }}" class="accordion-collapse collapse {{ $i === 0 ? 'show' : '' }}"
                                aria-labelledby="faqHeading{{ $i }}" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">{{ $faq['a'] }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="empty-state">Data FAQ belum tersedia.</div>
            @endif

            <div class="text-center mt-4">
                <p class="text-muted">Tidak menemukan jawaban?</p>
                <a href="{{ route('contact') }}" class="btn btn-navy">Hubungi Kami</a>
            </div>
        </div>
    </section>

    <x-cta />
@endsection
