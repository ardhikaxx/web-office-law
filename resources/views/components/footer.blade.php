<footer class="law-footer site-footer">
    <div class="law-footer-top">
        <div class="container">
            <div class="row g-4 g-lg-5">
                {{-- Col 1: Identity & Description --}}
                <div class="col-lg-4 col-md-6">
                    <a class="law-brand brand d-inline-flex align-items-center gap-3 mb-3 text-decoration-none" href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/logo.png') }}"
                             alt="Logo Holong Siregar &amp; Co."
                             class="law-brand-symbol rounded-circle rounded-full"
                             width="48"
                             height="48"
                             loading="lazy">
                        <div class="law-brand-titles">
                            <span class="law-brand-name text-white">
                                Holong Siregar <span class="text-gold">&amp; Co.</span>
                            </span>
                            <span class="law-brand-sub text-gold-light">LAW OFFICE</span>
                        </div>
                    </a>
                    <p class="law-footer-brand-desc">
                        Firma hukum profesional yang mengedepankan integritas, ketelitian analitis,
                        kerahasiaan mutlak, serta strategi hukum terukur demi perlindungan hak dan
                        kepentingan terbaik setiap klien.
                    </p>
                    <div class="law-footer-social">
                        <a href="{{ $site['linkedin'] ?? '#' }}" aria-label="LinkedIn" target="_blank" rel="noopener">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                        <a href="{{ $site['instagram'] ?? '#' }}" aria-label="Instagram" target="_blank" rel="noopener">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="{{ $site['facebook'] ?? '#' }}" aria-label="Facebook" target="_blank" rel="noopener">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="{{ $whatsappUrl }}" aria-label="WhatsApp" target="_blank" rel="noopener">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </div>
                </div>

                {{-- Col 2: Navigasi --}}
                <div class="col-lg-2 col-md-6 col-6">
                    <h3 class="law-footer-title">Navigasi</h3>
                    <ul class="law-footer-links">
                        <li><a href="{{ route('home') }}">Beranda</a></li>
                        <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                        <li><a href="{{ route('services.index') }}">Layanan Hukum</a></li>
                        <li><a href="{{ route('practice-areas.index') }}">Area Praktik</a></li>
                        <li><a href="{{ route('lawyers.index') }}">Tim Kami</a></li>
                        <li><a href="{{ route('articles.index') }}">Artikel &amp; Insight</a></li>
                        <li><a href="{{ route('contact') }}">Kontak Kami</a></li>
                        <li><a href="{{ route('faq') }}">FAQ</a></li>
                    </ul>
                </div>

                {{-- Col 3: Layanan Hukum --}}
                <div class="col-lg-3 col-md-6 col-6">
                    <h3 class="law-footer-title">Layanan Hukum</h3>
                    <ul class="law-footer-links">
                        @foreach (config('lawfirm.services', []) as $service)
                            <li>
                                <a href="{{ route('services.show', $service['slug']) }}">
                                    {{ $service['title'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                {{-- Col 4: Kontak & Kantor --}}
                <div class="col-lg-3 col-md-6">
                    <h3 class="law-footer-title">Informasi Kantor</h3>
                    <div class="law-footer-contact-item">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>{{ $site['address'] ?? '[Alamat Kantor]' }}, {{ $site['city'] ?? '' }}</span>
                    </div>
                    <div class="law-footer-contact-item">
                        <i class="fa-solid fa-envelope"></i>
                        <span>{{ $site['email'] ?? '[Email Resmi]' }}</span>
                    </div>
                    <div class="law-footer-contact-item">
                        <i class="fa-brands fa-whatsapp"></i>
                        <span>{{ $site['whatsapp_display'] ?? '' }}</span>
                    </div>
                    <div class="law-footer-contact-item">
                        <i class="fa-regular fa-clock"></i>
                        <span>{{ $site['hours'] ?? 'Senin – Jumat, 09.00 – 17.00 WIB' }}</span>
                    </div>

                    <div class="mt-3 pt-2">
                        <a href="{{ route('contact') }}" class="btn btn-gold btn-sm law-btn-primary w-100">
                            <i class="fa-solid fa-calendar-check me-1"></i> Konsultasi Online
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Bottom Bar --}}
    <div class="law-footer-bottom">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
            <div>
                &copy; {{ date('Y') }} Holong Siregar &amp; Co. Law Office. Seluruh hak cipta dilindungi.
            </div>
            <div class="d-flex flex-wrap gap-3 align-items-center text-center">
                <a href="{{ route('disclaimer') }}">Disclaimer</a>
                <span>&bull;</span>
                <a href="{{ route('privacy') }}">Kebijakan Privasi</a>
                <span>&bull;</span>
                <a href="{{ route('terms') }}">Syarat &amp; Ketentuan</a>
            </div>
        </div>
    </div>
</footer>
