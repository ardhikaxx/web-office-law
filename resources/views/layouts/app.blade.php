<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Pengacara di Tangerang & Bogor | Kantor Hukum & Advokat Holong Siregar & Co.')</title>
    <meta name="description" content="@yield('meta_description', 'Mencari pengacara di Tangerang & Bogor? Holong Siregar & Co. Law Office menyediakan jasa advokat profesional untuk perdata, pidana, perceraian, sengketa tanah, kontrak bisnis, dan hukum perusahaan di Kota Tangerang, BSD, Tangsel & Bogor.')">
    <meta name="keywords" content="@yield('meta_keywords', 'pengacara di tangerang, pengacara tangerang, advokat tangerang, kantor hukum tangerang, pengacara terbaik di tangerang, pengacara terbaik tangerang, jasa pengacara tangerang, kantor advokat tangerang, konsultan hukum tangerang, lawyer tangerang, law firm tangerang, pengacara bsd, pengacara serpong, pengacara gading serpong, pengacara alam sutera, pengacara karawaci, pengacara bintaro, pengacara tangerang selatan, pengacara tangsel, pengacara kota tangerang, pengacara kabupaten tangerang, pengacara periuk, pengacara cikokol, pengacara ciputat, pengacara pamulang, pengacara perceraian tangerang, pengacara perdata tangerang, pengacara pidana tangerang, pengacara sengketa tanah tangerang, pengacara perusahaan tangerang, corporate lawyer tangerang, pengacara hutang piutang tangerang, pengacara waris tangerang, konsultasi hukum tangerang, biaya pengacara tangerang, nomor telepon pengacara tangerang, cari pengacara di tangerang, pengacara pengadilan negeri tangerang, pengacara pengadilan agama tangerang, pengacara di bogor, pengacara bogor, kantor hukum bogor, advokat bogor, holong siregar, holong siregar and co, holong siregar law office')">
    <meta name="author" content="Holong Siregar & Co. Law Office">
    <meta name="robots" content="@yield('meta_robots', 'index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1')">
    <meta name="googlebot" content="@yield('meta_robots', 'index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1')">
    <meta name="bingbot" content="@yield('meta_robots', 'index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1')">

    {{-- Geo Meta Tags (Local SEO Tangerang & Bogor) --}}
    <meta name="geo.region" content="ID-BT;ID-JB">
    <meta name="geo.placename" content="Kota Tangerang, Tangerang Selatan, BSD City, Kota Bogor, Banten, Jawa Barat, Indonesia">
    <meta name="geo.position" content="-6.178306;106.631889">
    <meta name="ICBM" content="-6.178306, 106.631889">

    <link rel="canonical" href="@yield('canonical', url()->current())">

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website">
    <meta property="og:locale" content="id_ID">
    <meta property="og:site_name" content="Holong Siregar & Co. Law Office">
    <meta property="og:title" content="@yield('og_title', trim($__env->yieldContent('title', 'Pengacara di Tangerang & Bogor | Kantor Hukum & Advokat Holong Siregar & Co.')))">
    <meta property="og:description" content="@yield('meta_description', 'Kantor hukum dan advokat pengacara profesional di Tangerang & Bogor. Menangani perkara perdata, pidana, perceraian, sengketa bisnis, dan kontrak.')">
    <meta property="og:url" content="@yield('canonical', url()->current())">
    <meta property="og:image" content="@yield('og_image', asset('assets/images/logo.png'))">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:alt" content="Logo Resmi Holong Siregar & Co. Law Office - Pengacara Tangerang & Bogor">

    {{-- Twitter Cards --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Pengacara di Tangerang & Bogor | Kantor Hukum & Advokat Holong Siregar & Co.')">
    <meta name="twitter:description" content="@yield('meta_description', 'Kantor hukum dan advokat pengacara profesional di Tangerang & Bogor.')">
    <meta name="twitter:image" content="@yield('og_image', asset('assets/images/logo.png'))">

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
          "name": "Holong Siregar & Co. Law Office - Pengacara di Tangerang & Bogor",
          "alternateName": [
            "Pengacara di Tangerang",
            "Pengacara Tangerang",
            "Kantor Hukum Tangerang",
            "Advokat Tangerang",
            "Holong Siregar & Co."
          ],
          "url": "{{ url('/') }}",
          "logo": {
            "@@type": "ImageObject",
            "@@id": "{{ url('/') }}#logo",
            "url": "{{ asset('assets/images/logo.png') }}",
            "caption": "Holong Siregar & Co. Law Office"
          },
          "image": "{{ asset('assets/images/logo.png') }}",
          "description": "Kantor hukum dan advokat pengacara profesional terpercaya di Kota Tangerang dan Kota Bogor. Memberikan layanan litigasi dan non-litigasi untuk perdata, pidana, sengketa tanah, perceraian, kontrak bisnis, hukum korporasi, dan recovery asset di wilayah Tangerang Raya (Kota Tangerang, BSD, Serpong, Karawaci, Alam Sutera, Tangsel) dan Bogor.",
          "telephone": ["+6281318841961", "+6285771633860"],
          "email": "lawofficeholongsiregar@gmail.com",
          "priceRange": "$$",
          "currenciesAccepted": "IDR",
          "keywords": "pengacara di tangerang, pengacara tangerang, advokat tangerang, kantor hukum tangerang, pengacara terbaik tangerang, pengacara bsd, pengacara serpong, pengacara tangerang selatan, pengacara perdata tangerang, pengacara pidana tangerang, pengacara perceraian tangerang, pengacara bogor",
          "knowsAbout": [
            "Hukum Perdata",
            "Hukum Pidana",
            "Pengacara di Tangerang",
            "Advokat Tangerang",
            "Sengketa Tanah dan Properti",
            "Perceraian dan Hukum Keluarga",
            "Penyusunan Kontrak Bisnis",
            "Hukum Perusahaan dan Korporasi",
            "Litigasi Pengadilan Negeri Tangerang"
          ],
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
              "streetAddress": "Villa Grand Tomang, Periuk",
              "addressLocality": "Kota Tangerang",
              "addressRegion": "Banten",
              "postalCode": "15131",
              "addressCountry": "ID"
            },
            {
              "@@type": "PostalAddress",
              "streetAddress": "Aspol Panaragan Kidul RT/RW: 04/04, Kec. Bogor Tengah",
              "addressLocality": "Kota Bogor",
              "addressRegion": "Jawa Barat",
              "postalCode": "16125",
              "addressCountry": "ID"
            }
          ],
          "geo": [
            {
              "@@type": "GeoCoordinates",
              "latitude": -6.178306,
              "longitude": 106.631889
            },
            {
              "@@type": "GeoCoordinates",
              "latitude": -6.595038,
              "longitude": 106.790650
            }
          ],
          "areaServed": [
            { "@@type": "City", "name": "Kota Tangerang" },
            { "@@type": "City", "name": "Kota Tangerang Selatan" },
            { "@@type": "AdministrativeArea", "name": "BSD City" },
            { "@@type": "AdministrativeArea", "name": "Gading Serpong" },
            { "@@type": "AdministrativeArea", "name": "Alam Sutera" },
            { "@@type": "AdministrativeArea", "name": "Lippo Karawaci" },
            { "@@type": "AdministrativeArea", "name": "Periuk" },
            { "@@type": "AdministrativeArea", "name": "Kabupaten Tangerang" },
            { "@@type": "City", "name": "Kota Bogor" },
            { "@@type": "AdministrativeArea", "name": "Kabupaten Bogor" },
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
            "name": "Layanan Pengacara Tangerang & Bogor",
            "itemListElement": [
              {
                "@@type": "Offer",
                "itemOffered": {
                  "@@type": "Service",
                  "name": "Pengacara Perdata Tangerang & Bogor",
                  "description": "Pendampingan sengketa perdata, wanprestasi kontrak bisnis, ganti rugi, dan perbuatan melawan hukum."
                }
              },
              {
                "@@type": "Offer",
                "itemOffered": {
                  "@@type": "Service",
                  "name": "Pengacara Pidana Tangerang & Bogor",
                  "description": "Pendampingan penyelidikan kepolisian (Polres Metro Tangerang Kota / Polresta Bogor), kejaksaan, dan persidangan perkara pidana."
                }
              },
              {
                "@@type": "Offer",
                "itemOffered": {
                  "@@type": "Service",
                  "name": "Legal Contract & Review Kontrak",
                  "description": "Penyusunan, telaah, dan mitigasi risiko klausul kontrak bisnis dan kerja sama komersial perusahaan."
                }
              },
              {
                "@@type": "Offer",
                "itemOffered": {
                  "@@type": "Service",
                  "name": "Pengacara Perceraian & Hukum Keluarga",
                  "description": "Penanganan sengketa waris, perkawinan, gugatan perceraian di PA Tangerang/Bogor, hak asuh anak, dan harta bersama."
                }
              },
              {
                "@@type": "Offer",
                "itemOffered": {
                  "@@type": "Service",
                  "name": "Pengacara Perusahaan & Korporasi",
                  "description": "Konsultasi kepatuhan korporasi, legalitas usaha, ketenagakerjaan, merger, dan sengketa kepemilikan saham di Tangerang & Bogor."
                }
              },
              {
                "@@type": "Offer",
                "itemOffered": {
                  "@@type": "Service",
                  "name": "Konsultasi Hukum Online & Langsung",
                  "description": "Konsultasi hukum komprehensif, opini hukum (legal opinion), dan analisis risiko sebelum langkah hukum diambil."
                }
              },
              {
                "@@type": "Offer",
                "itemOffered": {
                  "@@type": "Service",
                  "name": "Recovery Asset & Sengketa Properti",
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
          "description": "Kantor Hukum & Pengacara di Tangerang dan Bogor Terpercaya",
          "publisher": { "@@id": "{{ url('/') }}#organization" },
          "inLanguage": "id-ID"
        }
      ]
    }
    </script>
    @stack('schema_extra')

    {{-- Fonts: Playfair Display (Headings) + Plus Jakarta Sans (Body) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;0,800;1,500;1,700&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

    {{-- Bootstrap 5.3 CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- Font Awesome 6 --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" referrerpolicy="no-referrer">
    {{-- Custom Design System --}}
    <link href="{{ asset('assets/css/style.css') }}?v={{ filemtime(public_path('assets/css/style.css')) }}" rel="stylesheet">

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
    <script src="{{ asset('assets/js/app.js') }}?v={{ filemtime(public_path('assets/js/app.js')) }}"></script>

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
