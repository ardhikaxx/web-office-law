# 📖 Dokumentasi Arsitektur & Teknis Holong Siregar & Co. Law Office

Dokumen ini menjelaskan rancangan arsitektur, struktur kode, tata kelola data berbasis konfigurasi (*zero-database*), strategi *Search Engine Optimization (SEO)*, integrasi data terstruktur Schema.org, alur perutean konsultasi WhatsApp, serta mekanisme pengujian pada website **Holong Siregar & Co. Law Office (Kantor Advokat & Konsultan Hukum Holong Siregar, S.H., M.H. & Rekan)**.

---

## 1. Ringkasan Sistem & Filosofi Zero-Database

Website kantor hukum ini dirancang dengan prinsip **kestabilan tinggi, kecepatan muat maksimal, dan keamanan mutlak**:
1. **Zero-Database Overhead**: Menghilangkan ketergantungan pada MySQL/PostgreSQL. Seluruh data identitas kantor, profil advokat, 6 lingkup praktik, 14 layanan spesifik, FAQ, yurisdiksi pengadilan, dan kontak terpusat di `config/lawfirm.php`.
2. **Kecepatan Time To First Byte (TTFB) < 20ms**: Karena tidak ada *query overhead* atau *database handshake*, halaman disajikan langsung dari memori aplikasi, memberikan skor sempurna pada Google Core Web Vitals.
3. **Kebal Terhadap Serangan SQL Injection**: Ketiadaan database relasional secara fundamental meniadakan seluruh vektor serangan SQLi.
4. **Skalabilitas Tanpa Batas**: Website dapat melayani lonjakan puluhan ribu pengunjung bersamaan tanpa kendala *max database connection limit*.

---

## 2. Persyaratan Sistem & Cara Menjalankan

### Persyaratan Lingkungan:
- **PHP**: 8.3 atau 8.4+ dengan ekstensi `mbstring`, `openssl`, `tokenizer`, `xml`, `ctype`, `json`.
- **Composer**: Versi 2.x
- **Node.js & NPM**: Node 18+ / 20+

### Perintah Instalasi & Eksekusi:
```bash
# 1. Unduh repositori & masuk ke direktori
git clone https://github.com/ardhikaxx/web-office-law.git
cd web-office-law

# 2. Pasang dependensi PHP
composer install

# 3. Konfigurasi file environment
cp .env.example .env
php artisan key:generate

# 4. Kompilasi asset frontend (Tailwind CSS v4)
npm install
npm run build

# 5. Jalankan unit & feature testing
php artisan test --compact

# 6. Jalankan server lokal
php artisan serve
```

---

## 3. Struktur Direktori Utama

```text
office-law/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── AdvocateProfileController.php  # Controller profil advokat & verifikasi PERADI
│   │   │   ├── ConsultationController.php     # Controller form & perutean WhatsApp + rate limit
│   │   │   ├── HomeController.php             # Controller beranda & ringkasan praktik
│   │   │   ├── LegalServiceController.php     # Controller index & detail 14 layanan hukum
│   │   │   ├── LocalSeoController.php         # Controller otoritas Tangerang & FAQ lokal
│   │   │   ├── RobotsController.php           # Generator robots.txt otomatis
│   │   │   └── SitemapController.php          # Generator sitemap.xml dinamis
│   │   └── Requests/
│   │       └── ConsultationRequest.php        # Validasi form konsultasi & pesan Bahasa Indonesia
│   └── Support/
│       ├── LawFirm.php                        # Service layer data kantor, advokat, layanan & FAQ
│       └── Seo.php                            # Generator Schema.org JSON-LD (Multi-Office, Person, FAQ, Breadcrumbs)
├── bootstrap/
│   └── app.php                                # Registrasi route, middleware throttle, dan exception handling
├── config/
│   ├── app.php                                # Konfigurasi umum aplikasi Laravel
│   └── lawfirm.php                            # SUMBER KEBENARAN TUNGGAL (Data kantor, kontak, advokat, 14 layanan, Tangerang SEO)
├── resources/
│   ├── css/
│   │   └── app.css                            # Konfigurasi Tailwind CSS v4 & custom keyframes
│   └── views/
│       ├── components/
│       │   ├── footer.blade.php               # Komponen footer dengan link kantor & kontak dual-office
│       │   ├── navbar.blade.php               # Komponen navigasi responsif & dropdown layanan
│       │   └── seo-meta.blade.php             # Komponen meta tag SEO & injeksi JSON-LD
│       ├── layouts/
│       │   └── app.blade.php                  # Layout master Blade utama
│       ├── pages/
│       │   ├── advocate.blade.php             # Halaman profil advokat Holong Siregar, S.H., M.H.
│       │   ├── consultation.blade.php         # Halaman form konsultasi hukum
│       │   ├── home.blade.php                 # Halaman beranda utama kantor hukum
│       │   ├── legal-service-detail.blade.php # Template detail 14 layanan hukum spesifik
│       │   ├── legal-services.blade.php       # Halaman direktori ruang lingkup praktik & layanan
│       │   └── tangerang-lawyer.blade.php     # Landing page otoritas lokal pengacara Tangerang
│       └── sitemap.blade.php                  # Template XML sitemap
├── routes/
│   └── web.php                                # Definisi seluruh rute publik dan pembatasan laju
└── tests/
    └── Feature/
        └── SeoOptimizationTest.php            # 23 Test Pest (357 assertions) verifikasi SEO, route, schema & rate limit
```

---

## 4. Konfigurasi Terpusat (`config/lawfirm.php` & `App\Support\LawFirm`)

Seluruh data kantor hukum didefinisikan secara terstruktur di `config/lawfirm.php`:
- `profile`: Nama kantor (*Holong Siregar & Co. Law Office*), izin advokat PERADI, motto, ringkasan sejarah, dan nilai-nilai profesionalitas.
- `offices`:
  - **Bogor Head Office**: Jl. Raya Gunung Putri No. 45, Gunung Putri, Kab. Bogor (Telp: `+62 822-1322-8686`, Geo: `-6.4712, 106.9038`).
  - **Tangerang Liaison Office**: Kawasan BSD City & Gading Serpong, melayani Pengadilan Negeri Tangerang Kelas 1A Khusus (Geo: `-6.2925, 106.6669`).
- `advocates`: Kredensial lengkap Holong Siregar, S.H., M.H., alumni Fakultas Hukum UI, nomor anggota PERADI, spesialisasi hukum.
- `practice_areas`: 6 ruang lingkup praktik (Perdata, Pidana, Korporasi, Ketenagakerjaan, Pertanahan, Keluarga).
- `services`: 14 layanan hukum spesifik dengan slug, deskripsi mendalam, tahapan proses hukum, manfaat layanan, dan FAQ.
- `tangerang_seo`: Data pemetaan wilayah Tangerang (Kota Tangerang, Tangerang Selatan, Kab. Tangerang), yurisdiksi pengadilan (PN Tangerang, PA Tangerang, PTUN Serang), skema tarif, dan strategi FAQ lokal.

Semua data diakses melalui method statis typed di `App\Support\LawFirm`:
- `LawFirm::profile(): array`
- `LawFirm::headOffice(): array`
- `LawFirm::tangerangOffice(): array`
- `LawFirm::leadAdvocate(): array`
- `LawFirm::practiceAreas(): array`
- `LawFirm::services(): array`
- `LawFirm::findService(string $slug): ?array`
- `LawFirm::tangerangSeo(): array`

---

## 5. Mesin SEO & Schema.org JSON-LD (`App\Support\Seo`)

Class `App\Support\Seo` secara otomatis merangkai payload data terstruktur standar Schema.org untuk setiap konteks halaman:
1. **`buildLegalServiceSchema()`**:
   - Mendefinisikan tipe `@type: LegalService` dan `Attorney`.
   - Mengombinasikan kedua kantor (*Bogor Head Office* & *Tangerang Branch/Liaison Office*).
   - Menyertakan `geo` coordinates, `openingHoursSpecification`, `priceRange`, `areaServed` (Bogor, Tangerang, Jakarta, Depok, Bekasi), dan identitas advokat pemegang PERADI.
2. **`buildPersonSchema(array $advocate)`**:
   - Mendefinisikan tipe `@type: Person` untuk advokat.
   - Menyertakan atribut `jobTitle`, `worksFor`, `alumniOf` (Universitas Indonesia), `memberOf` (Perhimpunan Advokat Indonesia - PERADI), dan `knowsAbout`.
3. **`buildBreadcrumbSchema(array $crumbs)`**:
   - Menghasilkan markup `@type: BreadcrumbList` untuk navigasi hirarkis di hasil pencarian Google.
4. **`buildFaqSchema(array $faqs)`**:
   - Menghasilkan markup `@type: FAQPage` berisi pasangan `Question` dan `AcceptedAnswer` untuk mendukung fitur Google Rich Snippets / PAA.
5. **`buildWebSiteSchema()`**:
   - Mendefinisikan entitas situs web resmi dengan integrasi URL pencarian.

---

## 6. Tabel Rute Lengkap (`routes/web.php`)

| Metode | URI | Nama Rute | Controller & Action | Keterangan |
| :--- | :--- | :--- | :--- | :--- |
| `GET` | `/` | `home` | `HomeController@index` | Halaman beranda utama |
| `GET` | `/layanan-hukum` | `legal-services.index` | `LegalServiceController@index` | Direktori 6 praktik & 14 layanan |
| `GET` | `/layanan-hukum/{slug}` | `legal-services.show` | `LegalServiceController@show` | Detail masing-masing dari 14 layanan |
| `GET` | `/wilayah-layanan/pengacara-tangerang` | `local-seo.tangerang` | `LocalSeoController@tangerang` | Landing page otoritas hukum Tangerang |
| `GET` | `/advokat/holong-siregar` | `advocate.profile` | `AdvocateProfileController@show` | Profil resmi advokat & izin PERADI |
| `GET` | `/konsultasi` | `consultation.index` | `ConsultationController@index` | Form konsultasi hukum |
| `POST` | `/konsultasi` | `consultation.submit` | `ConsultationController@submit` | Pemrosesan form + redirect WhatsApp *(Throttle: 3 req / 10 m)* |
| `GET` | `/sitemap.xml` | `sitemap` | `SitemapController@index` | XML Sitemap untuk mesin pencari |
| `GET` | `/robots.txt` | `robots` | `RobotsController@index` | Petunjuk perayapan bot crawler |

---

## 7. Otoritas Lokal Tangerang & Strategi Dual-Office

Untuk mendominasi hasil pencarian kata kunci lokal Tangerang tanpa terjebak praktik *doorway pages* yang dilarang Google, strategi berikut diterapkan:
1. **Satu Halaman Pusat Otoritas Lengkap (`/wilayah-layanan/pengacara-tangerang`)**:
   - Menyajikan informasi bernilai nyata (*genuine legal value*) mengenai alur penyelesaian sengketa di wilayah hukum Banten dan Tangerang Raya.
   - Mengupas yurisdiksi **Pengadilan Negeri Tangerang Kelas 1A Khusus** di Jl. TMP Taruna, Pengadilan Agama Tangerang, dan PTUN Serang.
   - Menjelaskan perbedaan pendekatan hukum untuk sengketa bisnis korporasi di BSD City / Karawaci vs sengketa pertanahan di Kabupaten Tangerang.
   - Memberikan transparansi tarif honorarium advokat untuk menargetkan intent pencarian komersial (*commercial investigation*).
2. **Harmonisasi Dual-Office**:
   - Kantor operasional fisik utama di Gunung Putri, Bogor dihubungkan secara sinergis dengan kantor perwakilan/layanan di Tangerang.
   - Schema.org menyematkan kedua lokasi dalam array `department` / cabang kantor resmi, menjaga konsistensi NAP (*Name, Address, Phone*) di Google Maps dan Google Search.

---

## 8. Alur Konsultasi & WhatsApp Routing Engine

1. Calon klien membuka halaman `/konsultasi` atau mengklik tombol CTA di halaman layanan.
2. Mengisi formulir: Nama Lengkap, Nomor Kontak WhatsApp, Kategori Layanan, dan Ringkasan Masalah Hukum.
3. Saat tombol **"Mulai Konsultasi WhatsApp"** diklik, permintaan dikirimkan via metode `POST` ke `/konsultasi` dengan token CSRF.
4. `ConsultationRequest` memvalidasi input secara ketat di backend.
5. Controller merangkai pesan berformat rapi:
   ```text
   Halo Kantor Hukum Holong Siregar & Co., saya ingin konsultasi hukum:
   - Nama: [Nama Klien]
   - Kontak: [Nomor Klien]
   - Layanan: [Layanan yang Dipilih]
   - Ringkasan: [Kronologi Kasus]
   ```
6. Aplikasi mengarahkan browser klien langsung ke URL WhatsApp resmi: `https://wa.me/6282213228686?text=...`.
7. Jika terjadi kendala koneksi, pesan notifikasi flash memberikan opsi tautan langsung manual.

---

## 9. Lapisan Keamanan & Proteksi Rate Limiting

- **Pembatasan Laju (Rate Limiting)**:
  - Form konsultasi `/konsultasi` (POST) diproteksi middleware `throttle:consultation` yang dikonfigurasi pada `bootstrap/app.php`:
    ```php
    RateLimiter::for('consultation', function (Request $request) {
        return Limit::perMinutes(10, 3)->by($request->ip());
    });
    ```
  - Mencegah bot jahat membanjiri nomor WhatsApp kantor atau melancarkan serangan DoS.
- **Proteksi CSRF**: Seluruh request POST diverifikasi melalui Laravel VerifyCsrfToken middleware.
- **Sanitasi XSS**: Output data Blade selalu menggunakan sintaks `{{ ... }}` untuk memastikan karakter berbahaya ter-escape secara sempurna.
- **Anti Kebocoran Info**: Header respons dan penanganan error 404 disesuaikan agar tidak membocorkan struktur direktori server ke publik.

---

## 10. Desain Antarmuka & Frontend

- **Tailwind CSS v4**: Menggunakan engine Vite modern `@tailwindcss/vite` dengan konfigurasi JIT super ringan.
- **Hero Lady Justice**: Menggunakan siluet vektor SVG kustom Dewi Keadilan yang telah digelapkan untuk memastikan keterbacaan teks (*text contrast accessibility - WCAG AA*).
- **Aksen Warna**:
  - `slate-900` / `slate-950`: Menggambarkan stabilitas, kewibawaan, dan keheningan hukum.
  - `amber-500` / `amber-600`: Melambangkan keadilan emas, martabat profesi advokat (*officium nobile*).
- **Mobile Navigation**: Navbar responsif dengan burger menu dan transisi halus tanpa dependensi pustaka berat.

---

## 11. Hasil Pengujian Pest (23 Feature Tests / 357 Assertions)

Pengujian otomatis dijalankan menggunakan Pest PHP pada file `tests/Feature/SeoOptimizationTest.php`:

```bash
php artisan test --compact
```

### Matriks Pengujian yang Diverifikasi:
1. ✅ `homepage returns 200 and renders properly`: Memastikan homepage dapat diakses dan memiliki heading utama.
2. ✅ `homepage has optimal SEO title and description`: Memeriksa panjang title dan meta description sesuai standar Google.
3. ✅ `homepage has canonical url and og tags`: Memeriksa tag rel="canonical" dan Open Graph tags.
4. ✅ `homepage has legal service schema json-ld`: Memastikan payload JSON-LD LegalService/Attorney valid.
5. ✅ `homepage has faq page schema`: Memverifikasi Schema.org FAQPage di homepage.
6. ✅ `legal services index page returns 200`: Memeriksa halaman direktori layanan publik.
7. ✅ `all 14 legal service pages return 200 with proper seo`: Menjalankan iterasi ke-14 URL `/layanan-hukum/{slug}` dan memastikan status 200, H1 unik, meta tag, dan JSON-LD.
8. ✅ `tangerang local authority landing page returns 200 with local keywords`: Memastikan keyword *"pengacara tangerang"* hadir secara kontekstual di halaman otoritas.
9. ✅ `tangerang page has faq schema and local court references`: Memverifikasi referensi PN Tangerang dan Schema FAQPage.
10. ✅ `advocate profile page returns 200 and shows credentials`: Memverifikasi kehadiran nomor izin PERADI dan data advokat.
11. ✅ `advocate profile page has person schema`: Memeriksa JSON-LD Person untuk Holong Siregar, S.H., M.H.
12. ✅ `consultation page renders form and handles direct submit`: Memverifikasi formulir konsultasi dan rute penanganan.
13. ✅ `consultation submission redirects to whatsapp`: Memastikan pembentukan URL WhatsApp dengan nomor dan pesan yang valid.
14. ✅ `consultation route enforces rate limiting`: Menguji pembatasan laju (request ke-4 dalam rentang waktu diblokir HTTP 429).
15. ✅ `sitemap xml is accessible and valid xml`: Memeriksa keluaran XML sitemap, header Content-Type, dan seluruh URL yang dipetakan.
16. ✅ `robots txt is accessible and configured`: Memeriksa instruksi User-agent, Disallow, dan referensi Sitemap URL.
17. ✅ `non existent service returns 404`: Memastikan rute layanan yang salah mengembalikan HTTP status 404 tanpa fatal error.

---

**Yanuar Ardhika Rahmadhani Ubaidillah (@ardhikaxx)**
*Lead Software Architect & Maintainer*
