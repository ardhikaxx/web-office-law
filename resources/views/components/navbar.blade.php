@php
    use Illuminate\Support\Facades\Route;

    $links = [
        [
            'label' => 'Beranda',
            'route' => 'home',
            'icon' => 'fa-solid fa-landmark',
            'sub' => 'Halaman utama kantor hukum',
        ],
        [
            'label' => 'Tentang Kami',
            'route' => 'about',
            'icon' => 'fa-solid fa-scale-balanced',
            'sub' => 'Profil firma, visi misi & integritas',
        ],
        [
            'label' => 'Layanan',
            'route' => 'services.index',
            'icon' => 'fa-solid fa-briefcase',
            'sub' => 'Perdata, pidana, sengketa & korporasi',
        ],
        [
            'label' => 'Area Praktik',
            'route' => 'practice-areas.index',
            'icon' => 'fa-solid fa-gavel',
            'sub' => 'Litigasi peradilan & non-litigasi',
        ],
        [
            'label' => 'Tim Kami',
            'route' => 'lawyers.index',
            'icon' => 'fa-solid fa-user-tie',
            'sub' => 'Advokat & konsultan hukum resmi',
        ],
        [
            'label' => 'Kontak',
            'route' => 'contact',
            'icon' => 'fa-solid fa-envelope',
            'sub' => 'Kantor Tangerang & kantor Bogor',
        ],
    ];

    $isActive = function (string $route) {
        if ($route === 'home') {
            return request()->routeIs('home');
        }
        if ($route === 'services.index') {
            return request()->routeIs('services.*');
        }
        if ($route === 'practice-areas.index') {
            return request()->routeIs('practice-areas.*');
        }
        if ($route === 'lawyers.index') {
            return request()->routeIs('lawyers.*');
        }
        if ($route === 'contact') {
            return request()->routeIs('contact*');
        }

        return request()->routeIs($route);
    };
@endphp

<header class="law-header site-header sticky-top">
    {{-- Topbar --}}
    <div class="law-topbar topbar d-none d-lg-block">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-4">
                <span title="Kantor 1: Aspol Panaragan Kidul, Kota Bogor | Kantor 2: Villa Grand Tomang, Kota Tangerang">
                    <i class="fa-solid fa-location-dot me-2 text-gold"></i>Kota Bogor &amp; Kota Tangerang
                </span>
                <span>
                    <a href="mailto:{{ $site['email'] }}" class="text-decoration-none text-light opacity-90" style="color:inherit;">
                        <i class="fa-solid fa-envelope me-2 text-gold"></i>{{ $site['email'] }}
                    </a>
                </span>
                <span>
                    <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener" class="text-decoration-none text-light opacity-90" style="color:inherit;" title="Hubungi via WhatsApp">
                        <i class="fa-brands fa-whatsapp me-2 text-gold"></i>{{ $site['whatsapp_display'] }}
                    </a>
                </span>
            </div>
            <div class="d-flex align-items-center gap-3">
                <span>
                    <i class="fa-regular fa-clock me-2"></i>{{ $site['hours'] ?? 'Senin – Sabtu, 08:00 – 17:30 WIB' }}
                </span>
            </div>
        </div>
    </div>

    {{-- Main Navbar --}}
    <nav class="navbar navbar-expand-lg law-navbar main-nav" aria-label="Navigasi utama">
        <div class="container">
            {{-- Brand with Official Logo Asset --}}
            <a class="navbar-brand law-brand brand" href="{{ route('home') }}" aria-label="Holong Siregar &amp; Co. Law Office">
                <img src="{{ asset('assets/images/logo.png') }}"
                     alt="Logo Holong Siregar &amp; Co."
                     class="law-brand-symbol rounded-circle rounded-full"
                     width="48"
                     height="48"
                     loading="eager">
                <div class="law-brand-titles">
                    <span class="law-brand-name">
                        Holong Siregar <span>&amp; Co.</span>
                    </span>
                    <span class="law-brand-sub">LAW OFFICE</span>
                </div>
            </a>

            {{-- Hamburger Toggler for Mobile --}}
            <button class="navbar-toggler law-navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#mainNavbar"
                    aria-controls="mainNavbar"
                    aria-expanded="false"
                    aria-label="Buka navigasi menu">
                <i class="fa-solid fa-bars"></i>
            </button>

            {{-- Navigation Items --}}
            <div class="collapse navbar-collapse law-navbar-collapse" id="mainNavbar">
                {{-- Mobile Menu Header --}}
                <div class="d-lg-none mb-3 d-flex align-items-center justify-content-between pb-2 border-bottom">
                    <span class="law-mobile-nav-badge mb-0">
                        <i class="fa-solid fa-scale-balanced text-gold"></i>
                        MENU NAVIGASI
                    </span>
                    <span class="small text-muted" style="font-size: 0.75rem;">
                        Holong Siregar &amp; Co.
                    </span>
                </div>

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                    @foreach ($links as $link)
                        <li class="nav-item">
                            <a class="nav-link {{ $isActive($link['route']) ? 'active' : '' }}"
                               @if ($isActive($link['route'])) aria-current="page" @endif
                               href="{{ route($link['route']) }}">
                                <div class="d-flex align-items-center gap-3">
                                    <span class="law-nav-icon d-lg-none" aria-hidden="true">
                                        <i class="{{ $link['icon'] }}"></i>
                                    </span>
                                    <div>
                                        <span class="law-nav-label">{{ $link['label'] }}</span>
                                        <small class="law-nav-sub d-block d-lg-none">{{ $link['sub'] }}</small>
                                    </div>
                                </div>
                                <i class="fa-solid fa-chevron-right law-nav-chevron d-lg-none" aria-hidden="true"></i>
                            </a>
                        </li>
                    @endforeach

                    {{-- Desktop CTA Button --}}
                    <li class="nav-item ms-lg-3 mt-3 mt-lg-0 d-none d-lg-block">
                        <a class="btn btn-gold law-btn-primary" href="{{ route('contact') }}">
                            <i class="fa-solid fa-comments me-1"></i> Konsultasi Sekarang
                        </a>
                    </li>
                </ul>

                {{-- Mobile Actions & Quick Office Info --}}
                <div class="law-mobile-nav-actions d-lg-none">
                    <a class="btn btn-gold law-btn-primary w-100" href="{{ route('contact') }}">
                        <i class="fa-solid fa-calendar-check me-2"></i> Jadwalkan Konsultasi
                    </a>
                    <a class="btn btn-outline-success w-100 fw-bold" href="{{ $whatsappUrl }}" target="_blank" rel="noopener">
                        <i class="fa-brands fa-whatsapp me-2 fs-5"></i> Chat via WhatsApp
                    </a>

                    <div class="law-mobile-nav-footer mt-2">
                        <div class="d-flex align-items-center gap-2">
                            <i class="fa-solid fa-location-dot"></i>
                            <span><strong>Kantor Tangerang:</strong> Villa Grand Tomang</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="fa-solid fa-location-dot"></i>
                            <span><strong>Kantor Bogor:</strong> Aspol Panaragan Kidul</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="fa-regular fa-clock"></i>
                            <span>Senin – Sabtu, 08:00 – 17:30 WIB</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
