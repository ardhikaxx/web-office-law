@php
    use Illuminate\Support\Facades\Route;

    $links = [
        ['label' => 'Beranda', 'route' => 'home'],
        ['label' => 'Tentang Kami', 'route' => 'about'],
        ['label' => 'Layanan', 'route' => 'services.index'],
        ['label' => 'Area Praktik', 'route' => 'practice-areas.index'],
        ['label' => 'Tim Kami', 'route' => 'lawyers.index'],
        ['label' => 'Kontak', 'route' => 'contact'],
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
                <span>
                    <i class="fa-solid fa-location-dot me-2"></i>{{ $site['address'] ?? '[Alamat Kantor]' }}, {{ $site['city'] ?? '' }}
                </span>
                <span>
                    <i class="fa-solid fa-envelope me-2"></i>{{ $site['email'] ?? '[Email Resmi]' }}
                </span>
                <span>
                    <i class="fa-solid fa-phone me-2"></i>{{ $site['whatsapp_display'] ?? '' }}
                </span>
            </div>
            <div class="d-flex align-items-center gap-3">
                <span>
                    <i class="fa-regular fa-clock me-2"></i>{{ $site['hours'] ?? 'Senin – Jumat: 09.00 – 17.00 WIB' }}
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
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                    @foreach ($links as $link)
                        <li class="nav-item">
                            <a class="nav-link {{ $isActive($link['route']) ? 'active' : '' }}"
                               @if ($isActive($link['route'])) aria-current="page" @endif
                               href="{{ route($link['route']) }}">
                                {{ $link['label'] }}
                            </a>
                        </li>
                    @endforeach
                    <li class="nav-item ms-lg-3 mt-3 mt-lg-0">
                        <a class="btn btn-gold law-btn-primary" href="{{ route('contact') }}">
                            <i class="fa-solid fa-comments me-1"></i> Konsultasi Sekarang
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
