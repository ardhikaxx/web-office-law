<footer class="site-footer">
    <div class="container">
        <div class="row g-4 py-5">
            <div class="col-lg-4 col-md-6">
                <div class="footer-brand d-flex align-items-center gap-2 mb-3">
                    <span class="brand-mark" aria-hidden="true">HS</span>
                    <span>
                        <strong class="d-block text-white">Holong Siregar &amp; Co.</strong>
                        <small class="text-gold tracking-wide">LAW OFFICE</small>
                    </span>
                </div>
                <p class="footer-desc">
                    Kantor hukum yang berkomitmen memberikan pendampingan dan solusi hukum
                    yang profesional, strategis, dan berintegritas.
                </p>
                <div class="footer-contact">
                    <p><i class="fa-solid fa-location-dot me-2 text-gold"></i>{{ $site['address'] ?? '[Alamat Kantor]' }}, {{ $site['city'] ?? '' }}</p>
                    <p><i class="fa-solid fa-envelope me-2 text-gold"></i>{{ $site['email'] ?? '' }}</p>
                    <p><i class="fa-brands fa-whatsapp me-2 text-gold"></i>{{ $site['whatsapp_display'] ?? '' }}</p>
                    <p><i class="fa-regular fa-clock me-2 text-gold"></i>{{ $site['hours'] ?? '' }}</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-6">
                <h3 class="footer-title">Navigasi</h3>
                <ul class="footer-links">
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                    <li><a href="{{ route('lawyers.index') }}">Tim Kami</a></li>
                    <li><a href="{{ route('articles.index') }}">Artikel</a></li>
                    <li><a href="{{ route('contact') }}">Kontak</a></li>
                    <li><a href="{{ route('faq') }}">FAQ</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 col-6">
                <h3 class="footer-title">Layanan</h3>
                <ul class="footer-links">
                    @foreach (array_slice(config('lawfirm.services', []), 0, 6) as $service)
                        <li><a href="{{ route('services.show', $service['slug']) }}">{{ $service['title'] }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="col-lg-3 col-md-6">
                <h3 class="footer-title">Area Praktik</h3>
                <ul class="footer-links">
                    @foreach (config('lawfirm.practice_areas', []) as $area)
                        <li><a href="{{ route('practice-areas.show', $area['slug']) }}">{{ $area['title'] }}</a></li>
                    @endforeach
                </ul>
                <h3 class="footer-title mt-4">Informasi Legal</h3>
                <ul class="footer-links">
                    <li><a href="{{ route('disclaimer') }}">Disclaimer</a></li>
                    <li><a href="{{ route('privacy') }}">Kebijakan Privasi</a></li>
                    <li><a href="{{ route('terms') }}">Syarat &amp; Ketentuan</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
            <small>&copy; {{ date('Y') }} Holong Siregar &amp; Co. Law Office. Seluruh hak cipta dilindungi.</small>
            <small class="footer-note">Informasi pada website ini bersifat umum dan bukan nasihat hukum individual.</small>
        </div>
    </div>
</footer>
