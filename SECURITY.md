# 🛡️ Kebijakan Keamanan (Security Policy)

Keamanan informasi, integritas data, dan privasi calon klien kantor hukum adalah prioritas fundamental dalam pengembangan platform **Holong Siregar & Co. Law Office**.

Aplikasi ini dibangun dengan mengadopsi prinsip *Security by Design*, **Undang-Undang Perlindungan Data Pribadi (UU PDP No. 27 Tahun 2022)**, kode etik kerahasiaan hubungan advokat-klien (*attorney-client privilege*), serta standar rekayasa web modern.

---

## 📦 Versi yang Didukung

Pembaruan keamanan (*security patches*) aktif diberikan untuk versi berikut:

| Versi | Status Dukungan Keamanan |
| :--- | :--- |
| **v1.1.x** | ✅ Didukung Penuh (*Active Security Support*) |
| **v1.0.x** | ✅ Pembaruan Kritis (*Critical Fixes Only*) |
| < 1.0.0 | ❌ Tidak Didukung |

---

## 🔒 Lapisan Keamanan Bawaan (Built-in Security Layers)

1. **Perlindungan Anti-Spam & Pembatasan Laju (Rate Limiting)**:
   - Formulir konsultasi hukum dilindungi oleh middleware `throttle:consultation` (maksimal 3 pengiriman per 10 menit per alamat IP).
   - Mencegah serangan *denial-of-service (DoS)*, pemboman pesan WhatsApp otomatis (*bot spamming*), dan pemindaian otomatis oleh bot liar.

2. **Perlindungan Privasi Data & Kerahasiaan Klien (UU PDP & Kode Etik Advokat)**:
   - Berkat arsitektur *zero-database*, data nama, nomor telepon, dan kronologi perkara calon klien **tidak disimpan dalam basis data server**.
   - Data langsung dirangkai dan ditransmisikan secara instan ke kanal komunikasi resmi WhatsApp kantor hukum yang terenkripsi *end-to-end* (E2EE), mengeliminasi risiko kebocoran data (*data breach*) akibat pembobolan server.

3. **Kekebalan Mutlak Terhadap SQL Injection**:
   - Seluruh data operasional, profil, dan layanan bersumber dari konfigurasi statis yang diketik ketat (*strongly typed config*).
   - Tidak ada koneksi database relasional, *query builder*, atau eksekusi SQL mentah, sehingga secara inheren kebal 100% terhadap seluruh teknik serangan *SQL Injection*.

4. **Proteksi Cross-Site Request Forgery (CSRF)**:
   - Seluruh rute formulir yang menggunakan metode `POST` dilindungi oleh token CSRF terverifikasi bawaan Laravel.

5. **Proteksi Cross-Site Scripting (XSS)**:
   - Seluruh keluaran variabel dalam template Blade menggunakan interpolasi aman `{{ ... }}` yang secara otomatis menyaring tag HTML berbahaya (`htmlspecialchars`).
   - Meta tag SEO dan JSON-LD dienkode menggunakan fungsi bawaan `json_encode()` dengan opsi `JSON_UNESCAPED_SLASHES` dan `JSON_UNESCAPED_UNICODE` yang aman.

6. **Penyembunyian Jejak Server & Error Handling Aman**:
   - Direktori sensitif dan berkas log dikecualikan dari perayapan bot melalui `robots.txt`.
   - Respons halaman 404 (Not Found) untuk rute yang tidak valid ditangani secara elegan tanpa membocorkan struktur folder server atau informasi konfigurasi internal.

---

## 🚨 Melaporkan Celah Keamanan (Responsible Disclosure)

Jika Anda menemukan potensi kerentanan atau celah keamanan dalam sistem ini:

> [!CAUTION]
> **JANGAN PERNAH** mempublikasikan temuan celah keamanan ke publik melalui GitHub Issues terbuka atau media sosial demi melindungi integritas sistem.

Kirimkan laporan Anda secara bertanggung jawab (*Responsible Disclosure*) melalui kontak privat berikut:

* **Email Penanggung Jawab Keamanan**: `ardhikayanuar58@gmail.com`
* **Subjek Email**: `[SECURITY VULNERABILITY] - Holong Siregar & Co. Law Office`

### Informasi yang Wajib Disertakan:
1. Deskripsi lengkap mengenai potensi kerentanan yang teridentifikasi.
2. Langkah-langkah detail atau *proof-of-concept (PoC)* untuk mereproduksi temuan tersebut.
3. Estimasi tingkat risiko dan potensi dampaknya terhadap operasional website.

Tim pengembang akan memverifikasi dan merespons laporan dalam kurun waktu **1x24 jam** serta segera merilis perbaikan (*patch*).

---

Terima kasih atas dedikasi dan profesionalitas Anda dalam menjaga keamanan ekosistem digital hukum Indonesia.

**Yanuar Ardhika Rahmadhani Ubaidillah (@ardhikaxx)**
*Lead Software Architect & Maintainer*
