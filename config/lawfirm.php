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
        'address' => 'Aspol Panaragan Kidul RT/RW: 04/04, Kec. Bogor Tengah, Kota Bogor',
        'city' => 'Kota Bogor & Kota Tangerang',
        'addresses' => [
            [
                'name' => 'Kantor Bogor',
                'street' => 'Aspol Panaragan Kidul RT/RW: 04/04, Kec. Bogor Tengah',
                'city' => 'Kota Bogor',
                'full' => 'Aspol Panaragan Kidul RT/RW: 04/04, Kec. Bogor Tengah, Kota Bogor',
            ],
            [
                'name' => 'Kantor Tangerang',
                'street' => 'Villa Grand Tomang, Periuk',
                'city' => 'Kota Tangerang',
                'full' => 'Villa Grand Tomang, Periuk, Kota Tangerang',
            ],
        ],
        'email' => 'lawofficeholongsiregar@gmail.com',
        'phone' => '081-3188-41961',
        'phone_2' => '0857-7163-3860',
        'phones' => [
            [
                'number' => '081-3188-41961',
                'clean' => '081318841961',
                'has_whatsapp' => true,
                'label' => 'WhatsApp & Telepon 1',
            ],
            [
                'number' => '0857-7163-3860',
                'clean' => '085771633860',
                'has_whatsapp' => false,
                'label' => 'Telepon 2',
            ],
        ],
        'whatsapp' => '6281318841961',
        'whatsapp_display' => '081-3188-41961',
        'whatsapp_message' => 'Halo Holong Siregar & Co., saya ingin berkonsultasi mengenai kebutuhan hukum saya.',
        'hours' => 'Senin – Sabtu, 08:00 – 17:30 WIB',
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
            'short_description' => 'Pendampingan untuk persoalan perdata, hak dan kewajiban para pihak, serta penyelesaian sengketa terkait di Tangerang & Bogor.',
            'description' => 'Layanan pendampingan persoalan hukum perdata umum dan khusus, meliputi analisis hak dan kewajiban para pihak, wanprestasi kontrak, perbuatan melawan hukum (onrechtmatige daad), sengketa keperdataan, serta pendampingan penyelesaian perselisihan melalui musyawarah, mediasi, maupun persidangan litigasi di pengadilan.',
            'scopes' => ['Analisis hak & kewajiban kontraktual', 'Wanprestasi & ganti kerugian', 'Perbuatan melawan hukum (PMH)', 'Sengketa perdata & gugatan', 'Musyawarah, mediasi & litigasi'],
            'image' => 'images/services/perdata.svg',
            'target_keywords' => ['pengacara perdata tangerang', 'advokat perdata tangerang', 'pengacara wanprestasi tangerang', 'pengacara sengketa tanah tangerang', 'gugatan perdata pn tangerang'],
            'jurisdiction' => 'Pengadilan Negeri Tangerang, Pengadilan Negeri Bogor, Pengadilan Negeri Cibinong, dan wilayah hukum Jabodetabek.',
            'when_needed' => [
                'Mengalami kerugian akibat rekanan bisnis yang wanprestasi (ingkar janji) atau gagal bayar.',
                'Menghadapi sengketa kepemilikan tanah, sertifikat ganda, sengketa sewa-menyewa, atau batas lahan di wilayah Tangerang.',
                'Menerima somasi atau teguran hukum resmi dan memerlukan penyusunan jawaban somasi yang terukur.',
                'Memerlukan kuasa hukum untuk mengajukan gugatan perdata atau menghadapi gugatan di Pengadilan Negeri Tangerang.',
                'Penyelesaian sengketa ganti kerugian akibat perbuatan melawan hukum (onrechtmatige daad).',
            ],
            'workflow' => [
                ['step' => '1', 'title' => 'Konsultasi & Telaah Alat Bukti', 'desc' => 'Pemeriksaan kronologi perkara, keabsahan dokumen perjanjian, korespondensi, dan bukti pendukung secara cermat.'],
                ['step' => '2', 'title' => 'Analisis Yuridis & Negosiasi Damai', 'desc' => 'Penyusunan kajian hukum (legal opinion) serta upaya penyelesaian non-litigasi melalui somasi atau mediasi proporsional.'],
                ['step' => '3', 'title' => 'Pendaftaran Gugatan / Pembelaan', 'desc' => 'Penyusunan gugatan, replik, duplik, pembuktian, dan kesimpulan di hadapan majelis hakim pengadilan negeri.'],
                ['step' => '4', 'title' => 'Eksekusi & Perlindungan Hak', 'desc' => 'Pengawalan eksekusi putusan berkekuatan hukum tetap (inkracht) guna memastikan hak klien terpenuhi secara nyata.'],
            ],
            'faqs' => [
                ['q' => 'Apa yang harus dilakukan pertama kali jika menerima somasi sengketa perdata?', 'a' => 'Tetap tenang dan jangan terburu-buru menandatangani dokumen pengakuan utang atau perjanjian baru tanpa telaah hukum. Segera kumpulkan bukti perjanjian awal dan konsultasikan kepada advokat untuk menyusun jawaban somasi yang proporsional.'],
                ['q' => 'Berapa lama proses penyelesaian gugatan perdata di Pengadilan Negeri Tangerang?', 'a' => 'Sesuai asas peradilan cepat, sederhana, dan berbiaya ringan dari Mahkamah Agung, pemeriksaan perkara tingkat pertama di pengadilan negeri ditargetkan selesai dalam rentang waktu sekitar 5 bulan, diawali tahap mediasi wajib selama 30 hari.'],
                ['q' => 'Apakah sengketa perdata selalu harus berujung pada persidangan pengadilan?', 'a' => 'Tidak selalu. Kami selalu mengedepankan pendekatan musyawarah mufakat, somasi terarah, dan mediasi alternatif terlebih dahulu agar hak klien dapat dipulihkan dengan efisiensi waktu dan biaya.'],
            ],
        ],
        [
            'title' => 'Pidana Umum & Khusus',
            'slug' => 'pidana-umum-khusus',
            'icon' => 'fa-solid fa-shield-halved',
            'short_description' => 'Pendampingan dalam penanganan perkara pidana dengan pendekatan yang cermat terhadap fakta dan prosedur di Tangerang & Bogor.',
            'description' => 'Pendampingan perkara pidana umum dan khusus dengan pendekatan yang cermat terhadap fakta, alat bukti, dan prosedur hukum acara. Kami mendampingi klien pada tahap penyelidikan, penyidikan, penuntutan, hingga persidangan, dengan menjunjung asas praduga tak bersalah dan hak-hak klien.',
            'scopes' => ['Pendampingan penyelidikan & penyidikan', 'Analisis konstruksi perkara', 'Pendampingan persidangan', 'Upaya hukum & peninjauan', 'Perlindungan hak tersangka/terdakwa & korban'],
            'image' => 'images/services/pidana.svg',
            'target_keywords' => ['pengacara pidana tangerang', 'advokat pidana tangerang', 'pendampingan polres metro tangerang kota', 'pengacara kasus pidana tangerang', 'pembelaan pidana tangerang'],
            'jurisdiction' => 'Polres Metro Tangerang Kota, Polres Tangerang Selatan, Polresta Bandara Soekarno-Hatta, Polresta Bogor Kota, serta Kejaksaan dan Pengadilan Negeri terkait.',
            'when_needed' => [
                'Menerima surat panggilan klarifikasi atau pemeriksaan sebagai saksi di kepolisian.',
                'Ditetapkan sebagai tersangka dan memerlukan pendampingan pembuatan Berita Acara Pemeriksaan (BAP).',
                'Mengajukan permohonan penangguhan penahanan atau pengalihan jenis penahanan kepada penyidik/hakim.',
                'Menjadi korban tindak pidana (penipuan, penggelapan, pencemaran nama baik) dan ingin membuat laporan polisi resmi.',
                'Menghadapi persidangan perkara pidana di Pengadilan Negeri Tangerang atau pengadilan negeri lainnya.',
            ],
            'workflow' => [
                ['step' => '1', 'title' => 'Klarifikasi & Perlindungan Awal', 'desc' => 'Mempelajari surat panggilan, pasal sangkaan, serta memastikan hak-hak hukum klien terlindungi sejak awal pemeriksaan.'],
                ['step' => '2', 'title' => 'Pendampingan Pemeriksaan Kepolisian', 'desc' => 'Mendampingi secara langsung saat pemeriksaan BAP di kantor kepolisian agar keterangan dicatat secara adil tanpa tekanan.'],
                ['step' => '3', 'title' => 'Penyusunan Pembelaan Yuridis', 'desc' => 'Mengumpulkan alat bukti pembelaan (alibi, saksi meringankan, ahli) dan merumuskan eksepsi serta nota pembelaan (pledoi).'],
                ['step' => '4', 'title' => 'Sidang Pengadilan & Upaya Hukum', 'desc' => 'Melakukan pembuktian di persidangan pengadilan negeri serta menempuh upaya hukum banding/kasasi jika diperlukan.'],
            ],
            'faqs' => [
                ['q' => 'Apakah seorang saksi berhak didampingi pengacara saat diperiksa polisi di Tangerang?', 'a' => 'Ya. Meskipun pemeriksaan saksi bersifat memberikan keterangan, kehadiran advokat penting untuk memastikan pertanyaan penyidik tetap dalam koridor materi perkara dan tidak ada pemaksaan atau manipulasi berita acara.'],
                ['q' => 'Bagaimana mekanisme pengajuan penangguhan penahanan?', 'a' => 'Advokat dapat mengajukan surat permohonan penangguhan penahanan resmi kepada penyidik dengan menyertakan jaminan orang (keluarga/penasihat hukum) atau jaminan uang, serta komitmen kooperatif.'],
                ['q' => 'Apakah Holong Siregar & Co. mendampingi perkara pidana ekonomi dan siber?', 'a' => 'Ya. Kami menangani pendampingan perkara pidana umum seperti penggelapan dan penipuan (pasal 372/378 KUHP), serta pidana khusus termasuk pelanggaran UU ITE, tindak pidana perbankan, dan pidana korporasi.'],
            ],
        ],
        [
            'title' => 'Legal Contract & Review Contract',
            'slug' => 'legal-contract-review-contract',
            'icon' => 'fa-regular fa-file-lines',
            'short_description' => 'Penyusunan, penelaahan, dan perbaikan kontrak untuk memperjelas hak, kewajiban, dan mitigasi risiko bisnis di Tangerang.',
            'description' => 'Layanan penyusunan (drafting), pemeriksaan (review), penelaahan, negosiasi, dan perbaikan kontrak bisnis. Fokus kami adalah memperjelas hak dan kewajiban para pihak, mengidentifikasi klausul berisiko, serta menyusun bahasa kontrak yang melindungi kepentingan klien dan memitigasi potensi sengketa.',
            'scopes' => ['Contract drafting & review', 'Analisis risiko klausul', 'Negosiasi kontrak', 'MoU, NDA & perjanjian kerja sama', 'Opini hukum atas kontrak'],
            'image' => 'images/services/kontrak.svg',
            'target_keywords' => ['jasa drafting kontrak tangerang', 'review perjanjian tangerang', 'pengacara kontrak bsd', 'pembuatan perjanjian kerja sama tangerang', 'legal review bisnis tangerang'],
            'jurisdiction' => 'Seluruh wilayah bisnis dan industri Tangerang Raya (Kota Tangerang, BSD City, Serpong, Karawaci) dan Jabodetabek.',
            'when_needed' => [
                'Akan menandatangani perjanjian kemitraan investasi, joint venture, atau pengadaan bernilai signifikan.',
                'Membutuhkan perjanjian kerja sama bisnis (PKS) yang memiliki klausul perlindungan hak kekayaan intelektual dan kerahasiaan (NDA).',
                'Ingin memastikan klausul wanprestasi, force majeure, ganti rugi, dan pilihan yurisdiksi penyelesaian sengketa sudah aman.',
                'Menghadapi draf kontrak sepihak dari mitra kerja yang membebankan penalti tidak proporsional.',
                'Memperbarui standar syarat & ketentuan (Terms of Service) operasional komersial perusahaan.',
            ],
            'workflow' => [
                ['step' => '1', 'title' => 'Identifikasi Kepentingan Bisnis', 'desc' => 'Memahami model bisnis, tujuan kerja sama, skema pembayaran, dan ekspektasi komersial para pihak.'],
                ['step' => '2', 'title' => 'Audit Klausul & Analisis Risiko', 'desc' => 'Menelaah setiap pasal kontrak untuk mendeteksi pasal multitafsir, jebakan penalti, atau risiko liabilitas sepihak.'],
                ['step' => '3', 'title' => 'Perbaikan & Rekomendasi Redaksional', 'desc' => 'Menyusun draf revisi klausul (mark-up) dengan bahasa hukum yang presisi, lugas, dan mengikat secara sah.'],
                ['step' => '4', 'title' => 'Dukungan Negosiasi Kontrak', 'desc' => 'Memberikan catatan panduan argumen hukum untuk digunakan klien dalam negosiasi final bersama pihak rekanan.'],
            ],
            'faqs' => [
                ['q' => 'Mengapa review kontrak sangat penting sebelum ditandatangani?', 'a' => 'Kontrak adalah undang-undang bagi para pihak yang membuatnya (Pasal 1338 KUHPerdata). Mengidentifikasi klausul merugikan sebelum tanda tangan jauh lebih mudah dan hemat biaya daripada menyelesaikan sengketa setelah perkara masuk pengadilan.'],
                ['q' => 'Berapa lama waktu yang dibutuhkan untuk mereview draf kontrak perjanjian?', 'a' => 'Untuk kontrak standar (5–15 halaman), proses review dan telaah risiko hukum umumnya memakan waktu 2–3 hari kerja, lengkap dengan catatan revisi redaksional dan rekomendasi proteksi hak.'],
                ['q' => 'Apakah melayani penyusunan kontrak dwibahasa (bilingual Indonesia-Inggris)?', 'a' => 'Ya, kami membantu penyesuaian klausul kontrak dwibahasa untuk transaksi komersial internasional sesuai dengan ketentuan Undang-Undang Nomor 24 Tahun 2009 tentang Bahasa.'],
            ],
        ],
        [
            'title' => 'Hukum Keluarga & Perceraian',
            'slug' => 'hukum-keluarga-perceraian',
            'icon' => 'fa-regular fa-heart',
            'short_description' => 'Pendampingan hukum keluarga dengan komunikasi yang bijaksana, bermartabat, dan penuh kerahasiaan di Tangerang & Bogor.',
            'description' => 'Pendampingan persoalan hukum keluarga dan perceraian dengan pendekatan yang mengutamakan kerahasiaan, proporsionalitas, kebijaksanaan, dan penyelesaian yang bermartabat bagi seluruh pihak.',
            'scopes' => ['Perkawinan & perceraian', 'Perjanjian perkawinan (prenup & postnup)', 'Hak asuh & nafkah anak', 'Waris & hibah', 'Pembagian harta bersama'],
            'image' => 'images/services/keluarga.svg',
            'target_keywords' => ['pengacara perceraian tangerang', 'advokat cerai tangerang', 'pengacara pa tangerang', 'pengacara hak asuh anak tangerang', 'pengacara harta gono gini tangerang', 'pengacara waris tangerang'],
            'jurisdiction' => 'Pengadilan Agama Tangerang, Pengadilan Agama Tigaraksa, Pengadilan Negeri Tangerang (Non-Muslim), serta Pengadilan Agama Bogor.',
            'when_needed' => [
                'Menghadapi kebuntuan rumah tangga dan memutuskan menempuh gugatan/permohonan cerai secara sah dan berkepastian hukum.',
                'Memerlukan kepastian pembagian harta bersama (gono-gini) secara adil dan transparan.',
                'Memperjuangkan hak asuh anak (hadhanah) serta penetapan nafkah pemeliharaan anak pasca-perceraian.',
                'Mengalami sengketa pembagian harta waris atau penetapan ahli waris sah di hadapan pengadilan.',
                'Penyusunan perjanjian pra-nikah (prenuptial agreement) atau perjanjian pasca-nikah (postnuptial agreement).',
            ],
            'workflow' => [
                ['step' => '1', 'title' => 'Konsultasi Privat & Kerahasiaan Penuh', 'desc' => 'Mendengarkan situasi keluarga secara empatik dan objektif dengan perlindungan privasi 100% terjamin.'],
                ['step' => '2', 'title' => 'Persiapan Dokumen Legal', 'desc' => 'Verifikasi akta perkawinan, kartu keluarga, akta kelahiran anak, serta bukti kepemilikan aset bersama.'],
                ['step' => '3', 'title' => 'Pendaftaran Gugatan & Mediasi', 'desc' => 'Mendaftarkan gugatan ke Pengadilan Agama/Negeri dan mendampingi proses mediasi perdamaian resmi.'],
                ['step' => '4', 'title' => 'Persidangan & Akta Cerai', 'desc' => 'Mengawal proses persidangan pembuktian hingga putusan hakim berkekuatan hukum tetap dan penerbitan akta cerai.'],
            ],
            'faqs' => [
                ['q' => 'Ke pengadilan mana gugatan cerai didaftarkan untuk domisili Tangerang?', 'a' => 'Bagi pasangan Muslim yang bertempat tinggal di Kota Tangerang, gugatan diajukan ke Pengadilan Agama Tangerang, sedangkan wilayah Kabupaten Tangerang dan Tangsel berada di bawah PA Tigaraksa. Bagi pasangan non-Muslim, gugatan diajukan ke Pengadilan Negeri Tangerang.'],
                ['q' => 'Apakah pihak yang bersangkutan wajib hadir di setiap agenda sidang?', 'a' => 'Kehadiran prinsipal diutamakan pada saat mediasi pertama. Apabila mediasi tidak mencapai mufakat, agenda persidangan berikutnya (jawaban, replik, duplik, pembuktian) dapat sepenuhnya diwakilkan oleh advokat pemegang surat kuasa.'],
                ['q' => 'Bagaimana pembagian harta bersama (gono-gini) menurut hukum Indonesia?', 'a' => 'Harta yang diperoleh selama masa perkawinan merupakan harta bersama yang secara hukum dibagi secara seimbang (masing-masing 1/2 bagian), kecuali terdapat perjanjian perkawinan pisah harta yang dibuat secara sah di hadapan notaris.'],
            ],
        ],
        [
            'title' => 'Hukum Perusahaan',
            'slug' => 'hukum-perusahaan',
            'icon' => 'fa-regular fa-building',
            'short_description' => 'Pendampingan kebutuhan hukum korporasi, kepatuhan legalitas, tata kelola, dan hubungan komersial di Tangerang.',
            'description' => 'Pendampingan kebutuhan hukum perusahaan dan bisnis, meliputi pendirian dan perubahan badan usaha, tata kelola perusahaan, dokumen bisnis, transaksi kemitraan komersial, serta kepatuhan regulasi agar kegiatan usaha berjalan aman dan tertib hukum.',
            'scopes' => ['Pendirian & legalitas badan usaha', 'Tata kelola korporasi (governance)', 'Dokumen bisnis & hubungan komersial', 'Transaksi & kemitraan usaha', 'Kepatuhan regulasi & perizinan'],
            'image' => 'images/services/korporasi.svg',
            'target_keywords' => ['pengacara perusahaan tangerang', 'lawyer korporasi tangerang', 'konsultan hukum bisnis bsd', 'legal corporate tangerang', 'pengacara ketenagakerjaan tangerang'],
            'jurisdiction' => 'Kawasan industri dan perkantoran Kota Tangerang, BSD City, Karawaci, Cikupa, Balaraja, dan seluruh wilayah Banten & Jabodetabek.',
            'when_needed' => [
                'Perusahaan membutuhkan legal retainer eksternal untuk menangani operasional rutin tanpa membebani biaya tim legal in-house.',
                'Menghadapi perselisihan hubungan industrial (ketenagakerjaan, PHK, upah) di Dinas Ketenagakerjaan atau PHI.',
                'Melakukan perubahan anggaran dasar, struktur direksi, pengalihan saham (akuisisi), atau merger perusahaan.',
                'Memerlukan audit kepatuhan perizinan usaha (OSS-RBA, AMDAL/UKL-UPL, standar industri) di wilayah Tangerang.',
                'Terlibat sengketa komersial dengan vendor, distributor, atau mitra kerja sama strategis.',
            ],
            'workflow' => [
                ['step' => '1', 'title' => 'Legal Audit & Diagnosa Usaha', 'desc' => 'Meninjau dokumen legalitas perseroan, perizinan berusaha, kontrak kerja, dan perjanjian kemitraan yang berlaku.'],
                ['step' => '2', 'title' => 'Perumusan Standar Kepatuhan', 'desc' => 'Menyusun prosedur operasional standar (SOP) legal, template kontrak standar, dan mitigasi risiko kepatuhan hukum.'],
                ['step' => '3', 'title' => 'Dukungan Advis Harian (Legal Retainer)', 'desc' => 'Memberikan konsultasi cepat via WhatsApp/rapat, legal opinion tertulis, dan telaah dokumen komersial secara berkala.'],
                ['step' => '4', 'title' => 'Penyelesaian Sengketa Bisnis', 'desc' => 'Mewakili kepentingan perseroan dalam perundingan bipartit/tripartit, somasi, hingga persidangan pengadilan niaga.'],
            ],
            'faqs' => [
                ['q' => 'Apa keuntungan menggunakan jasa pengacara corporate retainer bagi perusahaan di Tangerang?', 'a' => 'Perusahaan mendapatkan tim advokat berpengalaman yang siap siaga menelaah kontrak, memberikan opini hukum, dan mencegah sengketa dengan biaya bulanan yang terukur dan jauh lebih efisien dibanding mendirikan divisi legal in-house penuh.'],
                ['q' => 'Apakah Holong Siregar & Co. mendampingi sengketa ketenagakerjaan?', 'a' => 'Ya. Kami berpengalaman memfasilitasi perundingan bipartit antara manajemen dan pekerja, mediasi di Disnaker Kota/Kabupaten Tangerang, hingga persidangan di Pengadilan Hubungan Industrial (PHI).'],
                ['q' => 'Apakah melayani pendampingan perizinan berusaha dan pendaftaran badan usaha?', 'a' => 'Ya, kami membantu pendampingan legalitas pendirian PT, CV, yayasan, perubahan anggaran dasar di Kemenkumham, serta kepatuhan perizinan berusaha berbasis risiko (OSS-RBA).'],
            ],
        ],
        [
            'title' => 'Legal Konsultasi',
            'slug' => 'legal-konsultasi',
            'icon' => 'fa-regular fa-comments',
            'short_description' => 'Konsultasi hukum menyeluruh untuk memetakan persoalan, menganalisis risiko, dan menentukan arah langkah tepat.',
            'description' => 'Layanan konsultasi awal untuk membantu klien memetakan persoalan hukum secara menyeluruh, mempertimbangkan setiap opsi solusi, menganalisis risiko, dan menentukan arah langkah tindak lanjut yang tepat.',
            'scopes' => ['Pemetaan & telaah awal masalah hukum', 'Analisis risiko & dasar regulasi', 'Pertimbangan opsi penyelesaian', 'Rekomendasi langkah strategis', 'Legal opinion ringkas'],
            'image' => 'images/services/konsultasi.svg',
            'target_keywords' => ['konsultasi hukum tangerang', 'konsultasi pengacara tangerang', 'tanya hukum wa tangerang', 'kantor advokat konsultasi tangerang', 'pendapat hukum tangerang'],
            'jurisdiction' => 'Konsultasi tatap muka di Kantor Tangerang & Bogor, serta konsultasi daring via WhatsApp/Google Meet.',
            'when_needed' => [
                'Baru pertama kali menghadapi permasalahan hukum dan membutuhkan panduan langkah awal yang aman dan jelas.',
                'Membutuhkan second opinion atas strategi perkara yang sedang berjalan dari sudut pandang advokat independen.',
                'Memerlukan kajian tertulis (legal opinion) sebelum mengeksekusi keputusan investasi atau transaksi properti.',
                'Ingin memastikan posisi tawar hukum (bargaining position) sebelum menghadiri negosiasi atau menandatangani dokumen.',
            ],
            'workflow' => [
                ['step' => '1', 'title' => 'Penjadwalan & Pengiriman Fakta', 'desc' => 'Calon klien mengisi formulir konsultasi atau menghubungi WhatsApp dengan menyampaikan ringkasan kronologi perkara.'],
                ['step' => '2', 'title' => 'Sesi Konsultasi Mendalam', 'desc' => 'Diskusi komprehensif bersama advokat untuk membedah fakta hukum, dasar aturan, dan tujuan yang ingin dicapai klien.'],
                ['step' => '3', 'title' => 'Pemaparan Opsi & Rekomendasi', 'desc' => 'Advokat memaparkan kelebihan, kekurangan, estimasi biaya, dan konsekuensi yuridis dari setiap alternatif solusi.'],
                ['step' => '4', 'title' => 'Rencana Tindak Lanjut', 'desc' => 'Klien dapat memutuskan apakah memerlukan pendampingan penugasan formal atau cukup dengan panduan konsultasi tersebut.'],
            ],
            'faqs' => [
                ['q' => 'Bagaimana format konsultasi hukum yang tersedia?', 'a' => 'Kami menyediakan konsultasi langsung di kantor operasional kami (Kantor Tangerang di Villa Grand Tomang atau Kantor Bogor di Aspol Panaragan Kidul), serta konsultasi online cepat melalui chat WhatsApp dan panggilan video.'],
                ['q' => 'Apakah kerahasiaan materi konsultasi terjamin?', 'a' => 'Sangat terjamin. Seluruh komunikasi dan dokumen yang dibagikan dilindungi oleh kewajiban kerahasiaan profesi advokat sesuai Undang-Undang Nomor 18 Tahun 2003 tentang Advokat.'],
                ['q' => 'Apa yang sebaiknya disiapkan calon klien sebelum berkonsultasi?', 'a' => 'Siapkan catatan kronologi singkat kejadian secara urut waktu serta salinan berkas terkait (perjanjian, surat peringatan, bukti pembayaran, atau tanda bukti lain) agar analisis dapat dilakukan secara akurat.'],
            ],
        ],
        [
            'title' => 'Recovery Asset',
            'slug' => 'recovery-asset',
            'icon' => 'fa-solid fa-box-archive',
            'short_description' => 'Pendampingan dalam upaya pemulihan aset melalui penelaahan fakta, dokumen, serta strategi hukum terukur di Tangerang & Bogor.',
            'description' => 'Pendampingan komprehensif dalam upaya pemulihan dan pengamanan aset klien melalui penelaahan mendalam terhadap fakta hukum, riwayat transaksi, verifikasi dokumen kepemilikan, negosiasi, hingga strategi hukum penyelesaian yang terukur.',
            'scopes' => ['Penelaahan fakta & dokumen kepemilikan', 'Investigasi & pelacakan aset', 'Upaya hukum pengamanan & pemulihan', 'Negosiasi restrukturisasi damai', 'Eksekusi hak kepemilikan'],
            'image' => 'images/services/recovery-asset.svg',
            'target_keywords' => ['pengacara recovery asset tangerang', 'pemulihan aset pengacara tangerang', 'sengketa kepemilikan aset tangerang', 'eksekusi jaminan tangerang', 'pelacakan aset hukum tangerang'],
            'jurisdiction' => 'Wilayah hukum Tangerang Raya, Bogor, dan Pengadilan Negeri terkait di seluruh Indonesia.',
            'when_needed' => [
                'Aset properti, tanah, atau kendaraan dikuasai pihak lain tanpa hak atau tanpa dasar perjanjian yang sah.',
                'Debitur atau mitra usaha melarikan diri atau memindahtangankan aset yang semestinya menjadi jaminan pembayaran.',
                'Menghadapi lelang eksekusi hak tanggungan atau fidusia yang diduga melanggar prosedur hukum yang berlaku.',
                'Perusahaan perbankan atau pembiayaan yang memerlukan upaya pengamanan jaminan piutang bermasalah.',
                'Ahli waris yang ingin mengembalikan aset peninggalan yang telah dialihkan sepihak oleh pihak lain.',
            ],
            'workflow' => [
                ['step' => '1', 'title' => 'Pelacakan & Verifikasi Bukti Hak', 'desc' => 'Meneliti riwayat warkah tanah, sertifikat, buku tanah BPN, atau dokumen kepemilikan hak yang sah milik klien.'],
                ['step' => '2', 'title' => 'Peringatan Hukum & Negosiasi', 'desc' => 'Mengirimkan somasi dan membuka ruang perundingan pengembalian aset secara sukarela demi efisiensi waktu.'],
                ['step' => '3', 'title' => 'Sita Jaminan (Conservatoir Beslag)', 'desc' => 'Mengajukan permohonan sita jaminan ke pengadilan negeri agar aset tidak dipindahtangankan selama proses sengketa.'],
                ['step' => '4', 'title' => 'Eksekusi Pengosongan & Penyerahan', 'desc' => 'Mengawal proses pelaksanaan eksekusi riil pengadilan hingga aset fisik resmi kembali dalam penguasaan klien.'],
            ],
            'faqs' => [
                ['q' => 'Apa itu sita jaminan (conservatoir beslag) dalam pemulihan aset?', 'a' => 'Sita jaminan adalah tindakan pengadilan membekukan status kebendaan tergugat agar selama persidangan berlangsung, aset tersebut tidak dapat dijual, digadaikan, atau dialihkan kepada pihak lain.'],
                ['q' => 'Bagaimana jika tanah atau rumah milik klien diduduki secara ilegal oleh pihak lain?', 'a' => 'Advokat dapat menempuh upaya pengosongan melalui gugatan perdata perbuatan melawan hukum (PMH) di pengadilan negeri, serta laporan pidana penyerobotan tanah (Pasal 385 KUHP) atau Perppu No. 51 Tahun 1960.'],
                ['q' => 'Apakah Holong Siregar & Co. memiliki pengalaman dalam sengketa perbankan dan pembiayaan?', 'a' => 'Ya. Managing Partner kami memiliki rekam jejak mendalam sebagai penasihat hukum perusahaan pembiayaan dan perbankan, sehingga memahami prosedur hukum penagihan dan eksekusi hak tanggungan/fidusia yang sah.'],
            ],
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
            'photo' => 'images/lawyers/holong-siregar.webp',
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
            'photo' => 'images/lawyers/m-akung-kurnia.webp',
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
            'photo' => 'images/lawyers/adytia-rachman.webp',
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
            'photo' => 'images/lawyers/daud-wilton.webp',
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
            'photo' => 'images/lawyers/aktoven.webp',
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
            'photo' => 'images/lawyers/yudha-antariksa.webp',
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
            'photo' => 'images/lawyers/felix-jonathan.webp',
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
            'photo' => 'images/lawyers/daniel.webp',
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
        ['q' => 'Berapa perkiraan biaya atau honorarium jasa pengacara di Tangerang?', 'a' => 'Honorarium advokat ditentukan secara profesional dan proporsional berdasarkan tingkat kerumitan perkara, nilai klaim atau sengketa, tahapan penanganan (litigasi pengadilan atau non-litigasi), serta estimasi waktu pendampingan. Besaran biaya disepakati secara transparan dalam surat perjanjian jasa hukum sebelum penugasan dimulai.'],
        ['q' => 'Apakah kantor hukum melayani pendampingan perkara di Pengadilan Negeri Tangerang?', 'a' => 'Ya. Tim advokat kami secara aktif berpraktik dan mendampingi klien dalam persidangan di Pengadilan Negeri Tangerang (Jalan TMP Taruna, Kota Tangerang) untuk perkara perdata umum, wanprestasi, sengketa tanah, perbuatan melawan hukum, maupun pembelaan pidana.'],
        ['q' => 'Bagaimana alur gugatan perceraian di Pengadilan Agama Tangerang atau Tigaraksa?', 'a' => 'Proses diawali dengan pendaftaran gugatan atau permohonan cerai, pemanggilan para pihak (relaas), sidang mediasi perdamaian wajib selama 30 hari, pembacaan gugatan, jawaban, pembuktian saksi dan surat, hingga putusan hakim dan penerbitan akta cerai.'],
        ['q' => 'Apakah seseorang berhak didampingi pengacara saat dipanggil kepolisian (Polres Metro Tangerang Kota)?', 'a' => 'Ya. Sesuai Pasal 54 KUHAP, setiap orang yang disangka melakukan tindak pidana berhak didampingi penasihat hukum. Kehadiran advokat memastikan pemeriksaan berlangsung adil, tanpa tekanan atau intimidasi, dan hak-hak tersangka/saksi terlindungi.'],
        ['q' => 'Apakah kantor hukum menyediakan review kontrak bisnis untuk perusahaan di kawasan BSD, Serpong, dan Karawaci?', 'a' => 'Ya. Kami rutin membantu pelaku usaha, perbankan, perusahaan pembiayaan, dan korporasi di Tangerang Raya dalam penyusunan MoU, perjanjian kerja sama komersial, NDA, audit kepatuhan legal, serta mitigasi risiko klausul perjanjian.'],
        ['q' => 'Kapan waktu yang tepat bagi seseorang atau pelaku usaha menghubungi advokat?', 'a' => 'Waktu terbaik adalah sedini mungkin sebelum masalah berkembang menjadi sengketa besar, misalnya saat menerima somasi pertama kali, sebelum menandatangani kontrak bernilai signifikan, atau ketika menerima panggilan klarifikasi dari aparat penegak hukum.'],
        ['q' => 'Apakah kantor hukum juga melayani pendampingan di luar wilayah Tangerang?', 'a' => 'Ya. Selain basis operasional di Kota Tangerang (Villa Grand Tomang, Periuk), kami memiliki basis kantor di Kota Bogor (Aspol Panaragan Kidul) serta mendampingi klien di seluruh kawasan Jabodetabek, Banten, dan wilayah hukum Indonesia.'],
    ],

    'values' => [
        ['icon' => 'fa-solid fa-shield-halved', 'title' => 'Integritas', 'text' => 'Bekerja jujur, transparan, dan menjunjung etika profesi advokat dalam setiap pendampingan.'],
        ['icon' => 'fa-solid fa-magnifying-glass', 'title' => 'Ketelitian', 'text' => 'Setiap dokumen, fakta, dan regulasi ditelaah cermat sebelum menyusun langkah hukum.'],
        ['icon' => 'fa-solid fa-lock', 'title' => 'Kerahasiaan', 'text' => 'Informasi klien diperlakukan sebagai rahasia dan dijaga dengan standar profesional.'],
        ['icon' => 'fa-solid fa-compass', 'title' => 'Strategi Relevan', 'text' => 'Langkah hukum dirancang sesuai konteks, kebutuhan, dan kepentingan jangka panjang klien.'],
        ['icon' => 'fa-solid fa-comments', 'title' => 'Komunikasi Terbuka', 'text' => 'Perkembangan perkara dikomunikasikan secara jelas, jujur, dan tepat waktu.'],
        ['icon' => 'fa-solid fa-bullseye', 'title' => 'Orientasi Solusi', 'text' => 'Fokus pada penyelesaian yang praktis, efisien, dan memberikan kepastian bagi klien.'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Educational Legal Articles (Long-tail SEO & Authority)
    |--------------------------------------------------------------------------
    */
    'articles' => [
        [
            'slug' => 'biaya-jasa-pengacara-di-tangerang',
            'title' => 'Biaya Jasa Pengacara di Tangerang: Panduan Skema Honorarium Advokat',
            'excerpt' => 'Panduan transparan skema biaya pengacara di Tangerang. Pelajari komponen operational fee, lawyer fee, retainer fee, serta success fee sesuai UU Advokat.',
            'category' => 'Panduan Biaya & Layanan',
            'reading_time' => '6 menit baca',
            'published_at' => '2026-10-05',
            'updated_at' => '2026-10-08',
            'author' => 'Holong Siregar, S.H.',
            'author_role' => 'Managing Partner & Advokat',
            'image' => 'images/articles/artikel-1.svg',
            'keywords' => ['biaya pengacara tangerang', 'honorarium advokat tangerang', 'tarif lawyer tangerang', 'biaya sidang pengadilan tangerang'],
            'body' => '
                <p class="lead">Pertanyaan yang paling sering diajukan masyarakat saat menghadapi persoalan hukum adalah: <em>"Berapa sebenarnya biaya sewa atau jasa pengacara?"</em> Di wilayah Kota Tangerang, BSD, Tangsel, dan Bogor, skema biaya pengacara diatur secara profesional dan proporsional berdasarkan kesepakatan kedua belah pihak.</p>
                
                <h2>Dasar Penentuan Honorarium Advokat</h2>
                <p>Berdasarkan Pasal 21 Undang-Undang No. 18 Tahun 2003 tentang Advokat, advokat berhak menerima honorarium atas jasa hukum yang telah diberikan kepada kliennya. Besaran honorarium tidak dipatok angka tunggal oleh negara, melainkan ditentukan atas kesepakatan wajar antara advokat dan klien dengan mempertimbangkan:</p>
                <ul>
                    <li><strong>Tingkat kerumitan perkara:</strong> Perkara perdata gugatan sengketa tanah dengan banyak pihak tentu memerlukan analisis dan waktu lebih intensif dibanding somasi wanprestasi sederhana.</li>
                    <li><strong>Nilai sengketa atau objek perkara:</strong> Sengketa komersial bernilai miliaran rupiah menuntut mitigasi risiko finansial yang lebih kompleks.</li>
                    <li><strong>Tahapan penanganan:</strong> Apakah sebatas konsultasi, pembuatan legal opinion, mediasi non-litigasi di luar pengadilan, atau pendampingan litigasi penuh dari pengadilan tingkat pertama (PN Tangerang), banding di PT Banten, hingga kasasi MA.</li>
                    <li><strong>Jangka waktu dan beban kerja:</strong> Estimasi frekuensi kehadiran persidangan dan pengumpulan alat bukti.</li>
                </ul>

                <h2>4 Komponen Utama Skema Biaya Advokat</h2>
                <p>Dalam praktik kantor hukum profesional seperti <a href="/tentang-kami">Holong Siregar & Co.</a>, rincian biaya selalu dituangkan secara transparan dalam Surat Perjanjian Jasa Hukum (SPJH) yang meliputi:</p>
                
                <h3>1. Operational Fee (Biaya Operasional)</h3>
                <p>Biaya yang timbul untuk keperluan teknis jalannya perkara, seperti transportasi advokat, pendaftaran perkara di e-Court Mahkamah Agung, biaya panggilan sidang (relaas), materai, penggandaan berkas bukti, dan akomodasi bila diperlukan pemeriksaan setempat (descente).</p>

                <h3>2. Lawyer Fee (Honorarium Penanganan)</h3>
                <p>Kompensasi profesional atas keahlian, waktu, strategi hukum, serta pendampingan langsung oleh advokat selama masa penanganan perkara berlangsung.</p>

                <h3>3. Success Fee (Honorarium Keberhasilan)</h3>
                <p>Persentase atau nominal tambahan yang disepakati bersama apabila target hukum yang dikehendaki tercapai, misalnya pemulihan aset (recovery asset) atau tercapainya perdamaian yang menguntungkan klien.</p>

                <h3>4. Retainer Fee (Jasa Hukum Bulanan Perusahaan)</h3>
                <p>Khusus bagi pelaku usaha dan korporasi di Tangerang dan Bogor yang memerlukan pendampingan hukum rutin, penelaahan kontrak bisnis berkala, dan konsultasi ketenagakerjaan tanpa harus membentuk tim legal in-house yang mahal.</p>

                <div class="p-4 my-4 rounded-3 bg-light border-start border-4 border-warning">
                    <h5 class="fw-bold mb-2 text-navy"><i class="fa-solid fa-triangle-exclamation text-gold me-2"></i>Tips Menghindari Biaya Siluman</h5>
                    <p class="mb-0">Pastikan seluruh komitmen biaya disepakati tertulis dalam <strong>Surat Kuasa Khusus</strong> dan <strong>Surat Perjanjian Jasa Hukum</strong>. Advokat berintegritas tidak akan meminta pungutan liar di luar kontrak yang disepakati.</p>
                </div>

                <h2>Konsultasi Awal Biaya Perkara Anda</h2>
                <p>Ingin mengetahui estimasi biaya yang tepat dan proporsional untuk perkara Anda di wilayah Tangerang atau Bogor? Hubungi tim kami melalui <a href="/kontak">halaman kontak</a> atau tombol WhatsApp untuk penjadwalan konsultasi pendahuluan secara transparan.</p>
            ',
        ],
        [
            'slug' => 'alur-persidangan-gugatan-perdata-pn-tangerang',
            'title' => 'Alur Sidang Perdata di PN Tangerang: Dari Mediasi hingga Putusan',
            'excerpt' => 'Simak tahapan lengkap persidangan gugatan perdata di PN Tangerang, mulai dari registrasi e-Court, mediasi wajib, jawab-jinawab, pembuktian, hingga eksekusi.',
            'category' => 'Hukum Perdata',
            'reading_time' => '7 menit baca',
            'published_at' => '2026-10-06',
            'updated_at' => '2026-10-08',
            'author' => 'Holong Siregar, S.H.',
            'author_role' => 'Managing Partner & Advokat',
            'image' => 'images/articles/artikel-2.svg',
            'keywords' => ['alur sidang pn tangerang', 'gugatan perdata tangerang', 'sidang mediasi perdata', 'pengacara perdata tangerang'],
            'body' => '
                <p class="lead">Menghadapi gugatan atau hendak mengajukan gugatan perdata di Pengadilan Negeri Tangerang (Jl. TMP Taruna No. 7, Sukaasih, Kota Tangerang) seringkali menimbulkan kekhawatiran karena ketidaktahuan alur persidangan. Artikel ini mengupas alur hukum acara perdata secara runut.</p>

                <h2>1. Pendaftaran Gugatan Melalui e-Court</h2>
                <p>Sejak diberlakukannya Peraturan Mahkamah Agung (PERMA) No. 7 Tahun 2022, pendaftaran gugatan perdata oleh advokat dilakukan secara elektronik melalui sistem e-Court Mahkamah Agung. Dokumen gugatan, surat kuasa, dan bukti awal diunggah secara digital, kemudian Penggugat membayar panjar biaya perkara melalui virtual account bank.</p>

                <h2>2. Sidang Perdana & Pemeriksaan Legalitas</h2>
                <p>Majelis Hakim akan memeriksa kelengkapan administrasi para pihak, antara lain:</p>
                <ul>
                    <li>Identitas KTP para pihak (Penggugat dan Tergugat).</li>
                    <li>Surat Kuasa Khusus asli dan Berita Acara Sumpah (BAS) Advokat yang sah.</li>
                    <li>Legal standing para pihak apakah memenuhi kualifikasi hukum.</li>
                </ul>

                <h2>3. Tahap Mediasi Wajib (PERMA No. 1 Tahun 2016)</h2>
                <p>Sebelum masuk ke pokok sengketa, pengadilan <strong>wajib</strong> memerintahkan para pihak menempuh mediasi selama maksimal 30 hari kerja (dapat diperpanjang 30 hari). Mediasi dipandu oleh Hakim Mediator netral. Jika mediasi berhasil, dibuat Akta Perdamaian (Van Dading) yang berkekuatan hukum tetap. Jika gagal, persidangan dilanjutkan ke pokok perkara.</p>

                <h2>4. Tahap Jawab-Jinawab (Litigasi / e-Litigation)</h2>
                <p>Tahapan ini dapat berlangsung secara elektronik melalui sistem e-Litigation PN Tangerang:</p>
                <ol>
                    <li><strong>Pembacaan Gugatan:</strong> Penggugat membacakan posita dan petitum gugatannya.</li>
                    <li><strong>Jawaban Tergugat:</strong> Memuat bantahan terhadap dalil gugatan serta eksepsi (keberatan formil). Tergugat juga dapat mengajukan gugatan balik (rekonvensi).</li>
                    <li><strong>Replik:</strong> Tanggapan resmi Penggugat atas jawaban Tergugat.</li>
                    <li><strong>Duplik:</strong> Tanggapan akhir Tergugat atas replik Penggugat.</li>
                </ol>

                <h2>5. Tahap Pembuktian (Puncak Persidangan)</h2>
                <p>Tahap ini merupakan momen paling krusial. Siapa yang mendalilkan sesuatu, wajib membuktikannya (Pasal 1865 KUHPerdata). Alat bukti yang diajukan meliputi:</p>
                <ul>
                    <li><strong>Bukti Surat:</strong> Akta otentik notaris, perjanjian bawah tangan, bukti transfer bank, surat somasi, dan korespondensi yang telah dimateraikan dan dilegalisir di kantor pos (nazegelen).</li>
                    <li><strong>Saksi Fakta:</strong> Orang yang melihat, mendengar, atau mengalami sendiri peristiwa hukum terkait.</li>
                    <li><strong>Saksi Ahli:</strong> Pakar hukum, pertanahan, atau akuntan forensik bila dibutuhkan pendapat spesialis.</li>
                </ul>

                <h2>6. Kesimpulan & Pembacaan Putusan</h2>
                <p>Setelah pembuktian selesai, masing-masing pihak menyerahkan konklusi atau kesimpulan tertulis. Selanjutnya, Majelis Hakim menggelar sidang musyawarah dan membacakan Putusan Pengadilan Negeri Tangerang.</p>

                <h2>Pendampingan Pengacara Perdata Berpengalaman</h2>
                <p>Keahlian merumuskan dalil gugatan, menyusun bukti, serta mengajukan pertanyaan kritis kepada saksi di ruang sidang sangat menentukan hasil akhir. Pelajari lebih lanjut layanan kami di <a href="/layanan/perdata-wanprestasi">Pengacara Perdata &amp; Wanprestasi</a> atau jadwalkan sesi konsultasi bersama advokat kami.</p>
            ',
        ],
        [
            'slug' => 'cara-mengajukan-somasi-dan-gugatan-wanprestasi',
            'title' => 'Cara Membuat Somasi & Mengajukan Gugatan Wanprestasi Bisnis',
            'excerpt' => 'Langkah hukum efektif menghadapi rekan bisnis yang ingkar janji (wanprestasi). Format somasi resmi, pembuktian kerugian materiil, dan pengajuan gugatan perdata.',
            'category' => 'Hukum Kontrak & Bisnis',
            'reading_time' => '5 menit baca',
            'published_at' => '2026-10-06',
            'updated_at' => '2026-10-08',
            'author' => 'Holong Siregar, S.H.',
            'author_role' => 'Managing Partner & Advokat',
            'image' => 'images/articles/artikel-3.svg',
            'keywords' => ['somasi wanprestasi', 'contoh somasi hutang', 'gugatan wanprestasi bisnis', 'pengacara bisnis tangerang'],
            'body' => '
                <p class="lead">Dalam dinamika bisnis di Tangerang Raya dan Jabodetabek, wanprestasi atau ingkar janji terhadap perjanjian kerja sama kerap menimbulkan kerugian finansial yang signifikan. Sebelum melangkah ke pengadilan, somasi (surat peringatan hukum) adalah instrumen wajib yang harus ditempuh.</p>

                <h2>Unsur Wanprestasi Menurut Pasal 1243 KUHPerdata</h2>
                <p>Seseorang atau badan hukum dinyatakan melakukan wanprestasi apabila tidak memenuhi kewajiban (prestasi) yang tercantum dalam perjanjian sah. Wanprestasi dapat berwujud dalam 4 kondisi:</p>
                <ul>
                    <li>Sama sekali tidak melaksanakan apa yang diperjanjikan.</li>
                    <li>Melaksanakan apa yang diperjanjikan, tetapi terlambat.</li>
                    <li>Melaksanakan kewajiban, tetapi tidak sesuai dengan kesepakatan spesifikasi.</li>
                    <li>Melakukan hal yang menurut perjanjian dilarang untuk dilakukan.</li>
                </ul>

                <h2>Fungsi Krusial Surat Somasi</h2>
                <p>Menurut Pasal 1238 KUHPerdata, debitur harus terlebih dahulu dinyatakan lalai melalui surat perintah atau akta sejenis sebelum kreditur dapat menuntut ganti rugi bunga atau pembatalan perjanjian. Somasi membuktikan bahwa pihak yang berutang telah diberi kesempatan cukup dan itikad baik untuk menyelesaikan kewajibannya.</p>

                <h2>Format Somasi Resmi yang Berkekuatan Hukum</h2>
                <p>Somasi yang disusun oleh kantor advokat resmi memiliki bobot psikologis dan yuridis yang jauh lebih kuat dibanding surat peringatan biasa. Unsur pokok somasi yang wajib ada:</p>
                <ol>
                    <li><strong>Dasar Hubungan Hukum:</strong> Menyebutkan nomor perjanjian, tanggal akta, dan poin pasal kesepakatan.</li>
                    <li><strong>Bentuk Pelanggaran (Wanprestasi):</strong> Menjabarkan secara faktual kewajiban apa yang belum dipenuhi disertai nominal kerugian.</li>
                    <li><strong>Tuntutan Ganti Rugi / Pemenuhan:</strong> Tindakan konkret yang diminta (pelunasan pembayaran, penyerahan barang, dll).</li>
                    <li><strong>Tenggat Waktu yang Wajar:</strong> Umumnya 7 hari atau 14 hari kalender sejak surat diterima.</li>
                    <li><strong>Peringatan Langkah Hukum Tegas:</strong> Menyatakan tegas bahwa jika batas waktu diabaikan, proses hukum gugatan perdata di Pengadilan Negeri atau pelaporan pidana (apabila ada unsur penipuan Pasal 378 KUHP) akan segera ditempuh.</li>
                </ol>

                <h2>Langkah Litigasi: Gugatan Wanprestasi & Sita Jaminan</h2>
                <p>Bila somasi tidak diindahkan, langkah selanjutnya adalah mendaftarkan gugatan wanprestasi ke Pengadilan Negeri tempat domisili Tergugat. Untuk mencegah Tergugat memindahtangankan hartanya selama proses persidangan, kuasa hukum dapat memohonkan <strong>Sita Jaminan (Conservatoir Beslag)</strong> atas rekening atau aset properti Tergugat.</p>

                <p>Kaji klausul kontrak kerja sama Anda bersama tim konsultan kami di <a href="/layanan/legal-contract">Legal Contract &amp; Review</a> atau konsultasikan pembuatan surat somasi melalui <a href="/kontak">layanan kontak kami</a>.</p>
            ',
        ],
        [
            'slug' => 'hak-saksi-dan-tersangka-dalam-pemeriksaan-bap-polisi',
            'title' => 'Hak Saksi & Tersangka Saat Pemeriksaan BAP di Kepolisian',
            'excerpt' => 'Ketahui hak konstitusional Anda saat dipanggil penyidik polisi. Panduan menghadapi BAP dengan tenang, didampingi advokat, dan menghindari intimidasi.',
            'category' => 'Hukum Pidana',
            'reading_time' => '6 menit baca',
            'published_at' => '2026-10-07',
            'updated_at' => '2026-10-08',
            'author' => 'Holong Siregar, S.H.',
            'author_role' => 'Managing Partner & Advokat',
            'image' => 'images/articles/artikel-4.svg',
            'keywords' => ['hak tersangka bap polisi', 'pendampingan pengacara pidana', 'bap polres metro tangerang', 'pasal 54 kuhap'],
            'body' => '
                <p class="lead">Menerima surat panggilan dari pihak kepolisian — baik Polres Metro Tangerang Kota, Polres Tangerang Selatan, maupun Polresta Bogor — sering membuat seseorang panik. Memahami hak-hak Anda berdasarkan Kitab Undang-Undang Hukum Acara Pidana (KUHAP) adalah perlindungan pertama dari potensi pelanggaran prosedur.</p>

                <h2>1. Hak Didampingi Advokat (Pasal 54 KUHAP)</h2>
                <p>Pasal 54 KUHAP menegaskan: <em>"Guna kepentingan pembelaan, tersangka atau terdakwa berhak mendapat bantuan hukum dari seorang atau lebih penasihat hukum selama dalam waktu dan pada setiap tingkat pemeriksaan."</em></p>
                <p>Bahkan untuk tindak pidana yang diancam pidana mati atau penjara 15 tahun ke atas, atau orang yang tidak mampu yang diancam pidana 5 tahun ke atas, penyidik <strong>wajib menunjuk penasihat hukum</strong> bagi tersangka (Pasal 56 KUHAP). Tanpa pendampingan advokat, pemeriksaan tersebut cacat hukum (prosedural error).</p>

                <h2>2. Hak Memberikan Keterangan Bebas Tanpa Tekanan</h2>
                <p>Berdasarkan Pasal 52 KUHAP, tersangka atau saksi berhak memberikan keterangan secara bebas tanpa adanya tekanan, ancaman, kekerasan fisik, intimidasi psikologis, atau rayuan dari pihak penyidik. Keterangan yang diberikan di bawah tekanan tidak memiliki nilai pembuktian yang sah di mata hakim.</p>

                <h2>3. Hak Mengetahui Pasal yang Disangkakan</h2>
                <p>Penyidik wajib memberitahukan dengan jelas dalam bahasa yang dimengerti apa tindak pidana yang disangkakan, dasar laporan polisi (LP), serta uraian singkat peristiwa hukum sebelum pertanyaan BAP dimulai (Pasal 51 KUHAP).</p>

                <h2>4. Hak Membaca & Mengoreksi Lembar BAP</h2>
                <p>Setelah juru periksa mengetik seluruh tanya jawab, Anda berhak membaca kembali secara cermat setiap lembar Berita Acara Pemeriksaan (BAP). Jika ada jawaban yang disalahartikan atau tidak sesuai dengan perkataan Anda, Anda <strong>berhak meminta perubahan atau perbaikan</strong> sebelum menandatanganinya.</p>

                <h2>5. Hak Mengajukan Saksi yang Meringankan (A de Charge)</h2>
                <p>Tersangka berhak mengajukan saksi atau ahli yang menguntungkan bagi dirinya (Pasal 65 KUHAP) guna membantah sangkaan pelapor atau membuktikan alibi yang sah.</p>

                <div class="p-4 my-4 rounded-3 bg-light border-start border-4 border-warning">
                    <h5 class="fw-bold mb-2 text-navy"><i class="fa-solid fa-user-shield text-gold me-2"></i>Mengapa Pendampingan Advokat Begitu Penting?</h5>
                    <p class="mb-0">Advokat hadir mendampingi untuk memastikan pertanyaan penyidik tetap relevan, tidak menjebak, menolak bentuk tekanan verbal, serta mencatat setiap kejanggalan dalam berita acara resmi pemeriksaan.</p>
                </div>

                <p>Bila Anda atau kerabat Anda menerima panggilan klarifikasi atau pemeriksaan dari aparat kepolisian, segera konsultasikan dengan tim <a href="/layanan/pidana">Pengacara Pidana Holong Siregar &amp; Co.</a> untuk perlindungan hukum terukur.</p>
            ',
        ],
        [
            'slug' => 'solusi-sengketa-tanah-dan-sertifikat-ganda',
            'title' => 'Solusi Hukum Sengketa Tanah & Sertifikat Ganda di Tangerang',
            'excerpt' => 'Cara menyelesaikan sengketa kepemilikan tanah dan tumpang tindih sertifikat hak milik (SHM) di BPN. Jalur mediasi BPN, gugatan PTUN, dan perdata di Pengadilan.',
            'category' => 'Pertanahan & Properti',
            'reading_time' => '8 menit baca',
            'published_at' => '2026-10-07',
            'updated_at' => '2026-10-08',
            'author' => 'Holong Siregar, S.H.',
            'author_role' => 'Managing Partner & Advokat',
            'image' => 'images/articles/artikel-5.svg',
            'keywords' => ['sengketa tanah tangerang', 'sertifikat ganda bpn', 'gugatan ptun serang tanah', 'pengacara sengketa tanah tangerang'],
            'body' => '
                <p class="lead">Pesatnya pertumbuhan pembangunan properti di kawasan Kota Tangerang, Tangerang Selatan (BSD, Serpong, Bintaro), dan Bogor menjadikan sengketa kepemilikan tanah dan sertifikat ganda (overlapping certificate) sebagai masalah pertanahan yang paling sering terjadi.</p>

                <h2>Penyebab Munculnya Sertifikat Ganda</h2>
                <p>Sertifikat ganda terjadi ketika terdapat dua atau lebih sertifikat hak atas tanah yang diterbitkan oleh Kantor Pertanahan (BPN) di atas bidang tanah yang sama, baik sebagian maupun seluruhnya. Faktor pemicunya meliputi:</p>
                <ul>
                    <li>Peralihan hak berdasarkan girik/letter C yang tidak tercatat rapi di kantor kelurahan pada masa lampau.</li>
                    <li>Kesalahan pengukuran fisik di lapangan atau batas koordinat peta pendaftaran tanah masa lalu yang belum terdigitalisasi.</li>
                    <li>Adanya tindak pidana pemalsuan surat warkah tanah atau mafia tanah yang memanipulasi riwayat perolehan hak.</li>
                </ul>

                <h2>Langkah 1: Penelusuran Warkah di Kantor Pertanahan (BPN)</h2>
                <p>Langkah awal yang mutlak dilakukan adalah mengajukan permohonan pengecekan sertifikat dan penelusuran riwayat warkah tanah di Kantor Pertanahan setempat (BPN Kota Tangerang, BPN Tangsel, atau BPN Kabupaten Bogor). Dari warkah, dapat diketahui akta jual beli (AJB), surat ukur, dan riwayat sah asal-usul tanah tersebut.</p>

                <h2>Langkah 2: Mediasi Sengketa Melalui Kantor Wilayah BPN</h2>
                <p>Berdasarkan Peraturan Menteri ATR/BPN No. 21 Tahun 2020 tentang Penanganan dan Penyelesaian Kasus Pertanahan, para pihak yang bersengketa dapat mengajukan pengaduan untuk mediasi di kantor BPN. BPN dapat melakukan gelar perkara dan penelitian lapangan. Jika terbukti terjadi cacat administrasi berat, BPN dapat menerbitkan keputusan pembatalan sertifikat.</p>

                <h2>Langkah 3: Gugatan ke PTUN (Pembatalan Sertifikat Cacat Hukum)</h2>
                <p>Jika sertifikat pihak lawan diterbitkan karena cacat prosedur atau bertentangan dengan Asas-Asas Umum Pemerintahan yang Baik (AUPB), pihak yang dirugikan dapat mengajukan gugatan pembatalan sertifikat ke Pengadilan Tata Usaha Negara (PTUN Serang untuk wilayah Banten). Perhatikan tenggat waktu pengajuan gugatan PTUN adalah 90 hari sejak diketahuinya Keputusan Tata Usaha Negara tersebut.</p>

                <h2>Langkah 4: Gugatan Perdata Perbuatan Melawan Hukum (PMH) ke Pengadilan Negeri</h2>
                <p>Guna menetapkan siapa pemilik sah yang berhak atas objek tanah tersebut, gugatan perdata diajukan ke Pengadilan Negeri Tangerang dengan dasar Perbuatan Melawan Hukum (Pasal 1365 KUHPerdata). Petitum gugatan mencakup:</p>
                <ul>
                    <li>Menyatakan Penggugat adalah pemilik sah tanah sengketa.</li>
                    <li>Menyatakan sertifikat atau penguasaan fisik Tergugat tidak berkekuatan hukum.</li>
                    <li>Menghukum Tergugat mengosongkan dan menyerahkan tanah seketika dan tanpa beban apapun.</li>
                    <li>Meletakkan sita jaminan (CB) guna mencegah peralihan hak selama proses persidangan.</li>
                </ul>

                <p>Lindungi hak properti dan aset tanah Anda dengan strategi hukum pertanahan komprehensif. Hubungi tim kami di <a href="/layanan/sengketa-tanah">Pengacara Sengketa Tanah &amp; Properti</a> atau konsultasikan kasus tanah Anda di <a href="/kontak">halaman kontak</a>.</p>
            ',
        ],
    ],
];
