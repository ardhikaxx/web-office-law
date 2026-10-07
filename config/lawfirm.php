<?php

/*
|--------------------------------------------------------------------------
| Holong Siregar & Co. Law Office — Hard-coded Site Data
|--------------------------------------------------------------------------
| Seluruh konten bersifat hard-coded (tanpa database) agar website dapat
| langsung berjalan. Untuk mengganti info kantor cukup edit bagian 'site'.
| Data layanan, tim, dll cukup edit array di bawah.
*/

return [

    'site' => [
        'name' => 'Holong Siregar & Co.',
        'full_name' => 'Holong Siregar & Co. Law Office',
        'tagline' => 'Solusi Hukum yang Tegas, Terukur, dan Terpercaya',
        'description' => 'Holong Siregar & Co. memberikan pendampingan hukum profesional melalui analisis yang cermat, strategi yang relevan, serta komunikasi yang bertanggung jawab.',
        'address' => '[Alamat Kantor]',
        'city' => '[Kota]',
        'email' => '[Email Resmi]',
        'phone' => '[Nomor Telepon Kantor]',
        'whatsapp' => '6281234567890',
        'whatsapp_display' => '+62 812-3456-7890',
        'whatsapp_message' => 'Halo Holong Siregar & Co., saya ingin berkonsultasi mengenai kebutuhan hukum saya.',
        'hours' => 'Senin – Jumat, 09.00 – 17.00 WIB',
        'instagram' => '#',
        'linkedin' => '#',
        'facebook' => '#',
        'maps_embed' => null,
    ],

    'services' => [
        [
            'title' => 'Perdata Umum & Khusus',
            'slug' => 'perdata-umum-khusus',
            'icon' => 'fa-solid fa-building-columns',
            'short_description' => 'Pendampingan untuk persoalan perdata, hak dan kewajiban para pihak, serta penyelesaian sengketa terkait.',
            'description' => 'Layanan pendampingan persoalan hukum perdata umum dan khusus, meliputi analisis hak dan kewajiban para pihak, wanprestasi kontrak, perbuatan melawan hukum (onrechtmatige daad), sengketa keperdataan, serta pendampingan penyelesaian perselisihan melalui musyawarah, mediasi, maupun persidangan litigasi di pengadilan.',
            'scopes' => ['Analisis hak & kewajiban kontraktual', 'Wanprestasi & ganti kerugian', 'Perbuatan melawan hukum (PMH)', 'Sengketa perdata & gugatan', 'Musyawarah, mediasi & litigasi'],
            'image' => 'images/services/perdata.svg',
        ],
        [
            'title' => 'Pidana Umum & Khusus',
            'slug' => 'pidana-umum-khusus',
            'icon' => 'fa-solid fa-shield-halved',
            'short_description' => 'Pendampingan dalam penanganan perkara pidana dengan pendekatan yang cermat terhadap fakta dan prosedur.',
            'description' => 'Pendampingan perkara pidana umum dan khusus dengan pendekatan yang cermat terhadap fakta, alat bukti, dan prosedur hukum acara. Kami mendampingi klien pada tahap penyelidikan, penyidikan, penuntutan, hingga persidangan, dengan menjunjung asas praduga tak bersalah dan hak-hak klien.',
            'scopes' => ['Pendampingan penyelidikan & penyidikan', 'Analisis konstruksi perkara', 'Pendampingan persidangan', 'Upaya hukum & peninjauan', 'Perlindungan hak tersangka/terdakwa & korban'],
            'image' => 'images/services/pidana.svg',
        ],
        [
            'title' => 'Legal Contract & Review Contract',
            'slug' => 'legal-contract-review-contract',
            'icon' => 'fa-regular fa-file-lines',
            'short_description' => 'Penyusunan, penelaahan, dan perbaikan kontrak untuk memperjelas hak, kewajiban, dan mitigasi risiko.',
            'description' => 'Layanan penyusunan (drafting), pemeriksaan (review), penelaahan, negosiasi, dan perbaikan kontrak bisnis. Fokus kami adalah memperjelas hak dan kewajiban para pihak, mengidentifikasi klausul berisiko, serta menyusun bahasa kontrak yang melindungi kepentingan klien dan memitigasi potensi sengketa.',
            'scopes' => ['Contract drafting & review', 'Analisis risiko klausul', 'Negosiasi kontrak', 'MoU, NDA & perjanjian kerja sama', 'Opini hukum atas kontrak'],
            'image' => 'images/services/kontrak.svg',
        ],
        [
            'title' => 'Hukum Keluarga & Perceraian',
            'slug' => 'hukum-keluarga-perceraian',
            'icon' => 'fa-regular fa-heart',
            'short_description' => 'Pendampingan hukum keluarga dengan komunikasi yang bijaksana dan perhatian pada kebutuhan setiap pihak.',
            'description' => 'Pendampingan persoalan hukum keluarga dan perceraian dengan pendekatan yang mengutamakan kerahasiaan, proporsionalitas, kebijaksanaan, dan penyelesaian yang bermartabat bagi seluruh pihak.',
            'scopes' => ['Perkawinan & perceraian', 'Perjanjian perkawinan (prenup & postnup)', 'Hak asuh & nafkah anak', 'Waris & hibah', 'Pembagian harta bersama'],
            'image' => 'images/services/keluarga.svg',
        ],
        [
            'title' => 'Hukum Perusahaan',
            'slug' => 'hukum-perusahaan',
            'icon' => 'fa-regular fa-building',
            'short_description' => 'Pendampingan kebutuhan hukum perusahaan, tata kelola, dokumen bisnis, dan hubungan komersial.',
            'description' => 'Pendampingan kebutuhan hukum perusahaan dan bisnis, meliputi pendirian dan perubahan badan usaha, tata kelola perusahaan, dokumen bisnis, transaksi kemitraan komersial, serta kepatuhan regulasi agar kegiatan usaha berjalan aman dan tertib hukum.',
            'scopes' => ['Pendirian & legalitas badan usaha', 'Tata kelola korporasi (governance)', 'Dokumen bisnis & hubungan komersial', 'Transaksi & kemitraan usaha', 'Kepatuhan regulasi & perizinan'],
            'image' => 'images/services/korporasi.svg',
        ],
        [
            'title' => 'Legal Konsultasi',
            'slug' => 'legal-konsultasi',
            'icon' => 'fa-regular fa-comments',
            'short_description' => 'Konsultasi awal untuk memahami persoalan, mempertimbangkan opsi, dan menentukan arah tindak lanjut.',
            'description' => 'Layanan konsultasi awal untuk membantu klien memetakan persoalan hukum secara menyeluruh, mempertimbangkan setiap opsi solusi, menganalisis risiko, dan menentukan arah langkah tindak lanjut yang tepat.',
            'scopes' => ['Pemetaan & telaah awal masalah hukum', 'Analisis risiko & dasar regulasi', 'Pertimbangan opsi penyelesaian', 'Rekomendasi langkah strategis', 'Legal opinion ringkas'],
            'image' => 'images/services/konsultasi.svg',
        ],
        [
            'title' => 'Recovery Asset',
            'slug' => 'recovery-asset',
            'icon' => 'fa-solid fa-box-archive',
            'short_description' => 'Pendampingan dalam upaya pemulihan aset melalui penelaahan fakta, dokumen, serta strategi hukum yang sesuai dengan kebutuhan penanganan.',
            'description' => 'Pendampingan komprehensif dalam upaya pemulihan dan pengamanan aset klien melalui penelaahan mendalam terhadap fakta hukum, riwayat transaksi, verifikasi dokumen kepemilikan, negosiasi, hingga strategi hukum penyelesaian yang terukur.',
            'scopes' => ['Penelaahan fakta & dokumen kepemilikan', 'Investigasi & pelacakan aset', 'Upaya hukum pengamanan & pemulihan', 'Negosiasi restrukturisasi damai', 'Eksekusi hak kepemilikan'],
            'image' => 'images/services/recovery-asset.svg',
        ],
    ],

    'practice_areas' => [
        [
            'title' => 'Litigasi',
            'slug' => 'litigasi',
            'type' => 'Litigasi',
            'icon' => 'fa-solid fa-gavel',
            'short_description' => 'Pendampingan perkara dan penyelesaian sengketa melalui jalur hukum secara terstruktur dan berorientasi pada kepentingan klien.',
            'description' => 'Area praktik Litigasi mencakup pendampingan perkara perdata, pidana, hubungan industrial, dan sengketa lainnya di pengadilan. Pendekatan kami meliputi persiapan perkara yang cermat, analisis dokumen dan alat bukti, penyusunan strategi, pendampingan persidangan, negosiasi di sela proses, serta evaluasi hasil secara terbuka kepada klien.',
            'points' => ['Persiapan & analisis perkara', 'Analisis dokumen & alat bukti', 'Penyusunan strategi berperkara', 'Pendampingan persidangan', 'Negosiasi & upaya hukum'],
            'image' => 'images/practice/litigasi.svg',
        ],
        [
            'title' => 'Non-Litigasi',
            'slug' => 'non-litigasi',
            'type' => 'Non-Litigasi',
            'icon' => 'fa-solid fa-file-lines',
            'short_description' => 'Konsultasi, penyusunan dan peninjauan kontrak, legal opinion, transaksi, serta pencegahan risiko hukum.',
            'description' => 'Area praktik Non-Litigasi mencakup konsultasi hukum, legal review, penyusunan dan penelaahan kontrak (contract drafting & review), legal opinion, pendampingan transaksi, corporate legal support, due diligence, serta mitigasi risiko agar persoalan hukum dapat dicegah sebelum menjadi sengketa.',
            'points' => ['Konsultasi & legal opinion', 'Contract drafting & review', 'Corporate legal support', 'Transaksi & due diligence', 'Mitigasi risiko hukum'],
            'image' => 'images/practice/non-litigasi.svg',
        ],
    ],

    'lawyers' => [
        [
            'name' => 'Holong Siregar, S.H., M.H.',
            'slug' => 'holong-siregar',
            'position' => 'Founder & Managing Partner',
            'specialization' => 'Litigasi Perdata & Korporasi',
            'photo' => 'images/lawyers/lawyer-1.svg',
            'short_bio' => 'Memimpin strategi pendampingan perkara dan layanan korporasi dengan pendekatan yang cermat dan berintegritas.',
            'bio' => 'Advokat dan pendiri kantor dengan fokus pada litigasi perdata dan pendampingan korporasi. Berperan menyusun strategi perkara, memimpin analisis hukum, serta memastikan setiap pendampingan berjalan terukur, terdokumentasi, dan terkomunikasikan dengan baik kepada klien.',
            'education' => ['Sarjana Hukum — [Universitas]', 'Magister Hukum — [Universitas]'],
            'experience' => ['Pendampingan sengketa perdata & bisnis', 'Penanganan perkara korporasi', 'Penyusunan strategi litigasi'],
            'organizations' => ['Perhimpunan Advokat Indonesia (PERADI)'],
        ],
        [
            'name' => '[Nama Advokat]',
            'slug' => 'advokat-pidana',
            'position' => 'Partner — Pidana',
            'specialization' => 'Pidana Umum & Khusus',
            'photo' => 'images/lawyers/lawyer-2.svg',
            'short_bio' => 'Fokus pada pendampingan perkara pidana dengan ketelitian fakta dan prosedur hukum acara.',
            'bio' => 'Advokat dengan fokus pada pendampingan perkara pidana umum dan khusus. Mendampingi klien sejak tahap awal proses hukum dengan menekankan ketelitian fakta, prosedur, dan perlindungan hak-hak klien.',
            'education' => ['Sarjana Hukum — [Universitas]'],
            'experience' => ['Pendampingan penyelidikan & penyidikan', 'Pendampingan persidangan pidana'],
            'organizations' => ['Perhimpunan Advokat Indonesia (PERADI)'],
        ],
        [
            'name' => '[Nama Advokat]',
            'slug' => 'advokat-kontrak-korporasi',
            'position' => 'Senior Associate — Kontrak & Korporasi',
            'specialization' => 'Kontrak, Korporasi & Bisnis',
            'photo' => 'images/lawyers/lawyer-3.svg',
            'short_bio' => 'Menangani penyusunan kontrak, transaksi bisnis, dan kepatuhan korporasi.',
            'bio' => 'Fokus pada layanan non-litigasi: penyusunan dan penelaahan kontrak, transaksi bisnis, serta pendampingan korporasi. Memastikan setiap dokumen hukum tersusun jelas dan memitigasi risiko bagi klien.',
            'education' => ['Sarjana Hukum — [Universitas]'],
            'experience' => ['Contract drafting & review', 'Pendampingan transaksi bisnis'],
            'organizations' => ['Perhimpunan Advokat Indonesia (PERADI)'],
        ],
        [
            'name' => '[Nama Advokat]',
            'slug' => 'advokat-keluarga-properti',
            'position' => 'Associate — Keluarga & Properti',
            'specialization' => 'Keluarga, Pertanahan & Ketenagakerjaan',
            'photo' => 'images/lawyers/lawyer-4.svg',
            'short_bio' => 'Mendampingi persoalan keluarga, pertanahan, dan ketenagakerjaan secara proporsional.',
            'bio' => 'Mendampingi persoalan hukum keluarga, pertanahan dan properti, serta ketenagakerjaan dengan pendekatan yang mengutamakan kerahasiaan, ketelitian dokumen, dan penyelesaian yang bermartabat.',
            'education' => ['Sarjana Hukum — [Universitas]'],
            'experience' => ['Pendampingan hukum keluarga', 'Pemeriksaan legalitas pertanahan'],
            'organizations' => ['Perhimpunan Advokat Indonesia (PERADI)'],
        ],
    ],

    'vision' => 'Memberikan solusi tepat pada permasalahan hukum, kebutuhan hukum, dan memberikan hasil pelayanan sangat baik kepada klien/mitra yang merupakan standart kami atas dasar Jasa Hukum.',

    'mission' => 'Menjaga komunikasi dengan baik kepada klien/mitra kami secara berkesinambungan dalam pelayanan jasa hukum yang maksimal untuk kepentingan klien/mitra dengan mengutamakan kode Etik Profesi Advokat (OFFICIUM NOBILE).',

    'faqs' => [
        ['q' => 'Bagaimana cara memulai konsultasi?', 'a' => 'Sampaikan ringkasan kebutuhan Anda melalui halaman Kontak atau tombol WhatsApp. Kami akan menerima permintaan konsultasi untuk ditinjau lebih lanjut, kemudian menghubungi Anda untuk langkah berikutnya.'],
        ['q' => 'Apakah mengisi formulir berarti saya sudah menjadi klien?', 'a' => 'Belum. Hubungan advokat–klien terbentuk setelah ada konfirmasi dan kesepakatan penugasan dari kantor, bukan otomatis dari pengiriman formulir atau pembacaan informasi di website.'],
        ['q' => 'Apakah informasi yang saya sampaikan dijaga kerahasiaannya?', 'a' => 'Ya. Setiap permintaan konsultasi ditangani dengan mengutamakan kerahasiaan dan hanya digunakan untuk keperluan peninjauan awal kebutuhan Anda.'],
        ['q' => 'Layanan apa saja yang ditangani kantor?', 'a' => 'Kami menangani perdata umum & khusus, pidana umum & khusus, legal contract & review contract, hukum keluarga & perceraian, hukum perusahaan, legal konsultasi, serta recovery asset baik melalui jalur litigasi maupun non-litigasi.'],
        ['q' => 'Apakah kantor menjanjikan kemenangan perkara?', 'a' => 'Tidak. Kami tidak menjanjikan hasil perkara. Kami memberikan analisis yang cermat, strategi yang relevan, dan pendampingan yang bertanggung jawab sesuai koridor hukum.'],
    ],

    'values' => [
        ['icon' => 'fa-solid fa-shield-halved', 'title' => 'Integritas', 'text' => 'Bekerja jujur, transparan, dan menjunjung etika profesi advokat dalam setiap pendampingan.'],
        ['icon' => 'fa-solid fa-magnifying-glass', 'title' => 'Ketelitian', 'text' => 'Setiap dokumen, fakta, dan regulasi ditelaah cermat sebelum menyusun langkah hukum.'],
        ['icon' => 'fa-solid fa-lock', 'title' => 'Kerahasiaan', 'text' => 'Informasi klien diperlakukan sebagai rahasia dan dijaga dengan standar profesional.'],
        ['icon' => 'fa-solid fa-compass', 'title' => 'Strategi Relevan', 'text' => 'Langkah hukum dirancang sesuai konteks, kebutuhan, dan kepentingan jangka panjang klien.'],
        ['icon' => 'fa-solid fa-comments', 'title' => 'Komunikasi Terbuka', 'text' => 'Perkembangan perkara dikomunikasikan secara jelas, jujur, dan tepat waktu.'],
        ['icon' => 'fa-solid fa-bullseye', 'title' => 'Orientasi Solusi', 'text' => 'Fokus pada penyelesaian yang praktis, efisien, dan memberikan kepastian bagi klien.'],
    ],

];
