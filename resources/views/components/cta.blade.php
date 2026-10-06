@props([
    'title' => 'Butuh pendampingan hukum yang dapat dipercaya?',
    'description' => 'Sampaikan ringkasan kebutuhan Anda. Kami akan menerima permintaan konsultasi untuk ditinjau lebih lanjut.',
])

<section class="cta-band">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <p class="cta-eyebrow">KONSULTASI AWAL</p>
                <h2 class="cta-title">{{ $title }}</h2>
                <p class="cta-text">{{ $description }}</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="{{ route('contact') }}" class="btn btn-gold btn-lg me-2 mb-2">Hubungi Kami</a>
                <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener" class="btn btn-outline-light btn-lg mb-2">
                    <i class="fa-brands fa-whatsapp me-2"></i>WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>
