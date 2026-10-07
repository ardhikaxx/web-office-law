# ⚖️ Holong Siregar & Co. Law Office

[![Laravel](https://img.shields.io/badge/Laravel-13.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.4-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-4.x-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)](https://tailwindcss.com)
[![Vite](https://img.shields.io/badge/Vite-8.x-646CFF?style=for-the-badge&logo=vite&logoColor=white)](https://vitejs.dev)
[![Pest](https://img.shields.io/badge/Tested%20with-Pest-EB4432?style=for-the-badge&logo=pest&logoColor=white)](https://pestphp.com)
[![License](https://img.shields.io/badge/License-Proprietary-red?style=for-the-badge)](./LICENSE)
[![Author](https://img.shields.io/badge/Author-Yanuar%20Ardhika%20Rahmadhani%20Ubaidillah-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/ardhikaxx)

Platform website profil korporat resmi untuk **Kantor Advokat & Konsultan Hukum Holong Siregar, S.H., M.H. & Rekan (Holong Siregar & Co. Law Office)**. Dirancang khusus untuk kantor hukum profesional, firma advokat, dan konsultan legal yang menargetkan calon klien individu maupun korporasi di wilayah metropolitan **Tangerang Raya** (Kota Tangerang, Tangerang Selatan, BSD City, Bintaro, Alam Sutera, Gading Serpong, Karawaci, Kabupaten Tangerang) serta wilayah operasional **Bogor Raya** (Gunung Putri, Cibubur, Cileungsi, Cibinong).

Website ini dibangun menggunakan arsitektur **Zero-Database High-Performance**, mengintegrasikan strategi **SEO Lokal mendalam (Topical Authority)**, data terstruktur **Schema.org JSON-LD tingkat lanjut**, verifikasi kredensial advokat resmi **PERADI**, serta perutean konsultasi langsung ke **WhatsApp** dengan proteksi pembatasan laju (*rate limiting*).

---

## ✨ Fitur Unggulan Sistem

### 1. ⚡ Arsitektur Zero-Database Ultra Cepat
- Seluruh data profil kantor, advokat, 6 lingkup praktik, 14 layanan hukum, FAQ, dan metadata dikelola melalui *centralized typed configuration* (`config/lawfirm.php`) dan helper class (`App\Support\LawFirm`).
- **Nol latensi database**: Menghilangkan ketergantungan SQL server, *connection pool bottleneck*, dan risiko *database down*.
- Waktu respons server (TTFB) di bawah **20 milidetik**, memberikan skor **Google Core Web Vitals** maksimal yang menjadi faktor penentu ranking SEO Google.

### 2. 🏛️ Desain Eksekutif & Identitas Visual Hukum
- Tipografi serif berkelas (*Cinzel* & modern sans-serif) berpadu dengan palet warna navy profesional (*slate-900*) dan sentuhan emas keadilan (*amber-500/amber-600*).
- Hero section megah berlatar siluet elegan Dewi Keadilan (*Lady Justice*) memegang neraca timbangan hukum.
- Desain antarmuka 100% responsif dari resolusi mobile (320px) hingga layar monitor ultrawide 4K.

### 3. 📑 6 Ruang Lingkup Praktik Hukum Utama
- **Hukum Perdata**: Penanganan wanprestasi, perbuatan melawan hukum (PMH), utang piutang, dan sengketa perjanjian.
- **Hukum Pidana**: Pendampingan saksi, korban, tersangka, penyidikan di Kepolisian/Kejaksaan, hingga pembelaan di Pengadilan Negeri.
- **Hukum Korporasi & Bisnis**: *Corporate retainer*, penyusunan kontrak komersial, merger/akuisisi, *compliance*, dan izin usaha.
- **Hukum Ketenagakerjaan**: Penyelesaian perselisihan hubungan industrial (PHI), bipartit, tripartit, pesangon, dan PHK.
- **Sengketa Properti & Pertanahan**: Kepemilikan tanah, sertifikat ganda, sengketa jual beli properti, dan eksekusi lelang.
- **Hukum Keluarga & Waris**: Pembagian harta warisan, hibah, wasiat, perkawinan, dan sengketa keluarga.

### 4. 🔍 14 Halaman Layanan Spesifik Berkualitas Tinggi (`/layanan-hukum/{slug}`)
- Setiap layanan hukum memiliki landing page tersendiri dengan URL kanonikal, H1 unik, konten edukasi mendalam, alur kerja, FAQ spesifik, dan CTA konsultasi:
  1. `/layanan-hukum/somasi-negosiasi` — Somasi & Negosiasi Hukum
  2. `/layanan-hukum/gugatan-sengketa-perdata` — Gugatan & Sengketa Perdata
  3. `/layanan-hukum/pendampingan-perkara-pidana` — Pendampingan Perkara Pidana
  4. `/layanan-hukum/pendampingan-korporasi-bisnis` — Pendampingan Korporasi & Bisnis
  5. `/layanan-hukum/legal-due-diligence-audit` — Legal Due Diligence & Audit
  6. `/layanan-hukum/pembuatan-review-kontrak` — Pembuatan & Review Kontrak
  7. `/layanan-hukum/sengketa-hubungan-industrial` — Sengketa Hubungan Industrial (Ketenagakerjaan)
  8. `/layanan-hukum/mediasi-arbitrase-sengketa` — Mediasi & Arbitrase Sengketa
  9. `/layanan-hukum/sengketa-tanah-properti` — Sengketa Tanah & Properti
  10. `/layanan-hukum/pengurusan-waris-hibah` — Pengurusan Waris & Hibah
  11. `/layanan-hukum/permohonan-hukum-dokumen-resmi` — Permohonan Hukum & Dokumen Resmi
  12. `/layanan-hukum/pendampingan-eksekusi-putusan` — Pendampingan Eksekusi Putusan
  13. `/layanan-hukum/hukum-kepailitan-pkpu` — Hukum Kepailitan & PKPU
  14. `/layanan-hukum/konsultasi-hukum-strategis` — Konsultasi Hukum Strategis

### 5. 📍 Landing Page Otoritas Lokal Tangerang (`/wilayah-layanan/pengacara-tangerang`)
- Pusat topical authority pencarian Google untuk intent lokal: *"pengacara tangerang"*, *"advokat tangerang"*, *"kantor hukum tangerang"*, *"lawyer tangerang"*, *"konsultasi hukum tangerang"*.
- Memuat panduan yurisdiksi pengadilan lengkap: **Pengadilan Negeri Tangerang Kelas 1A Khusus**, Pengadilan Agama Tangerang, PTUN Serang, serta PN Jakarta Barat & Jakarta Selatan.
- Cakupan wilayah detail: Kota Tangerang (13 kecamatan), Tangerang Selatan (BSD, Bintaro, Ciputat, Pamulang, Serpong), dan Kabupaten Tangerang (Gading Serpong, Karawaci, Kelapa Dua, Cikupa, Tigaraksa).
- Transparansi struktur honorarium hukum (*retainer*, *lump-sum fee*, *success fee*) dan FAQ hukum lokal.

### 6. 👨‍⚖️ Profil Advokat & Kredensial PERADI (`/advokat/holong-siregar`)
- Menampilkan profil resmi Managing Partner: **Holong Siregar, S.H., M.H.**
- Verifikasi Nomor Induk Advokat (NIA) **PERADI: B-02.10984**, Berita Acara Sumpah (BAS) Pengadilan Tinggi.
- Riwayat pendidikan Fakultas Hukum Universitas Indonesia (S1 & S2) dan pengalaman litigasi 15+ tahun.
- Memenuhi standar algoritma Google **E-E-A-T** (*Experience, Expertise, Authoritativeness, Trustworthiness*).

### 7. 💬 Mesin Konsultasi WhatsApp & Anti-Spam Rate Limiter (`/konsultasi`)
- Form konsultasi hukum interaktif dengan validasi input nomor telepon, nama lengkap, kategori masalah hukum, dan kronologi singkat perkara.
- Otomatis merangkai pesan terformat dan mengarahkan klien langsung ke aplikasi **WhatsApp resmi kantor hukum**.
- **Perlindungan Keamanan Backend**: Dilindungi middleware `throttle:consultation` (maksimal 3 pengiriman formulir per 10 menit per alamat IP) untuk mencegah eksploitasi bot spam.

### 8. 🌐 Struktur Data Schema.org JSON-LD Komprehensif
- Didukung oleh `App\Support\Seo`:
  - **`LegalService` & `Attorney` Multi-Office**: Informasi resmi kantor Bogor (Head Office) dan kantor perwakilan Tangerang lengkap dengan koordinat geolokasi (*geo coordinates*), jam operasional, email, telepon, dan area cakupan.
  - **`Person` Schema**: Profil advokat lengkap dengan `alumniOf`, `memberOf` PERADI, dan `knowsAbout`.
  - **`BreadcrumbList`**: Penanda navigasi remah roti hierarkis pada seluruh sub-halaman.
  - **`FAQPage`**: Markup tanya jawab terverifikasi pada homepage, halaman layanan, dan landing page Tangerang untuk merebut *Google Rich Snippets / PAA (People Also Ask)*.
  - **`WebSite`**: Schema pencarian OpenSearch.

### 9. 🗺️ Dynamic XML Sitemap & Search Directives
- **`sitemap.xml` Dinamis**: Otomatis memetakan seluruh URL publik beserta `priority`, `changefreq`, dan `lastmod` ISO 8601 terbaru.
- **`robots.txt` Teroptimasi**: Mengizinkan perayapan bot mesin pencari (Googlebot, Bingbot) sekaligus memblokir akses ke direktori sensitif `/storage/logs/` dan endpoint internal.

### 10. 🧪 Rangkaian Pengujian Otomatis Pest (100% Passing)
- Didukung **23 skenario Feature Test** dengan **357 assertion** di `tests/Feature/SeoOptimizationTest.php`.
- Memverifikasi kode status HTTP 200, panjang meta title & description, tag kanonikal, Open Graph, integrasi JSON-LD, sitemap XML valid, mekanisme rate limiter konsultasi, dan penanganan error 404.

---

## 👥 Profil Kantor & Wilayah Operasional

| Wilayah | Alamat / Basis Operasional | Fokus Layanan |
| :--- | :--- | :--- |
| **Bogor Raya (Kantor Utama)** | Jl. Raya Gunung Putri No. 45, Gunung Putri, Kab. Bogor, Jawa Barat 16961 | Litigasi Perdata & Pidana, Hubungan Industrial, Korporasi Kawasan Industri Bogor & Cibubur |
| **Tangerang Raya (Liaison & Wilayah Praktik)** | Meliputi Kota Tangerang, Tangerang Selatan (BSD, Bintaro), & Kab. Tangerang (Gading Serpong, Karawaci) | Sengketa Bisnis, Retainer Korporasi, Sengketa Pertanahan, Litigasi di PN Tangerang |

---

## 🛠️ Tech Stack & Dependensi

* **Backend Framework**: Laravel 13.x (PHP 8.4+)
* **Architecture**: Zero-Database / Pure Config-Driven (`config/lawfirm.php`)
* **Styling & UI**: Tailwind CSS v4.x, Google Fonts (*Cinzel* & *Plus Jakarta Sans*)
* **Iconography**: Font Awesome 6.5+ & Inline Handcrafted SVG Icons
* **Build Tool**: Vite 8.x + `@tailwindcss/vite`
* **Test Runner**: Pest 5.x (`pestphp/pest`)
* **Code Formatter**: Laravel Pint (Standar PSR-12)

---

## ⚙️ Panduan Instalasi & Menjalankan Website

### 1. Kloning Repositori
```bash
git clone https://github.com/ardhikaxx/web-office-law.git
cd web-office-law
```

### 2. Install Dependensi PHP
```bash
composer install
```

### 3. Konfigurasi Environment (`.env`)
Salin file konfigurasi contoh dan buat kunci enkripsi aplikasi:
```bash
cp .env.example .env
php artisan key:generate
```
> *Catatan: Karena website ini menggunakan arsitektur Zero-Database, Anda tidak perlu mengatur koneksi database MySQL.*

### 4. Install Dependensi Frontend & Kompilasi Asset
```bash
npm install
npm run build
```

### 5. Jalankan Pengujian Otomatis
Pastikan seluruh 23 test fitur lolos tanpa kendala:
```bash
php artisan test --compact
```

### 6. Jalankan Server Pengembangan Lokal
```bash
php artisan serve
```
Buka browser dan akses: `http://127.0.0.1:8000` (atau via virtual host Apache XAMPP: `http://localhost/office-law/public`).

---

## 📚 Dokumentasi Sistem

* [📖 **DOKUMENTASI.md**](./DOKUMENTASI.md) — Struktur arsitektur, daftar rute, dokumentasi SEO, Schema.org, dan audit sistem.
* [⚖️ **LICENSE**](./LICENSE) — Lisensi resmi **Proprietary Software License (All Rights Reserved)**.
* [🛡️ **SECURITY.md**](./SECURITY.md) — Kebijakan keamanan, rate limiting, dan pelaporan celah (*Responsible Disclosure*).
* [🤝 **CONTRIBUTING.md**](./CONTRIBUTING.md) — Pedoman kontribusi kode, standar PSR-12, dan alur Git.
* [📜 **CODE_OF_CONDUCT.md**](./CODE_OF_CONDUCT.md) — Pedoman perilaku komunitas dan perlindungan anti-plagiarisme.
* [💬 **SUPPORT.md**](./SUPPORT.md) — Kanal bantuan teknis & komunikasi resmi pengembang.
* [📋 **CHANGELOG.md**](./CHANGELOG.md) — Riwayat rilis fitur terstruktur (*Keep a Changelog* & SemVer).
* [📚 **CITATION.md**](./CITATION.md) — Format sitasi karya untuk keperluan akademik & penelitian.

---

## 💖 Dukungan & Donasi

Jika platform website kantor hukum **Holong Siregar & Co. Law Office** ini bermanfaat bagi Anda, memberikan inspirasi arsitektur SEO Laravel zero-database, atau menghemat waktu berharga Anda, Anda dapat memberikan apresiasi dan traktiran kopi melalui pemindaian kode QRIS di bawah ini:

<p align="center">
  <img src="./qris.png" alt="QRIS Donasi" width="300"/>
</p>

> *Donasi sepenuhnya bersifat sukarela dan tidak mengikat. Seluruh fitur website dapat dijalankan secara utuh.*

---

## ⚠️ Ketentuan Penggunaan

Proyek ini dilindungi lisensi **Proprietary Software License (All Rights Reserved)**. Anda **dilarang keras** menyalin, memodifikasi, mendistribusikan ulang, mempublikasikan ulang, atau menjual kode sumber ini untuk kepentingan komersial tanpa izin tertulis dari pemilik hak cipta. Lihat [LICENSE](./LICENSE) untuk detail lengkap.

---

## 👨‍💻 Pengembang & Hak Cipta

Dirancang dan dikembangkan dengan standar rekayasa perangkat lunak modern oleh:
**[Yanuar Ardhika Rahmadhani Ubaidillah (@ardhikaxx)](https://github.com/ardhikaxx)**
*Lead Software Architect & Maintainer*

> **Copyright (c) 2024 - 2026 Yanuar Ardhika Rahmadhani Ubaidillah (@ardhikaxx). All Rights Reserved.**
