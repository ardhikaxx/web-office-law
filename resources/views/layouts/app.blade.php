<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Holong Siregar & Co. Law Office | Pendampingan Hukum Profesional')</title>
    <meta name="description" content="@yield('meta_description', 'Holong Siregar & Co. Law Office memberikan pendampingan hukum profesional melalui analisis yang cermat, strategi yang relevan, serta komunikasi yang bertanggung jawab.')">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Holong Siregar & Co. Law Office">
    <meta property="og:title" content="@yield('og_title', trim($__env->yieldContent('title', 'Holong Siregar & Co. Law Office'))) ">
    <meta property="og:description" content="@yield('meta_description', 'Pendampingan hukum profesional: perdata, pidana, kontrak, korporasi, ketenagakerjaan, keluarga, dan pertanahan.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/images/og-cover.svg') }}">
    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Holong Siregar & Co. Law Office')">
    <meta name="twitter:description" content="@yield('meta_description', 'Pendampingan hukum profesional yang tegas, terukur, dan terpercaya.')">

    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/images/favicon.svg') }}">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

    {{-- Bootstrap 5.3 CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- Font Awesome 6 --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" referrerpolicy="no-referrer">
    {{-- Custom --}}
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    @stack('styles')
</head>
<body>
    <a class="skip-link" href="#main-content">Lewati ke konten utama</a>

    <x-navbar />

    <main id="main-content">
        @yield('content')
    </main>

    <x-footer />

    <x-whatsapp-float />

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    {{-- SweetAlert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

    @if (session('consultation_success'))
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                Swal.fire({
                    icon: 'success',
                    title: 'Permintaan Terkirim',
                    text: @json(session('consultation_success')),
                    confirmButtonText: 'Tutup',
                    confirmButtonColor: '#0f2a44'
                });
            });
        </script>
    @endif

    @if ($errors->any() && request()->routeIs('contact*'))
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Formulir Belum Lengkap',
                    text: 'Mohon periksa kembali isian formulir konsultasi Anda.',
                    confirmButtonText: 'Periksa Kembali',
                    confirmButtonColor: '#0f2a44'
                });
            });
        </script>
    @endif

    @stack('scripts')
</body>
</html>
