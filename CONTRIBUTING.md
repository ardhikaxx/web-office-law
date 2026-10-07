# 🤝 Panduan Kontribusi (Contributing Guidelines)

Terima kasih atas minat Anda pada pengembangan platform **Holong Siregar & Co. Law Office**!

Aplikasi ini dirancang, dikelola, dan dikembangkan secara eksklusif oleh **Yanuar Ardhika Rahmadhani Ubaidillah (@ardhikaxx)**. Mengingat proyek ini berlisensi **Proprietary Software License (All Rights Reserved)**, setiap bentuk kontribusi diatur oleh ketentuan berikut.

---

## 📌 Prinsip & Kebijakan Hak Cipta

1. **Kepemilikan Hak Cipta**: Seluruh kode sumber, arsitektur data, komponen tampilan, dan dokumentasi dilindungi hak cipta atas nama **Yanuar Ardhika Rahmadhani Ubaidillah (@ardhikaxx)**.
2. **Larangan Plagiarisme & Penghapusan Atribusi**: Dilarang keras menghapus watermark, metadata hak cipta, atau mengubah *author attribution* yang tertanam dalam sistem (lihat [LICENSE](./LICENSE)).
3. Setiap kontribusi atau *pull request* yang diterima secara sah menjadi bagian dari basis kode proyek dan hak ciptanya melekat pada pemilik proyek.
4. Dengan mengirimkan kontribusi, Anda menyatakan bahwa kode tersebut adalah murni karya asli Anda sendiri dan bebas dari klaim pihak ketiga.

---

## 🛠️ Standar Pengembangan Kode (Code Standards)

* **Bahasa & Framework**: PHP 8.4+ dan Laravel 13.x.
* **Arsitektur Zero-Database**: Seluruh penambahan data kantor, advokat, layanan, dan FAQ harus dilakukan secara deklaratif melalui `config/lawfirm.php` dan diakses melalui class typed `App\Support\LawFirm`. Dilarang menambahkan koneksi database tanpa persetujuan eksplisit.
* **Gaya Kode PHP (PSR-12)**: Wajib mematuhi standar PSR-12. Jalankan perintah Laravel Pint sebelum membuat *commit*:
  ```bash
  vendor/bin/pint --format agent
  ```
* **Standar SEO & Schema.org**: Setiap penambahan rute publik baru wajib didaftarkan pada `app/Http/Controllers/SitemapController.php` dan dilengkapi metadata SEO serta Schema.org JSON-LD yang valid melalui `App\Support\Seo`.
* **Keamanan & Validasi**:
  - Validasi form publik wajib menggunakan `FormRequest` terpisah dengan pesan kesalahan berbahasa Indonesia ramah pengguna.
  - Endpoint yang menerima input publik wajib dilindungi *rate limiter* (*throttle*).
* **Standar Frontend**: Menggunakan Tailwind CSS v4.x yang terkompilasi melalui Vite. Pertahankan palet warna resmi (*navy* `slate-900` dan emas keadilan `amber-500/600`).
* **Pengujian Otomatis**: Setiap perubahan atau penambahan fitur wajib disertai pengujian Pest (`php artisan test --compact`). Seluruh pengujian wajib berstatus **100% PASSING**.

---

## 🌿 Alur Kerja Git (Git Workflow)

1. **Fork & Kloning Repositori**:
   ```bash
   git clone https://github.com/ardhikaxx/web-office-law.git
   cd web-office-law
   ```

2. **Buat Branch Fitur / Perbaikan**:
   * `feat/nama-fitur` (untuk penambahan fitur baru)
   * `fix/nama-bug` (untuk perbaikan bug atau tampilan)
   * `docs/nama-dokumentasi` (untuk pembaruan dokumen)
   * `perf/optimasi-seo` (untuk peningkatan performa SEO)

   ```bash
   git checkout -b feat/layanan-arbitrase
   ```

3. **Format Pesan Commit (Conventional Commits)**:
   Gunakan konvensi [Conventional Commits](https://www.conventionalcommits.org/) dengan deskripsi berbahasa Indonesia yang jelas:
   * `feat: penambahan layanan hukum arbitrase dan mediasi`
   * `fix: perbaikan pembentukan url konsultasi whatsapp pada mobile`
   * `docs: pembaruan panduan instalasi dan dokumentasi arsitektur`
   * `perf: optimasi waktu kompilasi asset tailwind css v4`

4. **Kirimkan Pull Request (PR)**:
   * Satu PR hanya berfokus pada satu tujuan perubahan yang terukur.
   * Sertakan ringkasan perubahan, hasil eksekusi `php artisan test`, dan tangkapan layar bila menyangkut antarmuka.

---

## 🐞 Melaporkan Bug

* Gunakan menu [GitHub Issues](https://github.com/ardhikaxx/web-office-law/issues) untuk melaporkan bug antarmuka atau galat logika.
* Jelaskan versi PHP/Node yang digunakan, langkah reproduksi, dan perilaku yang diharapkan.
* **PENTING**: Untuk pelaporan celah keamanan sistem, **JANGAN** gunakan GitHub Issues publik — silakan ikuti petunjuk pelaporan privat pada [`SECURITY.md`](./SECURITY.md).

---

Terima kasih atas dedikasi dan kerja sama Anda dalam membangun ekosistem teknologi hukum (*legal tech*) yang berkualitas!

**Yanuar Ardhika Rahmadhani Ubaidillah (@ardhikaxx)**
*Lead Software Architect & Maintainer*
