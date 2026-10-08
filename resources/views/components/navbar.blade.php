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
                    <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener" class="text-decoration-none text-light opacity-90" style="color:inherit;" title="WhatsApp: {{ $site['whatsapp_display'] }}">
                        <i class="fa-brands fa-whatsapp me-2 text-gold"></i>{{ $site['whatsapp_display'] }}
                    </a>
                </span>
                <span>
                    <a href="tel:{{ preg_replace('/[^0-9]/', '', $site['phone_2'] ?? '085771633860') }}" class="text-decoration-none text-light opacity-90" style="color:inherit;" title="Telepon: {{ $site['phone_2'] ?? '0857-7163-3860' }}">
                        <i class="fa-solid fa-phone me-2 text-gold"></i>{{ $site['phone_2'] ?? '0857-7163-3860' }}
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

            {{-- Hamburger Toggler for Mobile (triggers offcanvas drawer from right) --}}
            <button class="navbar-toggler law-navbar-toggler d-lg-none"
                    type="button"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#mobileMenuDrawer"
                    aria-controls="mobileMenuDrawer"
                    aria-label="Buka navigasi menu">
                <i class="fa-solid fa-bars"></i>
            </button>

            {{-- Desktop Navigation (Clean & Horizontal on large screens) --}}
            <div class="d-none d-lg-flex align-items-center ms-auto">
                <ul class="navbar-nav align-items-center mb-0">
                    @foreach ($links as $link)
                        <li class="nav-item">
                            <a class="nav-link {{ $isActive($link['route']) ? 'active' : '' }}"
                               @if ($isActive($link['route'])) aria-current="page" @endif
                               href="{{ route($link['route']) }}">
                                {{ $link['label'] }}
                            </a>
                        </li>
                    @endforeach
                    <li class="nav-item ms-3">
                        <a class="btn btn-gold law-btn-primary" href="{{ route('contact') }}">
                            <i class="fa-solid fa-comments me-1"></i> Konsultasi Sekarang
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Mobile Offcanvas Drawer (Slides from Right with Thin Overlay) --}}
    <div class="offcanvas offcanvas-end law-mobile-drawer"
         tabindex="-1"
         id="mobileMenuDrawer"
         aria-labelledby="mobileMenuDrawerLabel">

        {{-- Drawer Header --}}
        <div class="offcanvas-header law-drawer-header">
            <div class="d-flex align-items-center gap-2" id="mobileMenuDrawerLabel">
                <img src="{{ asset('assets/images/logo.png') }}"
                     alt="Logo Holong Siregar &amp; Co."
                     class="rounded-circle"
                     width="38"
                     height="38">
                <div class="d-flex flex-column">
                    <span class="law-drawer-brand">Holong Siregar <span class="text-gold">&amp; Co.</span></span>
                    <span class="law-drawer-sub">LAW OFFICE</span>
                </div>
            </div>
            <button type="button" class="law-drawer-close" data-bs-dismiss="offcanvas" aria-label="Tutup navigasi">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>

        {{-- Drawer Body --}}
        <div class="offcanvas-body law-drawer-body">
            <div class="law-drawer-section-label">NAVIGASI UTAMA</div>

            <ul class="law-drawer-nav list-unstyled">
                @foreach ($links as $link)
                    <li>
                        <a class="law-drawer-link {{ $isActive($link['route']) ? 'active' : '' }}"
                           @if ($isActive($link['route'])) aria-current="page" @endif
                           href="{{ route($link['route']) }}">
                            <span class="law-drawer-link-icon">
                                <i class="{{ $link['icon'] }}"></i>
                            </span>
                            <span class="law-drawer-link-text">{{ $link['label'] }}</span>
                            @if ($isActive($link['route']))
                                <span class="law-drawer-active-dot" aria-hidden="true"></span>
                            @else
                                <i class="fa-solid fa-chevron-right law-drawer-link-arrow" aria-hidden="true"></i>
                            @endif
                        </a>
                    </li>
                @endforeach
            </ul>

            {{-- Simple & Modern Action Buttons & Quick Info --}}
            <div class="law-drawer-actions mt-auto pt-3">
                <div class="law-drawer-section-label mb-2">KONSULTASI HUKUM</div>
                <div class="d-flex flex-column gap-2 mb-3">
                    <a href="{{ route('contact') }}" class="btn btn-gold law-btn-primary w-100">
                        <i class="fa-solid fa-calendar-check me-2"></i> Jadwalkan Konsultasi
                    </a>
                    <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener" class="btn btn-outline-success w-100 fw-bold law-btn-wa-drawer">
                        <i class="fa-brands fa-whatsapp me-2 fs-5"></i> Chat via WhatsApp
                    </a>
                </div>

                <div class="law-drawer-info">
                    <div class="d-flex align-items-center gap-2 mb-1">
                        <i class="fa-solid fa-location-dot text-gold"></i>
                        <span>Kota Tangerang &amp; Kota Bogor</span>
                    </div>
                    <div class="d-flex align-items-center gap-2 mb-1">
                        <i class="fa-brands fa-whatsapp text-gold"></i>
                        <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener" class="text-decoration-none text-muted">
                            WA: {{ $site['whatsapp_display'] }}
                        </a>
                    </div>
                    <div class="d-flex align-items-center gap-2 mb-1">
                        <i class="fa-solid fa-phone text-gold"></i>
                        <a href="tel:{{ preg_replace('/[^0-9]/', '', $site['phone_2'] ?? '085771633860') }}" class="text-decoration-none text-muted">
                            Telp: {{ $site['phone_2'] ?? '0857-7163-3860' }}
                        </a>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <i class="fa-regular fa-clock text-gold"></i>
                        <span>Senin – Sabtu, 08:00 – 17:30 WIB</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
