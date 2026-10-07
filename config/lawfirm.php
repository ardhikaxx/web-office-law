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
        'email' => 'lawofficeholongsiregar@gmail.com',
        'phone' => '0857-7163-3860',
        'whatsapp' => '6285771633860',
        'whatsapp_display' => '0857-7163-3860',
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
            'name' => 'HOLONG SIREGAR, S.H.',
            'slug' => 'holong-siregar',
            'position' => 'MANAGING PARTNER',
            'specialization' => 'Litigasi Perdata & Korporasi',
            'photo' => 'images/lawyers/holong-siregar.jpg',
            'has_detail' => true,
            'short_bio' => 'Advokat berlisensi dengan rekam jejak litigasi perdata, pidana, korporasi, perbankan, dan kepemimpinan organisasi.',
            'bio' => 'Awal memilih disiplin keilmuan dengan mengikuti profesi pengacara yang pada saat sumpah profesi pada Pengadilan Tinggi Banten menjadi yang termuda ditahun 2017, kemudian memulai karier dengan bergabung pada salah satu kantor hukum yang mendapatkan Penghargaan Indonesia 50 Best Lawyer THE MOST TRUSTED & RECOGNIZED AWARD IN INDONESIA ditahun 2019, selain itu juga aktif dalam membuat tulisan-tulisan dan/atau pendapat-pendapat hukum atas persoalan masalah hukum di Indonesia dan dari kantor hukum juga telah bergabung pada perusahaan pembiayaan dan BANK dengan keilmuan yang dimilikinya. Diluar dari profesi hukum mengikuti keorganisasian kepemudaan sebagai ketua tingkat kota ditahun 2017, wakil ketua organisasi kepemudaan tingkat provinsi di tahun 2021 dan Pengurus Organisasi Kemasyarakatan tingkat Kota ditahun 2022.',
            'education' => [
                'S1 – Sarjana Hukum',
            ],
            'experience' => [
                'Sumpah Profesi Advokat Pengadilan Tinggi Banten (Termuda Tahun 2017)',
                'Bergabung pada kantor hukum peraih Penghargaan Indonesia 50 Best Lawyer THE MOST TRUSTED & RECOGNIZED AWARD IN INDONESIA (2019)',
                'Penasihat hukum & advokat pada perusahaan pembiayaan dan institusi perbankan',
                'Aktif membuat tulisan dan pendapat hukum atas persoalan hukum di Indonesia',
            ],
            'organizations' => [
                'Ketua Organisasi Kepemudaan Tingkat Kota (2017)',
                'Wakil Ketua Organisasi Kepemudaan Tingkat Provinsi (2021)',
                'Pengurus Organisasi Kemasyarakatan Tingkat Kota (2022)',
                'Perhimpunan Advokat Indonesia (PERADI)',
            ],
        ],
        [
            'name' => 'M.AKUNG KURNIA R, S.H., M.H.',
            'slug' => 'm-akung-kurnia-r',
            'position' => 'PARTNER',
            'specialization' => 'Praktisi & Akademisi Hukum',
            'photo' => 'images/lawyers/m-akung-kurnia.jpg',
            'has_detail' => true,
            'short_bio' => 'Sebagai Praktisi & Akademisi pada salah satu Universitas di Tangerang, yang saat ini juga sedang menempuh Pendidikannya S3.',
            'bio' => 'Sebagai Praktisi & Akademisi pada salah satu Universitas di Tangerang, yang saat ini juga sedang menempuh Pendidikannya S3.',
            'education' => [
                'S1 – Univ. Muhammadiyah Tangerang',
                'S2 – Univ. Muhammadiyah Tangerang',
                'S3 – Sedang Menempuh Pendidikan Doktoral (S3)',
            ],
            'experience' => [
                'Praktisi Hukum & Advokat',
                'Akademisi / Dosen Ilmu Hukum Universitas di Tangerang',
            ],
            'organizations' => [
                'Perhimpunan Advokat Indonesia (PERADI)',
            ],
        ],
        [
            'name' => 'ADYTIA RACHMAN, S.H.',
            'slug' => 'adytia-rachman',
            'position' => 'PARTNER',
            'specialization' => 'Advokat & Praktisi Hukum',
            'photo' => 'images/lawyers/adytia-rachman.jpg',
            'has_detail' => true,
            'short_bio' => 'Memulai karier pada Institusi Badan Narkotika Nasional (BNN) sebelum memutuskan berkarier penuh sebagai Advokat.',
            'bio' => 'Dengan memulai bekerja pada Institusi Badan Narkotika Nasional (BNN) yang pada akhirnya memutuskan keluar dan memulai karier sebagai Advokat.',
            'education' => [
                'S1 – Universitas Esa Unggul',
            ],
            'experience' => [
                'Institusi Badan Narkotika Nasional (BNN)',
                'Praktisi Hukum & Advokat',
            ],
            'organizations' => [
                'Perhimpunan Advokat Indonesia (PERADI)',
            ],
        ],
        [
            'name' => 'DAUD WILTON PURBA, S.H.',
            'slug' => 'daud-wilton-purba',
            'position' => 'PARTNER',
            'specialization' => 'Praktisi Hukum & Advokat Pajak',
            'photo' => 'images/lawyers/daud-wilton.jpg',
            'has_detail' => true,
            'short_bio' => 'Praktisi Hukum & Member IKHAPI yang sedang menempuh Pendidikan S-2 di Universitas Harapan Indonesia.',
            'bio' => 'Sebagai Praktisi Hukum & Member dari Ikatan Kuasa Hukum dan Advokat Pajak Indonesia (IKHAPI) yang juga sedang menempuh Pendidikan S-2 di Universitas Harapan Indonesia.',
            'education' => [
                'S1 – Universitas Esa Unggul',
                'S2 – Universitas Harapan Indonesia (Sedang Menempuh Pendidikan S-2)',
            ],
            'experience' => [
                'Praktisi Hukum & Advokat',
                'Kuasa Hukum & Advokat Perpajakan',
            ],
            'organizations' => [
                'Ikatan Kuasa Hukum dan Advokat Pajak Indonesia (IKHAPI)',
                'Perhimpunan Advokat Indonesia (PERADI)',
            ],
        ],
        [
            'name' => 'AKTOVEN L. RUMAPEA, S.H.',
            'slug' => 'aktoven-l-rumapea',
            'position' => 'SENIOR ASSOCIATE',
            'specialization' => 'Senior Associate',
            'photo' => 'images/lawyers/aktoven.jpg',
            'has_detail' => true,
            'short_bio' => 'Senior Associate berlatar belakang pendidikan Sarjana Hukum dari Universitas Indonesia.',
            'bio' => 'Senior Associate pada Holong Siregar & Co. Law Office, berfokus pada pendampingan hukum dan penanganan perkara klien.',
            'education' => [
                'S1 – Universitas Indonesia',
            ],
            'experience' => [
                'Senior Associate Advokat',
                'Penanganan Perkara & Analisis Hukum',
            ],
            'organizations' => [
                'Perhimpunan Advokat Indonesia (PERADI)',
            ],
        ],
        [
            'name' => 'YUDHA ANTARIKSA PUTRA, S.H.',
            'slug' => 'yudha-antariksa-putra',
            'position' => 'ASSOCIATE',
            'specialization' => 'Associate',
            'photo' => 'images/lawyers/yudha-antariksa.jpg',
            'has_detail' => true,
            'short_bio' => 'Associate advokat berlatar belakang pendidikan Sarjana Hukum dari Universitas Esa Unggul.',
            'bio' => 'Associate pada Holong Siregar & Co. Law Office, mendampingi proses riset hukum, telaah perkara, dan koordinasi pendampingan klien.',
            'education' => [
                'S1 – Universitas Esa Unggul',
            ],
            'experience' => [
                'Legal Associate',
                'Riset Regulasi & Pendampingan Kasus',
            ],
            'organizations' => [
                'Perhimpunan Advokat Indonesia (PERADI)',
            ],
        ],
        [
            'name' => 'FELIX JONATHAN, S.H.',
            'slug' => 'felix-jonathan',
            'position' => 'SENIOR LEGAL',
            'specialization' => 'Senior Legal',
            'photo' => 'images/lawyers/felix-jonathan.jpg',
            'has_detail' => false,
            'short_bio' => 'Senior Legal pada Holong Siregar & Co. Law Office.',
            'bio' => null,
            'education' => [],
            'experience' => [],
            'organizations' => [],
        ],
        [
            'name' => 'DANIEL SORMIN',
            'slug' => 'daniel-sormin',
            'position' => 'LEGAL STAFF',
            'specialization' => 'Legal Staff',
            'photo' => 'images/lawyers/daniel.jpg',
            'has_detail' => false,
            'short_bio' => 'Legal Staff pada Holong Siregar & Co. Law Office.',
            'bio' => null,
            'education' => [],
            'experience' => [],
            'organizations' => [],
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
