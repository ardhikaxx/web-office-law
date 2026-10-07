<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Holong Siregar & Co. Law Office | Kantor Hukum & Advokat Pengacara Bogor & Tangerang')</title>
    <meta name="description" content="@yield('meta_description', 'Holong Siregar & Co. Law Office adalah kantor hukum dan advokat pengacara profesional di Bogor dan Tangerang. Menangani perdata, pidana, legal contract, hukum keluarga, sengketa bisnis, dan konsultasi hukum.')">
    <meta name="keywords" content="@yield('meta_keywords', 'kantor hukum bogor, advokat bogor, pengacara bogor, kantor hukum tangerang, advokat tangerang, pengacara tangerang, holong siregar, holong siregar and co, jasa hukum bogor, konsultan hukum tangerang, pengacara perdata, pengacara pidana, hukum keluarga, perceraian, kontrak bisnis, recovery asset, legal corporate jabodetabek')">
    <meta name="author" content="Holong Siregar & Co. Law Office">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">

    {{-- Geo Meta Tags (Local SEO Bogor & Tangerang) --}}
    <meta name="geo.region" content="ID-JB;ID-BT">
    <meta name="geo.placename" content="Kota Bogor; Kota Tangerang">
    <meta name="geo.position" content="-6.595038;106.790650">
    <meta name="ICBM" content="-6.595038, 106.790650">

    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website">
    <meta property="og:locale" content="id_ID">
    <meta property="og:site_name" content="Holong Siregar & Co. Law Office">
    <meta property="og:title" content="@yield('og_title', trim($__env->yieldContent('title', 'Holong Siregar & Co. Law Office | Kantor Hukum Bogor & Tangerang')))">
    <meta property="og:description" content="@yield('meta_description', 'Holong Siregar & Co. Law Office adalah kantor hukum dan advokat pengacara profesional di Bogor & Tangerang. Menangani perdata, pidana, kontrak, hukum keluarga, dan sengketa bisnis.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/images/logo.png') }}">
    <meta property="og:image:alt" content="Logo Resmi Holong Siregar & Co. Law Office">

    {{-- Twitter Cards --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Holong Siregar & Co. Law Office | Kantor Hukum Bogor & Tangerang')">
    <meta name="twitter:description" content="@yield('meta_description', 'Kantor hukum dan advokat pengacara profesional di Bogor & Tangerang.')">
    <meta name="twitter:image" content="{{ asset('assets/images/logo.png') }}">

    {{-- Browser Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/logo.png') }}">

    {{-- Schema.org Structured Data (JSON-LD) for Google Rich Snippets & Local Search --}}
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@graph": [
        {
          "@@type": ["LegalService", "Attorney"],
          "@@id": "{{ url('/') }}#organization",
          "name": "Holong Siregar & Co. Law Office",
          "alternateName": "Holong Siregar & Co.",
          "url": "{{ url('/') }}",
          "logo": {
            "@@type": "ImageObject",
            "@@id": "{{ url('/') }}#logo",
            "url": "{{ asset('assets/images/logo.png') }}",
            "caption": "Holong Siregar & Co. Law Office"
          },
          "image": "{{ asset('assets/images/logo.png') }}",
          "description": "Kantor hukum dan advokat pengacara profesional di Kota Bogor dan Kota Tangerang. Memberikan pendampingan litigasi dan non-litigasi untuk perdata, pidana, legal contract, hukum keluarga, hukum korporasi, dan recovery asset.",
          "telephone": "+6285771633860",
          "email": "lawofficeholongsiregar@gmail.com",
          "priceRange": "$$",
          "currenciesAccepted": "IDR",
          "openingHoursSpecification": [
            {
              "@@type": "OpeningHoursSpecification",
              "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
              "opens": "08:00",
              "closes": "17:30"
            }
          ],
          "address": [
            {
              "@@type": "PostalAddress",
              "streetAddress": "Aspol Panaragan Kidul RT/RW: 04/04, Kec. Bogor Tengah",
              "addressLocality": "Kota Bogor",
              "addressRegion": "Jawa Barat",
              "addressCountry": "ID"
            },
            {
              "@@type": "PostalAddress",
              "streetAddress": "Villa Grand Tomang, Periuk",
              "addressLocality": "Kota Tangerang",
              "addressRegion": "Banten",
              "addressCountry": "ID"
            }
          ],
          "areaServed": [
            { "@@type": "City", "name": "Kota Bogor" },
            { "@@type": "City", "name": "Kota Tangerang" },
            { "@@type": "AdministrativeArea", "name": "Jabodetabek" },
            { "@@type": "Country", "name": "Indonesia" }
          ],
          "founder": {
            "@@type": "Person",
            "name": "Holong Siregar, S.H.",
            "jobTitle": "Managing Partner & Advokat",
            "worksFor": { "@@id": "{{ url('/') }}#organization" }
          },
          "hasOfferCatalog": {
            "@@type": "OfferCatalog",
            "name": "Layanan Hukum Holong Siregar & Co.",
            "itemListElement": [
              {
                "@@type": "Offer",
                "itemOffered": {
                  "@@type": "Service",
                  "name": "Perdata Umum & Khusus",
                  "description": "Pendampingan dan penyelesaian sengketa perdata, wanprestasi, ganti rugi, dan perbuatan melawan hukum."
                }
              },
              {
                "@@type": "Offer",
                "itemOffered": {
                  "@@type": "Service",
                  "name": "Pidana Umum & Khusus",
                  "description": "Pendampingan proses penyelidikan, penyidikan kepolisian, kejaksaan, dan persidangan perkara pidana."
                }
              },
              {
                "@@type": "Offer",
                "itemOffered": {
                  "@@type": "Service",
                  "name": "Legal Contract & Review Contract",
                  "description": "Penyusunan, telaah, dan mitigasi risiko klausul kontrak bisnis dan kerja sama komersial."
                }
              },
              {
                "@@type": "Offer",
                "itemOffered": {
                  "@@type": "Service",
                  "name": "Hukum Keluarga & Perceraian",
                  "description": "Penanganan sengketa waris, perkawinan, perceraian, hak asuh anak, dan pembagian harta bersama."
                }
              },
              {
                "@@type": "Offer",
                "itemOffered": {
                  "@@type": "Service",
                  "name": "Hukum Perusahaan",
                  "description": "Konsultasi kepatuhan korporasi, legalitas usaha, ketenagakerjaan, merger, dan sengketa kepemilikan saham."
                }
              },
              {
                "@@type": "Offer",
                "itemOffered": {
                  "@@type": "Service",
                  "name": "Legal Konsultasi",
                  "description": "Konsultasi hukum komprehensif, opini hukum (legal opinion), dan analisis risiko sebelum langkah hukum diambil."
                }
              },
              {
                "@@type": "Offer",
                "itemOffered": {
                  "@@type": "Service",
                  "name": "Recovery Asset",
                  "description": "Upaya penelusuran, pengamanan, dan pemulihan aset hak klien melalui jalur hukum yang sah."
                }
              }
            ]
          }
        },
        {
          "@@type": "WebSite",
          "@@id": "{{ url('/') }}#website",
          "url": "{{ url('/') }}",
          "name": "Holong Siregar & Co. Law Office",
          "description": "Kantor Hukum & Advokat Pengacara Profesional di Bogor dan Tangerang",
          "publisher": { "@@id": "{{ url('/') }}#organization" },
          "inLanguage": "id-ID"
        }
      ]
    }
    </script>

    {{-- Fonts: Playfair Display (Headings) + Plus Jakarta Sans (Body) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;0,800;1,500;1,700&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

    {{-- Bootstrap 5.3 CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- Font Awesome 6 --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" referrerpolicy="no-referrer">
    {{-- Custom Design System --}}
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
                @if (session('consultation_wa_url'))
                    Swal.fire({
                        icon: 'success',
                        title: 'Permintaan Konsultasi Diterima',
                        text: @json(session('consultation_success')),
                        showCancelButton: true,
                        confirmButtonText: '<i class="fa-brands fa-whatsapp me-1"></i> Teruskan ke WhatsApp',
                        cancelButtonText: 'Tutup',
                        confirmButtonColor: '#25D366',
                        cancelButtonColor: '#0c1f38',
                        iconColor: '#c59b27'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.open(@json(session('consultation_wa_url')), '_blank');
                        }
                    });
                @else
                    Swal.fire({
                        icon: 'success',
                        title: 'Permintaan Konsultasi Diterima',
                        text: @json(session('consultation_success')),
                        confirmButtonText: 'Baik, Terima Kasih',
                        confirmButtonColor: '#0c1f38',
                        iconColor: '#c59b27'
                    });
                @endif
            });
        </script>
    @endif

    @if ($errors->any())
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Formulir Belum Lengkap',
                    text: 'Mohon periksa kembali isian formulir konsultasi Anda.',
                    confirmButtonText: 'Periksa Kembali',
                    confirmButtonColor: '#0c1f38'
                });
            });
        </script>
    @endif

    @stack('scripts')
</body>
</html>
