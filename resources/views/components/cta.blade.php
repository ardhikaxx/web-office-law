@props([
    'title' => 'Butuh Pendampingan Hukum yang Tegas & Terpercaya?',
    'description' => 'Sampaikan ringkasan kebutuhan hukum Anda. Tim advokat kami siap melakukan telaah awal secara profesional dan menjaga kerahasiaan penuh.',
])

<section class="law-cta-band cta-band position-relative overflow-hidden">
    {{-- Artistic Justice Symbol Watermark for High Legal Aesthetic --}}
    <div class="law-cta-watermark" aria-hidden="true">
        <picture>
            <source srcset="{{ asset('assets/images/simbol-justice.webp') }}" type="image/webp">
            <img src="{{ asset('assets/images/simbol-justice.webp') }}"
                 alt="Simbol Keadilan - Holong Siregar &amp; Co."
                 width="800"
                 height="883"
                 loading="lazy">
        </picture>
    </div>

    <div class="container position-relative" style="z-index: 2;">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <p class="law-cta-eyebrow cta-eyebrow">
                    <i class="fa-solid fa-shield-halved text-gold me-2"></i>KONSULTASI AWAL TERARAH
                </p>
                <h2 class="law-cta-title cta-title">{{ $title }}</h2>
                <p class="law-cta-text cta-text">{{ $description }}</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <div class="d-flex flex-wrap gap-2 justify-content-lg-end">
                    <a href="{{ route('contact') }}" class="btn btn-gold law-btn-primary btn-lg">
                        <i class="fa-solid fa-calendar-check me-1"></i> Jadwalkan Konsultasi
                    </a>
                    <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener" class="btn btn-outline-light btn-lg">
                        <i class="fa-brands fa-whatsapp text-success me-1"></i> WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
