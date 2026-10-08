<?php

namespace App\Support;

class Seo
{
    /**
     * Default brand name for the law firm.
     */
    public static function brand(): string
    {
        return 'Holong Siregar & Co.';
    }

    /**
     * Build consistent, high-ranking page title (optimized for <= 60 characters SERP display).
     */
    public static function title(?string $pageTitle = null): string
    {
        if (empty($pageTitle)) {
            return 'Pengacara di Tangerang & Bogor | '.self::brand();
        }

        if (str_contains($pageTitle, 'Holong Siregar')) {
            return $pageTitle;
        }

        $candidate = $pageTitle.' | '.self::brand();

        if (mb_strlen($candidate) > 65 && mb_strlen($pageTitle) >= 40) {
            return $pageTitle;
        }

        return $candidate;
    }

    /**
     * Concise, focused keywords (avoids search engine keyword stuffing penalty).
     */
    public static function keywords(array|string $additional = []): string
    {
        $base = [
            'pengacara di tangerang',
            'advokat tangerang',
            'kantor hukum tangerang',
            'pengacara bogor',
            'jasa pengacara tangerang',
            'holong siregar',
        ];

        if (is_string($additional) && ! empty($additional)) {
            $extra = array_map('trim', explode(',', $additional));
        } elseif (is_array($additional)) {
            $extra = $additional;
        } else {
            $extra = [];
        }

        $merged = array_values(array_unique(array_merge($extra, $base)));

        return implode(', ', array_slice($merged, 0, 7));
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
                'telephone' => ['+6281318841961', '+6285771633860'],
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

    /**
     * Generate BlogPosting/Article Schema.org for legal educational articles.
     */
    public static function articleSchema(array $article): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'BlogPosting',
            '@id' => route('articles.show', $article['slug']).'#article',
            'headline' => $article['title'] ?? '',
            'description' => $article['excerpt'] ?? '',
            'image' => ! empty($article['image']) ? asset('assets/'.$article['image']) : asset('assets/images/og-image.jpg'),
            'datePublished' => $article['published_at'] ?? '2026-10-08',
            'dateModified' => $article['updated_at'] ?? ($article['published_at'] ?? '2026-10-08'),
            'author' => [
                '@type' => 'Person',
                'name' => $article['author'] ?? 'Holong Siregar, S.H.',
                'jobTitle' => $article['author_role'] ?? 'Managing Partner & Advokat',
                'url' => route('home'),
            ],
            'publisher' => [
                '@type' => 'LegalService',
                'name' => self::brand(),
                'url' => route('home'),
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => asset('assets/images/logo.webp'),
                ],
            ],
            'mainEntityOfPage' => [
                '@type' => 'WebPage',
                '@id' => route('articles.show', $article['slug']),
            ],
            'articleSection' => $article['category'] ?? 'Hukum',
            'inLanguage' => 'id-ID',
        ];
    }
}
