<footer class="law-footer site-footer">
    {{-- Dignified Justice Symbol Watermark --}}
    <div class="law-footer-watermark" aria-hidden="true">
        <picture>
            <source srcset="{{ asset('assets/images/simbol-justice.webp') }}" type="image/webp">
            <img src="{{ asset('assets/images/simbol-justice.png') }}"
                 alt="Simbol Keadilan - Holong Siregar &amp; Co."
                 width="800"
                 height="883"
                 loading="lazy">
        </picture>
    </div>

    <div class="law-footer-top">
        <div class="container">
            <div class="row g-4 g-lg-5">
                {{-- Col 1: Identity & Description --}}
                <div class="col-lg-4 col-md-6">
                    <a class="law-brand brand d-inline-flex align-items-center gap-3 mb-3 text-decoration-none" href="{{ route('home') }}">
                        <picture>
                            <source srcset="{{ asset('assets/images/logo.webp') }}" type="image/webp">
                            <img src="{{ asset('assets/images/logo.png') }}"
                                 alt="Logo Holong Siregar &amp; Co."
                                 class="law-brand-symbol rounded-circle rounded-full"
                                 width="48"
                                 height="48"
                                 loading="lazy">
                        </picture>
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
                        <li><a href="{{ route('articles.index') }}">Artikel Hukum</a></li>
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
                    <div class="law-footer-contact-item mb-2">
                        <i class="fa-solid fa-location-dot mt-1"></i>
                        <div>
                            <strong class="text-white d-block small mb-1">Kantor 1 (Bogor):</strong>
                            <span class="opacity-90">Aspol Panaragan Kidul RT/RW: 04/04, Kec. Bogor Tengah, Kota Bogor</span>
                        </div>
                    </div>
                    <div class="law-footer-contact-item mb-3">
                        <i class="fa-solid fa-location-dot mt-1"></i>
                        <div>
                            <strong class="text-white d-block small mb-1">Kantor 2 (Tangerang):</strong>
                            <span class="opacity-90">Villa Grand Tomang, Periuk, Kota Tangerang</span>
                        </div>
                    </div>
                    <div class="law-footer-contact-item">
                        <i class="fa-solid fa-envelope"></i>
                        <a href="mailto:{{ $site['email'] }}" class="text-decoration-none text-light opacity-90" style="color:inherit;">
                            {{ $site['email'] }}
                        </a>
                    </div>
                    <div class="law-footer-contact-item">
                        <i class="fa-brands fa-whatsapp text-success"></i>
                        <div>
                            <span class="d-block text-muted" style="font-size:0.75rem;">WhatsApp &amp; Telp 1:</span>
                            <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener" class="text-decoration-none text-light opacity-90" style="color:inherit;" title="Hubungi via WhatsApp">
                                {{ $site['whatsapp_display'] }}
                            </a>
                        </div>
                    </div>
                    <div class="law-footer-contact-item">
                        <i class="fa-solid fa-phone text-gold"></i>
                        <div>
                            <span class="d-block text-muted" style="font-size:0.75rem;">Telepon Kantor 2:</span>
                            <a href="tel:{{ preg_replace('/[^0-9]/', '', $site['phone_2'] ?? '085771633860') }}" class="text-decoration-none text-light opacity-90" style="color:inherit;" title="Hubungi via Telepon">
                                {{ $site['phone_2'] ?? '0857-7163-3860' }}
                            </a>
                        </div>
                    </div>
                    <div class="law-footer-contact-item">
                        <i class="fa-regular fa-clock"></i>
                        <span>{{ $site['hours'] ?? 'Senin – Sabtu, 08:00 – 17:30 WIB' }}</span>
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

    {{-- Local SEO Keyword Coverage Strip --}}
    <div class="law-footer-seo-strip">
        <div class="container">
            <div class="row align-items-center g-2 text-white-50">
                <div class="col-12">
                    <strong class="text-gold-light me-1"><i class="fa-solid fa-scale-balanced me-1"></i>Pengacara di Tangerang:</strong>
                    <span class="opacity-90">Kantor Advokat &amp; Pengacara melayani Kota Tangerang, Tangerang Selatan (Tangsel), BSD City, Gading Serpong, Alam Sutera, Karawaci, Bintaro, Periuk, Cikokol, Ciputat, Pamulang, Tigaraksa, Kab. Tangerang.</span>
                </div>
                <div class="col-12">
                    <strong class="text-gold-light me-1"><i class="fa-solid fa-landmark me-1"></i>Pengacara di Bogor:</strong>
                    <span class="opacity-90">Kantor Advokat &amp; Pengacara melayani Kota Bogor, Kab. Bogor, Cibinong, Sentul City, Bojonggede, Parung, Cileungsi, dan seluruh Jabodetabek.</span>
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
