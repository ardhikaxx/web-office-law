<?php

namespace App\Support;

class Seo
{
    /**
     * Default brand name for the law firm.
     */
    public static function brand(): string
    {
        return 'Holong Siregar & Co. Law Office';
    }

    /**
     * Build consistent, high-ranking page title.
     */
    public static function title(?string $pageTitle = null): string
    {
        if (empty($pageTitle)) {
            return 'Pengacara di Tangerang & Bogor Terpercaya | Kantor Hukum & Advokat Holong Siregar & Co.';
        }

        if (str_contains($pageTitle, 'Holong Siregar')) {
            return $pageTitle;
        }

        return $pageTitle.' | '.self::brand();
    }

    /**
     * Comprehensive Tangerang-centric keyword universe.
     */
    public static function keywords(array|string $additional = []): string
    {
        $base = [
            'pengacara di tangerang',
            'pengacara tangerang',
            'advokat tangerang',
            'kantor hukum tangerang',
            'lawyer tangerang',
            'law firm tangerang',
            'jasa pengacara tangerang',
            'jasa advokat tangerang',
            'pengacara terbaik di tangerang',
            'pengacara terpercaya tangerang',
            'konsultan hukum tangerang',
            'konsultasi hukum tangerang',
            'bantuan hukum tangerang',
            'pendampingan hukum tangerang',
            'pengacara bsd',
            'pengacara serpong',
            'pengacara gading serpong',
            'pengacara alam sutera',
            'pengacara karawaci',
            'pengacara bintaro',
            'pengacara tangerang selatan',
            'pengacara tangsel',
            'pengacara kota tangerang',
            'pengacara kabupaten tangerang',
            'pengacara periuk',
            'pengacara cikokol',
            'pengacara ciputat',
            'pengacara pamulang',
            'pengacara perdata tangerang',
            'pengacara pidana tangerang',
            'pengacara perceraian tangerang',
            'pengacara sengketa tanah tangerang',
            'pengacara perusahaan tangerang',
            'corporate lawyer tangerang',
            'pengacara hutang piutang tangerang',
            'pengacara waris tangerang',
            'pengacara pengadilan negeri tangerang',
            'pengacara pengadilan agama tangerang',
            'biaya pengacara tangerang',
            'pengacara di bogor',
            'pengacara bogor',
            'kantor hukum bogor',
            'advokat bogor',
            'holong siregar',
            'holong siregar and co',
        ];

        if (is_string($additional) && ! empty($additional)) {
            $extra = array_map('trim', explode(',', $additional));
        } elseif (is_array($additional)) {
            $extra = $additional;
        } else {
            $extra = [];
        }

        $merged = array_unique(array_merge($extra, $base));

        return implode(', ', $merged);
    }

    /**
     * Generate Person Schema.org for lawyer profile.
     */
    public static function personSchema(array $lawyer): array
    {
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'Person',
            '@id' => route('lawyers.show', $lawyer['slug'] ?? 'detail').'#person',
            'name' => $lawyer['name'] ?? '',
            'jobTitle' => $lawyer['position'] ?? 'Advokat',
            'worksFor' => [
                '@type' => 'LegalService',
                'name' => self::brand(),
                'url' => route('home'),
            ],
            'url' => ! empty($lawyer['slug']) ? route('lawyers.show', $lawyer['slug']) : route('lawyers.index'),
            'description' => $lawyer['short_bio'] ?? ($lawyer['bio'] ?? ''),
        ];

        if (! empty($lawyer['photo'])) {
            $schema['image'] = asset('assets/'.$lawyer['photo']);
        }

        if (! empty($lawyer['specialization'])) {
            $schema['knowsAbout'] = [$lawyer['specialization'], 'Hukum Indonesia', 'Litigasi', 'Advokat'];
        }

        if (! empty($lawyer['education'])) {
            $schema['alumniOf'] = array_map(function ($edu) {
                return ['@type' => 'EducationalOrganization', 'name' => $edu];
            }, $lawyer['education']);
        }

        if (! empty($lawyer['organizations'])) {
            $schema['memberOf'] = array_map(function ($org) {
                return ['@type' => 'Organization', 'name' => $org];
            }, $lawyer['organizations']);
        }

        return $schema;
    }

    /**
     * Generate Service Schema.org for legal service page.
     */
    public static function serviceSchema(array $service): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            '@id' => route('services.show', $service['slug'] ?? 'layanan').'#service',
            'name' => $service['title'] ?? '',
            'serviceType' => 'Layanan Hukum & Advokat '.($service['title'] ?? ''),
            'description' => $service['description'] ?? ($service['short_description'] ?? ''),
            'provider' => [
                '@type' => 'LegalService',
                'name' => self::brand(),
                'url' => route('home'),
                'telephone' => '+6285771633860',
                'address' => [
                    '@type' => 'PostalAddress',
                    'streetAddress' => 'Villa Grand Tomang, Periuk',
                    'addressLocality' => 'Kota Tangerang',
                    'addressRegion' => 'Banten',
                    'addressCountry' => 'ID',
                ],
            ],
            'areaServed' => [
                ['@type' => 'City', 'name' => 'Kota Tangerang'],
                ['@type' => 'City', 'name' => 'Kota Tangerang Selatan'],
                ['@type' => 'City', 'name' => 'Kota Bogor'],
                ['@type' => 'AdministrativeArea', 'name' => 'BSD City'],
                ['@type' => 'AdministrativeArea', 'name' => 'Gading Serpong'],
                ['@type' => 'AdministrativeArea', 'name' => 'Karawaci'],
                ['@type' => 'AdministrativeArea', 'name' => 'Jabodetabek'],
            ],
            'hasOfferCatalog' => [
                '@type' => 'OfferCatalog',
                'name' => 'Ruang Lingkup '.($service['title'] ?? ''),
                'itemListElement' => array_map(function ($scope) {
                    return [
                        '@type' => 'Offer',
                        'itemOffered' => [
                            '@type' => 'Service',
                            'name' => $scope,
                        ],
                    ];
                }, $service['scopes'] ?? []),
            ],
        ];
    }

    /**
     * Generate FAQPage Schema.org.
     */
    public static function faqSchema(array $faqs): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => array_map(function ($f) {
                return [
                    '@type' => 'Question',
                    'name' => strip_tags($f['q'] ?? ''),
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => strip_tags($f['a'] ?? ''),
                    ],
                ];
            }, $faqs),
        ];
    }
}
