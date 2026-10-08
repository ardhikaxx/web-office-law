@extends('layouts.app')

@section('title', 'Pengacara di Tangerang & Bogor | Holong Siregar & Co.')
@section('meta_description', 'Kantor advokat pengacara di Tangerang & Bogor. Solusi hukum tegas & terpercaya untuk perkara perdata, pidana, sengketa tanah, perceraian & kontrak bisnis.')
@section('meta_keywords', \App\Support\Seo::keywords())
@section('canonical', route('home'))

@section('content')
    {{-- 1. HERO SECTION (Inspired by image.png) --}}
    <section class="law-hero">
        <div class="law-hero-bg hero-bg" aria-hidden="true"></div>
        <div class="law-hero-overlay hero-overlay" aria-hidden="true"></div>

        <div class="law-hero-main">
            <div class="container law-hero-container hero-content">
                <div class="row align-items-center g-5">
                    {{-- Left: Authority Headline & Value Proposition --}}
                    <div class="col-lg-7">
                        <span class="law-hero-badge hero-label">
                            <i class="fa-solid fa-scale-balanced text-gold"></i>
                            KANTOR ADVOKAT &amp; KONSULTAN HUKUM
                        </span>
                        <h1 class="law-hero-title hero-title">
                            Pengacara di Tangerang &amp; Bogor
                            <span class="d-block text-gold">Solusi Hukum yang Tegas, Terukur &amp; Terpercaya</span>
                        </h1>
                        <p class="law-hero-text hero-text">
                            Holong Siregar &amp; Co. Law Office adalah kantor hukum dan advokat pengacara berdedikasi
                            melayani wilayah <strong>Kota Tangerang, BSD, Serpong, Tangerang Selatan</strong>, dan <strong>Bogor</strong>.
                            Kami memberikan pendampingan hukum profesional melalui analisis cermat, strategi relevan,
                            komunikasi terbuka, serta integritas penuh.
                        </p>
                        <div class="law-hero-actions hero-actions">
                            <a href="#consultation-section" class="btn btn-gold law-btn-primary">
                                <i class="fa-solid fa-calendar-check"></i>
                                <span>Konsultasi Sekarang</span>
                            </a>
                            <a href="{{ route('services.index') }}" class="btn btn-outline-light">
                                <span>Pelajari Layanan</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right: Official Justice Symbol Statue (Lady Justice), flush to the right edge & strip (stacked below text on mobile) --}}
            <div class="law-hero-visual">
                <div class="law-hero-statue-wrap">
                    <div class="law-hero-statue-glow"></div>
                    <picture>
                        <source srcset="{{ asset('assets/images/simbol-justice.webp') }}" type="image/webp">
                        <img src="{{ asset('assets/images/simbol-justice.webp') }}"
                             alt="Simbol Keadilan - Holong Siregar &amp; Co. Law Office"
                             class="law-hero-statue"
                             width="800"
                             height="883"
                             fetchpriority="high"
                             loading="eager">
                    </picture>
                </div>
            </div>
        </div>

        {{-- Trust / Highlight Strip directly under Hero (Inspired by image.png) --}}
        <div class="law-hero-strip">
            <div class="container">
                <div class="row g-3">
                    <div class="col-sm-6 col-lg-3">
                        <div class="law-strip-item">
                            <div class="law-strip-icon">
                                <i class="fa-solid fa-user-tie"></i>
                            </div>
                            <div class="law-strip-content">
                                <h4>Advokat Berpengalaman</h4>
                                <p>Dedikasi dan keahlian hukum komprehensif.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="law-strip-item">
                            <div class="law-strip-icon">
                                <i class="fa-solid fa-handshake"></i>
                            </div>
                            <div class="law-strip-content">
                                <h4>Pendekatan Personal</h4>
                                <p>Solusi terarah sesuai kebutuhan perkara.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="law-strip-item">
                            <div class="law-strip-icon">
                                <i class="fa-solid fa-compass"></i>
                            </div>
                            <div class="law-strip-content">
                                <h4>Strategi Terukur</h4>
                                <p>Analisis berbasis fakta dan regulasi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="law-strip-item">
                            <div class="law-strip-icon">
                                <i class="fa-solid fa-lock"></i>
                            </div>
                            <div class="law-strip-content">
                                <h4>Kerahasiaan Terjaga</h4>
                                <p>Privasi dokumen dan komunikasi klien.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 2. SERVICES SECTION (Comprehensive Legal Services) --}}
    <section class="law-section law-section-soft section" id="layanan">
        <div class="container">
            <x-section-heading
                eyebrow="RUANG LINGKUP PRAKTIK"
                title="Layanan hukum untuk berbagai kebutuhan"
                description="Setiap layanan disusun untuk membantu klien memahami pilihan dan menentukan langkah hukum yang tepat sesuai konteks kebutuhannya."
                align="start"
                :divider="false" />

            @if (count($services))
                <div class="row g-4">
                    @foreach ($services as $service)
                        <div class="{{ $loop->last && $loop->iteration % 3 === 1 ? 'col-12' : 'col-md-6 col-lg-4' }}">
                            <x-service-card :service="$service" :is-wide="$loop->last && $loop->iteration % 3 === 1" />
                        </div>
                    @endforeach
                </div>
            @else
                <div class="empty-state">Data layanan belum tersedia.</div>
            @endif
        </div>
    </section>

    {{-- 3. PRACTICE AREAS SECTION (Litigasi & Non-Litigasi) --}}
    <section class="law-section section bg-white">
        <div class="container">
            <x-section-heading
                eyebrow="AREA PRAKTIK UTAMA"
                title="Litigasi & Non-Litigasi"
                description="Dua pilar pendekatan pendampingan: penyelesaian perkara melalui jalur peradilan dan pencegahan sengketa melalui pendampingan preventif." />

            <div class="row g-4">
                @foreach ($practiceAreas as $area)
                    <div class="col-md-6">
                        <x-practice-card :area="$area" />
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- 4. ABOUT SECTION (Editorial Two-Column Layout) --}}
    <section class="law-section section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="about-img law-card p-2">
                        <img src="{{ asset('assets/images/office-team.svg') }}"
                             alt="Suasana kantor dan ruang rapat Holong Siregar &amp; Co."
                             class="rounded"
                             loading="lazy"
                             width="800"
                             height="560">
                    </div>
                    <div class="law-quote-box quote-box mt-4 position-relative overflow-hidden">
                        <div class="law-quote-watermark" aria-hidden="true">
                            <picture>
                                <source srcset="{{ asset('assets/images/simbol-justice.webp') }}" type="image/webp">
                                <img src="{{ asset('assets/images/simbol-justice.webp') }}"
                                     alt="Simbol Keadilan - Holong Siregar &amp; Co."
                                     width="800"
                                     height="883"
                                     loading="lazy">
                            </picture>
                        </div>
                        <div class="position-relative" style="z-index: 2;">
                            <div class="small fw-bold text-gold-dark text-uppercase mb-1">
                                <i class="fa-solid fa-scale-balanced me-1"></i>Visi &amp; Komitmen Pelayanan
                            </div>
                            “Memberikan solusi tepat pada permasalahan dan kebutuhan hukum, serta menjaga komunikasi berkesinambungan demi kepentingan klien dengan mengutamakan kode Etik Profesi Advokat (Officium Nobile).”
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <x-section-heading
                        align="start"
                        eyebrow="PROFIL KANTOR HUKUM"
                        title="Pendampingan Hukum dengan Pendekatan yang Terukur"
                        description="Kami memahami bahwa setiap persoalan hukum menyangkut reputasi, hak, dan ketenangan klien. Setiap perkara ditangani dengan analisis mendalam, strategi realistis, dan komunikasi yang jujur." />

                    <ul class="law-check-list check-list">
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Analisis dokumen dan konstruksi hukum secara cermat sebelum melangkah</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Kerahasiaan informasi dan privasi klien sebagai komitmen etika mutlak</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Strategi hukum terarah yang disesuaikan dengan konteks perkara</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Pelaporan perkembangan secara berkala, transparan, dan bertanggung jawab</span>
                        </li>
                    </ul>

                    <div class="d-flex flex-column flex-sm-row align-items-stretch align-items-sm-center gap-3 mt-4 pt-2">
                        <a href="{{ route('about') }}" class="btn btn-navy law-btn-navy">
                            <span>Kenali Kami Lebih Dekat</span>
                            <i class="fa-solid fa-arrow-right ms-2"></i>
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-navy law-btn-outline">
                            <span>Hubungi Kami</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 5. ATTORNEYS SECTION (Meet Our Legal Experts - Dark Navy like image.png) --}}
    <section class="law-section law-section-dark">
        <div class="container">
            <x-section-heading
                dark="true"
                eyebrow="TIM KAMI"
                title="Meet Our Legal Experts"
                description="Advokat dan konsultan hukum berdedikasi yang siap mendampingi kebutuhan hukum Anda dengan integritas dan keahlian teruji." />

            <div class="row g-4 align-items-stretch">
                @foreach ($lawyers as $lawyer)
                    <div class="col-sm-6 col-lg-3">
                        <x-lawyer-card :lawyer="$lawyer" />
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-5 pt-2">
                <a href="{{ route('lawyers.index') }}" class="btn btn-gold law-btn-primary px-4 py-3">
                    <span>Lihat Halaman Lengkap Tim Kami</span>
                    <i class="fa-solid fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>

    {{-- 6. TRUST RECORD & CLIENT PERSPECTIVES (Side-by-side like image.png) --}}
    <section class="law-section section">
        <div class="container">
            <div class="row g-5">
                {{-- Left Column: Trust Indicators (Safe & Verified without fake numbers) --}}
                <div class="col-lg-6">
                    <x-section-heading
                        align="start"
                        eyebrow="PRINSIP & REKAM PENDAMPINGAN"
                        title="Standar Kepercayaan & Integritas"
                        description="Prinsip kerja profesional yang memastikan setiap langkah hukum ditempuh dengan akuntabilitas dan dedikasi penuh." />

                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="law-trust-card">
                                <div class="law-trust-icon">
                                    <i class="fa-solid fa-shield-halved"></i>
                                </div>
                                <div class="law-trust-content">
                                    <h4>Integritas Profesi</h4>
                                    <p>Menjunjung tinggi kode etik advokat dan kepatuhan hukum.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="law-trust-card">
                                <div class="law-trust-icon">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                                <div class="law-trust-content">
                                    <h4>Ketelitian Analisis</h4>
                                    <p>Penelaahan menyeluruh terhadap fakta dan bukti hukum.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="law-trust-card">
                                <div class="law-trust-icon">
                                    <i class="fa-solid fa-lock"></i>
                                </div>
                                <div class="law-trust-content">
                                    <h4>Kerahasiaan Mutlak</h4>
                                    <p>Standar keamanan informasi dan privasi perkara klien.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="law-trust-card">
                                <div class="law-trust-icon">
                                    <i class="fa-solid fa-bullseye"></i>
                                </div>
                                <div class="law-trust-content">
                                    <h4>Orientasi Solusi</h4>
                                    <p>Fokus pada penyelesaian yang terarah dan efisien.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 pt-2">
                        <a href="{{ route('about') }}" class="btn btn-outline-navy law-btn-outline">
                            <span>Pelajari Nilai-Nilai Kami</span>
                            <i class="fa-solid fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

                {{-- Right Column: Client Perspectives / Testimonial Box --}}
                <div class="col-lg-6 d-flex flex-column">
                    <x-section-heading
                        align="start"
                        eyebrow="SUDUT PANDANG KLIEN"
                        title="Komitmen Pelayanan Kami"
                        description="Bagaimana pendekatan kami memberikan kepastian dan ketenangan bagi klien dalam menghadapi persoalan hukum." />

                    <div class="law-testimonial-box position-relative overflow-hidden flex-grow-1">
                        {{-- Subtle Justice Symbol Watermark --}}
                        <div class="law-testimonial-watermark" aria-hidden="true">
                            <picture>
                                <source srcset="{{ asset('assets/images/simbol-justice.webp') }}" type="image/webp">
                                <img src="{{ asset('assets/images/simbol-justice.webp') }}"
                                     alt="Simbol Keadilan - Holong Siregar &amp; Co."
                                     width="800"
                                     height="883"
                                     loading="lazy">
                            </picture>
                        </div>
                        <div class="position-relative" style="z-index: 2;">
                            <div class="law-quote-icon">
                                <i class="fa-solid fa-quote-left"></i>
                            </div>
                            <p class="law-testimonial-text">
                                “Holong Siregar & Co. memberikan panduan hukum yang jernih, terarah, dan transparan sejak awal konsultasi. Kami tidak hanya didampingi secara prosedural, tetapi juga dibantu memahami seluruh konsekuensi dan opsi terbaik untuk bisnis kami.”
                            </p>
                        </div>
                        <div class="law-testimonial-author position-relative" style="z-index: 2;">
                            <div class="law-strip-icon me-2" style="width:40px;height:40px;font-size:1.1rem;">
                                <i class="fa-solid fa-building"></i>
                            </div>
                            <div class="law-author-info">
                                <strong>Klien Korporasi & Bisnis</strong>
                                <small>Konsultasi Kontrak & Tata Kelola Usaha</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 6.5 CAKUPAN WILAYAH LAYANAN HUKUM (Local SEO: Pengacara di Tangerang & Bogor) --}}
    <section class="law-section law-section-soft section" id="wilayah-hukum">
        <div class="container">
            <x-section-heading
                eyebrow="CAKUPAN WILAYAH PRAKTIK"
                title="Kantor Pengacara di Tangerang &amp; Bogor"
                description="Holong Siregar &amp; Co. Law Office hadir dengan dua basis operasional untuk mendampingi persoalan hukum perorangan, bisnis, dan korporasi di wilayah Tangerang Raya, Bogor, dan Jabodetabek." />

            <div class="row g-4">
                {{-- Card Tangerang --}}
                <div class="col-lg-6">
                    <div class="law-card p-4 p-md-5 h-100 bg-white border d-flex flex-column">
                        <div class="d-flex align-items-center gap-3 mb-4">
                            <div class="law-strip-icon" style="width: 52px; height: 52px; font-size: 1.4rem;">
                                <i class="fa-solid fa-scale-balanced text-gold"></i>
                            </div>
                            <div>
                                <span class="badge bg-gold text-white px-2 py-1 small mb-1">Kantor Cabang Tangerang</span>
                                <h3 class="h4 law-heading mb-0">Advokat &amp; Pengacara di Tangerang</h3>
                            </div>
                        </div>

                        <p class="text-muted mb-3">
                            Melayani pendampingan perkara litigasi di <strong>Pengadilan Negeri Tangerang</strong>, <strong>Pengadilan Agama Tangerang</strong>,
                            Polres Metro Tangerang Kota, serta konsultasi non-litigasi bagi masyarakat dan pelaku usaha di seluruh penjuru Tangerang:
                        </p>

                        <div class="row g-2 mb-4">
                            <div class="col-sm-6">
                                <ul class="list-unstyled small mb-0 d-flex flex-column gap-2 text-secondary">
                                    <li><i class="fa-solid fa-location-dot text-gold me-2"></i><strong>Kota Tangerang:</strong> Periuk, Karawaci, Cikokol, Cipondoh, Batuceper, Neglasari</li>
                                    <li><i class="fa-solid fa-location-dot text-gold me-2"></i><strong>Tangerang Selatan:</strong> BSD City, Serpong, Alam Sutera, Gading Serpong, Bintaro</li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled small mb-0 d-flex flex-column gap-2 text-secondary">
                                    <li><i class="fa-solid fa-location-dot text-gold me-2"></i><strong>Kab. Tangerang:</strong> Lippo Village, Cikupa, Balaraja, Pasar Kemis, Tigaraksa</li>
                                    <li><i class="fa-solid fa-location-dot text-gold me-2"></i><strong>Layanan Utama:</strong> Perdata, Pidana, Perceraian, Sengketa Tanah, Legal Bisnis</li>
                                </ul>
                            </div>
                        </div>

                        <div class="p-3 bg-light rounded-3 mb-4 border mt-auto">
                            <div class="d-flex align-items-start gap-2">
                                <i class="fa-solid fa-map-pin text-gold mt-1 flex-shrink-0"></i>
                                <div class="small">
                                    <strong class="text-navy d-block">Alamat Kantor Tangerang:</strong>
                                    <span class="text-muted">Villa Grand Tomang, Periuk, Kota Tangerang, Banten</span>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex gap-2 flex-wrap">
                            <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener" class="btn btn-gold law-btn-primary btn-sm">
                                <i class="fa-brands fa-whatsapp me-1"></i>Konsultasi Pengacara Tangerang
                            </a>
                            <a href="{{ route('contact') }}" class="btn btn-outline-navy law-btn-outline btn-sm">
                                Detail Kantor Tangerang
                            </a>
                        </div>
                    </div>
                </div>

                {{-- Card Bogor --}}
                <div class="col-lg-6">
                    <div class="law-card p-4 p-md-5 h-100 bg-white border d-flex flex-column">
                        <div class="d-flex align-items-center gap-3 mb-4">
                            <div class="law-strip-icon" style="width: 52px; height: 52px; font-size: 1.4rem;">
                                <i class="fa-solid fa-landmark text-gold"></i>
                            </div>
                            <div>
                                <span class="badge bg-secondary text-white px-2 py-1 small mb-1">Kantor Pusat Bogor</span>
                                <h3 class="h4 law-heading mb-0">Advokat &amp; Pengacara di Bogor</h3>
                            </div>
                        </div>

                        <p class="text-muted mb-3">
                            Melayani pendampingan perkara di <strong>Pengadilan Negeri Bogor</strong>, <strong>Pengadilan Negeri Cibinong</strong>,
                            Pengadilan Agama Bogor, Polresta Bogor Kota, serta pendampingan korporasi dan hukum keluarga di:
                        </p>

                        <div class="row g-2 mb-4">
                            <div class="col-sm-6">
                                <ul class="list-unstyled small mb-0 d-flex flex-column gap-2 text-secondary">
                                    <li><i class="fa-solid fa-location-dot text-gold me-2"></i><strong>Kota Bogor:</strong> Bogor Tengah, Bogor Selatan, Bogor Barat, Bogor Timur, Tanah Sareal</li>
                                    <li><i class="fa-solid fa-location-dot text-gold me-2"></i><strong>Kabupaten Bogor:</strong> Cibinong, Sentul City, Bojonggede, Cileungsi, Gunung Putri</li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled small mb-0 d-flex flex-column gap-2 text-secondary">
                                    <li><i class="fa-solid fa-location-dot text-gold me-2"></i><strong>Wilayah Sekitar:</strong> Parung, Dramaga, Ciawi, Tajur, Sukaraja</li>
                                    <li><i class="fa-solid fa-location-dot text-gold me-2"></i><strong>Layanan Utama:</strong> Gugatan Perdata, Pembelaan Pidana, Sengketa Waris &amp; Tanah</li>
                                </ul>
                            </div>
                        </div>

                        <div class="p-3 bg-light rounded-3 mb-4 border mt-auto">
                            <div class="d-flex align-items-start gap-2">
                                <i class="fa-solid fa-map-pin text-gold mt-1 flex-shrink-0"></i>
                                <div class="small">
                                    <strong class="text-navy d-block">Alamat Kantor Bogor:</strong>
                                    <span class="text-muted">Aspol Panaragan Kidul RT/RW: 04/04, Kec. Bogor Tengah, Kota Bogor, Jawa Barat</span>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex gap-2 flex-wrap">
                            <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener" class="btn btn-navy law-btn-navy btn-sm">
                                <i class="fa-brands fa-whatsapp me-1"></i>Konsultasi Pengacara Bogor
                            </a>
                            <a href="{{ route('contact') }}" class="btn btn-outline-navy law-btn-outline btn-sm">
                                Detail Kantor Bogor
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 7. CONSULTATION SECTION (Full-Width Dark Navy Banner with Form - like image.png) --}}
    <section class="law-consultation-section position-relative overflow-hidden" id="consultation-section">
        {{-- Artistic Justice Symbol Ambient Watermark --}}
        <div class="law-consultation-watermark" aria-hidden="true">
            <picture>
                <source srcset="{{ asset('assets/images/simbol-justice.webp') }}" type="image/webp">
                <img src="{{ asset('assets/images/simbol-justice.webp') }}"
                     alt="Simbol Keadilan - Holong Siregar &amp; Co."
                     width="800"
                     height="883"
                     loading="lazy">
            </picture>
        </div>

        <div class="container position-relative" style="z-index: 2;">
            <div class="row g-5 align-items-center">
                {{-- Left: Consultation Heading & Trust Checks --}}
                <div class="col-lg-5">
                    <div class="law-consultation-heading">
                        <span class="law-hero-badge">
                            <i class="fa-solid fa-comments text-gold"></i>
                            KONSULTASI AWAL
                        </span>
                        <h2>Jadwalkan Konsultasi dengan Tim Kami</h2>
                        <p>
                            Sampaikan ringkasan kebutuhan hukum Anda secara aman. Tim advokat kami siap melakukan
                            telaah awal, memetakan risiko, dan memberikan arahan langkah terbaik.
                        </p>
                    </div>

                    <ul class="law-consultation-check">
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span>100% Kerahasiaan Informasi Terjamin</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Ditangani oleh Advokat Berpengalaman</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Analisis Awal Terarah &amp; Transparan</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            <span>Tanggapan Cepat dalam Jam Operasional</span>
                        </li>
                    </ul>

                    <div class="mt-4 pt-2">
                        <p class="text-white small mb-2">Membutuhkan respon langsung?</p>
                        <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener" class="btn btn-outline-light">
                            <i class="fa-brands fa-whatsapp text-success me-2"></i>Konsultasi via WhatsApp
                        </a>
                    </div>
                </div>

                {{-- Right: Direct Consultation Form --}}
                <div class="col-lg-7">
                    <div class="law-consultation-form-card">
                        <form id="homeConsultationForm" class="law-consultation-form law-form-dark" method="POST" action="{{ route('contact.store') }}" novalidate>
                            @csrf

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="home_name">Nama Lengkap *</label>
                                    <input class="form-control @error('name') is-invalid @enderror"
                                           type="text"
                                           id="home_name"
                                           name="name"
                                           value="{{ old('name') }}"
                                           placeholder="cth. Budi Santoso"
                                           required
                                           maxlength="100">
                                    @error('name')<div class="invalid-feedback text-white">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label" for="home_phone">Nomor WhatsApp *</label>
                                    <input class="form-control @error('phone') is-invalid @enderror"
                                           type="tel"
                                           id="home_phone"
                                           name="phone"
                                           value="{{ old('phone') }}"
                                           placeholder="cth. 081234567890"
                                           required
                                           maxlength="20">
                                    @error('phone')<div class="invalid-feedback text-white">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label" for="home_legal_need">Bidang Layanan Hukum *</label>
                                    <select class="form-select @error('legal_need') is-invalid @enderror"
                                            id="home_legal_need"
                                            name="legal_need"
                                            required>
                                        <option value="">— Pilih Bidang Layanan —</option>
                                        @foreach (config('lawfirm.services', []) as $s)
                                            <option value="{{ $s['title'] }}" @selected(old('legal_need') === $s['title'])>
                                                {{ $s['title'] }}
                                            </option>
                                        @endforeach
                                        <option value="Lainnya" @selected(old('legal_need') === 'Lainnya')>Lainnya</option>
                                    </select>
                                    @error('legal_need')<div class="invalid-feedback text-white">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-12">
                                    <label class="form-label" for="home_message">Ringkasan Permasalahan *</label>
                                    <textarea class="form-control @error('message') is-invalid @enderror"
                                              id="home_message"
                                              name="message"
                                              rows="4"
                                              placeholder="Tuliskan secara ringkas kronologi atau kebutuhan hukum Anda..."
                                              required
                                              maxlength="3000">{{ old('message') }}</textarea>
                                    @error('message')<div class="invalid-feedback text-white">{{ $message }}</div>@enderror
                                </div>

                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input @error('agreement') is-invalid @enderror"
                                               type="checkbox"
                                               id="home_agreement"
                                               name="agreement"
                                               value="1"
                                               @checked(old('agreement', 1))
                                               required>
                                        <label class="form-check-label" for="home_agreement">
                                            Saya memahami bahwa pengiriman formulir ini merupakan permintaan awal dan tidak otomatis membentuk hubungan advokat–klien sebelum konfirmasi resmi kantor. *
                                        </label>
                                        @error('agreement')<div class="invalid-feedback text-white d-block">{{ $message }}</div>@enderror
                                    </div>
                                </div>

                                <div class="col-12 pt-2">
                                    <button type="submit" class="btn btn-gold law-btn-primary btn-lg w-100">
                                        <i class="fa-brands fa-whatsapp me-2"></i>Kirim Konsultasi ke WhatsApp
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 8. FAQ SECTION --}}
    <section class="law-section section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <x-section-heading
                        align="center"
                        eyebrow="FAQ"
                        title="Frequently Asked Questions"
                        description="Jawaban ringkas atas pertanyaan yang sering diajukan klien sebelum memulai pendampingan hukum bersama kami." />

                    @php
                        $homeFaqs = array_slice(config('lawfirm.faqs', []), 0, 5);
                    @endphp

                    <div class="accordion law-accordion" id="homeFaqAccordion">
                        @foreach ($homeFaqs as $index => $faq)
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingHomeFaq{{ $index }}">
                                    <button class="accordion-button {{ $index !== 0 ? 'collapsed' : '' }}"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapseHomeFaq{{ $index }}"
                                            aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                            aria-controls="collapseHomeFaq{{ $index }}">
                                        {{ $faq['q'] }}
                                    </button>
                                </h3>
                                <div id="collapseHomeFaq{{ $index }}"
                                     class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                                     aria-labelledby="headingHomeFaq{{ $index }}"
                                     data-bs-parent="#homeFaqAccordion">
                                    <div class="accordion-body">
                                        {{ $faq['a'] }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="text-center mt-4 pt-2">
                        <a href="{{ route('faq') }}" class="btn btn-outline-navy law-btn-outline">
                            <span>Lihat Semua Pertanyaan (FAQ)</span>
                            <i class="fa-solid fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Bottom Floating Action CTA --}}
    <x-cta />
@endsection
