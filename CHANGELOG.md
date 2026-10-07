# 📋 Changelog

Seluruh pembaruan penting dan riwayat evolusi platform website **Holong Siregar & Co. Law Office** didokumentasikan dalam file ini.

Format pencatatan mengacu pada [Keep a Changelog](https://keepachangelog.com/id/1.0.0/) dan mematuhi standar [Semantic Versioning (SemVer)](https://semver.org/).

---

## [1.1.0] - 2026-10-08

### 🚀 Optimasi SEO Menyeluruh Tangerang, Topical Authority, & Pengujian Otomatis
Pembaruan skala penuh untuk memaksimalkan visibilitas organik Google pada pencarian wilayah Tangerang Raya dan sekitarnya tanpa mengubah esensi tata letak visual utama.

### ✨ Added (Fitur Baru)
- **Topical Authority 14 Layanan Hukum Spesifik**:
  - Implementasi 14 halaman landing page terdedikasi di bawah rute `/layanan-hukum/{slug}`.
  - Setiap halaman memiliki H1 unik, meta title & description teroptimasi, alur kerja perkara komprehensif, daftar manfaat hukum, FAQ terkurasi, dan CTA konsultasi WhatsApp langsung.
- **Landing Page Otoritas Lokal Tangerang (`/wilayah-layanan/pengacara-tangerang`)**:
  - Halaman otoritas komprehensif untuk menargetkan kata kunci lokal bernilai tinggi (*pengacara tangerang, advokat tangerang, kantor hukum tangerang, konsultasi hukum tangerang*).
  - Memuat pemetaan yurisdiksi peradilan nyata: **Pengadilan Negeri Tangerang Kelas 1A Khusus**, Pengadilan Agama Tangerang, dan PTUN Serang.
  - Informasi transparansi model honorarium advokat (*retainer, lump-sum, success fee*) dan FAQ hukum lokal Tangerang.
- **Profil Advokat & Kredensial PERADI (`/advokat/holong-siregar`)**:
  - Halaman profil resmi Managing Partner: **Holong Siregar, S.H., M.H.**
  - Verifikasi Nomor Induk Advokat PERADI B-02.10984, latar belakang pendidikan Fakultas Hukum Universitas Indonesia, dan rekam jejak litigasi 15+ tahun guna memenuhi pedoman Google E-E-A-T.
- **Generator Schema.org JSON-LD Terstruktur (`App\Support\Seo`)**:
  - Multi-Office `LegalService` & `Attorney` mencakup Kantor Utama Bogor & Kantor Perwakilan Tangerang.
  - Skema `Person` untuk profil advokat, `BreadcrumbList` untuk navigasi mesin pencari, dan `FAQPage` untuk meraih *Google Rich Snippets / People Also Ask*.
- **Dynamic XML Sitemap & Search Directives**:
  - Endpoint `/sitemap.xml` dinamis dengan prioritas, frekuensi perubahan, dan tanggal pembaruan otomatis.
  - Endpoint `/robots.txt` teroptimasi untuk mengarahkan bot perayap mesin pencari ke sitemap sekaligus memblokir direktori privat.
- **Proteksi Rate Limiting Konsultasi**:
  - Integrasi middleware `throttle:consultation` pada rute formulir konsultasi (maksimal 3 submit per 10 menit per IP) guna mencegah serangan bot spam WhatsApp.
- **Rangkaian Pengujian Otomatis Pest (100% Passing)**:
  - 23 Feature Test dengan 357 assertion di `tests/Feature/SeoOptimizationTest.php` yang memverifikasi kode status HTTP 200, panjang meta tag, kanonikal, OG tags, JSON-LD, XML sitemap, throttling, dan penanganan error 404.
- **Paket Dokumentasi Komprehensif & QRIS Donasi**:
  - Penambahan `README.md` terstruktur, `DOKUMENTASI.md`, `SUPPORT.md`, `CONTRIBUTING.md`, `SECURITY.md`, `CODE_OF_CONDUCT.md`, `CITATION.md`, `LICENSE`, serta integrasi visual QRIS donasi sukarela (`qris.png`).

### 🎨 Changed (Penyempurnaan Tampilan & Antarmuka)
- **Hero Image Accessibility**: Menyesuaikan kegelapan siluet Lady Justice pada `public/assets/images/hero-office.svg` agar kontras teks memenuhi standar aksesibilitas WCAG AA.
- **Penyeragaman Tombol CTA Hero**: Menstandarkan ukuran tombol aksi utama dan pelengkap pada hero section serta menerapkan teks putih berpadu emas untuk visibilitas optimal.
- **Penyederhanaan Efek Hover Card Praktik**: Memperbaiki animasi hover pada kartu Ruang Lingkup Praktik menjadi transisi elevasi yang lebih tenang, elegan, dan minimalis.

---

## [1.0.0] - 2026-10-02

### 🏛️ Rilis Arsitektur Perdana (Initial Release)
Dikembangkan oleh **Yanuar Ardhika Rahmadhani Ubaidillah (@ardhikaxx)**.

### ✨ Added (Fitur Awal)
- **Arsitektur Zero-Database**:
  - Pengelolaan data kantor hukum berbasis memori dan konfigurasi statis (`config/lawfirm.php` & `App\Support\LawFirm`) untuk kecepatan TTFB < 20ms tanpa ketergantungan database MySQL.
- **6 Ruang Lingkup Praktik**:
  - Katalog bidang hukum: Perdata, Pidana, Korporasi & Bisnis, Hubungan Industrial, Pertanahan & Properti, serta Waris & Keluarga.
- **Formulir Konsultasi Interaktif**:
  - Form permohonan konsultasi hukum yang otomatis merangkai data klien dan meneruskannya ke WhatsApp kantor hukum.
- **Antarmuka Eksekutif Modern**:
  - Tampilan elegan bernuansa navy dan emas dengan Tailwind CSS v4, tipografi Cinzel dan Plus Jakarta Sans, serta ikon SVG kustom.

---

[1.1.0]: https://github.com/ardhikaxx/web-office-law/compare/v1.0.0...v1.1.0
[1.0.0]: https://github.com/ardhikaxx/web-office-law/releases/tag/v1.0.0
