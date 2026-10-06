@php
    use Illuminate\Support\Facades\Route;

    $links = [
        ['label' => 'Beranda', 'route' => 'home'],
        ['label' => 'Tentang Kami', 'route' => 'about'],
        ['label' => 'Layanan Hukum', 'route' => 'services.index'],
        ['label' => 'Area Praktik', 'route' => 'practice-areas.index'],
        ['label' => 'Tim Kami', 'route' => 'lawyers.index'],
        ['label' => 'Artikel', 'route' => 'articles.index'],
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
        if ($route === 'articles.index') {
            return request()->routeIs('articles.*');
        }
        if ($route === 'contact') {
            return request()->routeIs('contact*');
        }

        return request()->routeIs($route);
    };
@endphp

<header class="site-header sticky-top">
    <div class="topbar d-none d-lg-block">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex gap-4">
                <span><i class="fa-solid fa-envelope me-2"></i>{{ $site['email'] ?? '[Email Resmi]' }}</span>
                <span><i class="fa-solid fa-phone me-2"></i>{{ $site['whatsapp_display'] ?? '' }}</span>
            </div>
            <div class="d-flex gap-3 align-items-center">
                <span><i class="fa-regular fa-clock me-2"></i>{{ $site['hours'] ?? '' }}</span>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light main-nav" aria-label="Navigasi utama">
        <div class="container">
            <a class="navbar-brand brand" href="{{ route('home') }}">
                <span class="brand-mark" aria-hidden="true">HS</span>
                <span class="brand-text">
                    <strong>Holong Siregar <span class="text-gold">&amp; Co.</span></strong>
                    <small>LAW OFFICE</small>
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                aria-controls="mainNavbar" aria-expanded="false" aria-label="Buka menu navigasi">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                    @foreach ($links as $link)
                        <li class="nav-item">
                            <a class="nav-link {{ $isActive($link['route']) ? 'active' : '' }}"
                                @if ($isActive($link['route'])) aria-current="page" @endif
                                href="{{ route($link['route']) }}">{{ $link['label'] }}</a>
                        </li>
                    @endforeach
                    <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                        <a class="btn btn-gold" href="{{ route('contact') }}">
                            Konsultasi Sekarang
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
