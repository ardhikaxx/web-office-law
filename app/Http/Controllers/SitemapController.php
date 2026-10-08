<?php

namespace App\Http\Controllers;

use App\Support\LawFirm;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    /**
     * Generate dynamic Google-compliant XML sitemap with image extension.
     */
    public function index(): Response
    {
        $siteModified = date('Y-m-d', @filemtime(config_path('lawfirm.php')) ?: time());

        $urls = [
            [
                'loc' => route('home'),
                'priority' => '1.0',
                'changefreq' => 'daily',
                'lastmod' => $siteModified,
                'images' => [
                    ['loc' => asset('assets/images/og-image.webp'), 'title' => 'Holong Siregar & Co. Law Office - Pengacara Tangerang & Bogor'],
                    ['loc' => asset('assets/images/simbol-justice.webp'), 'title' => 'Simbol Keadilan Lady Justice'],
                ],
            ],
            [
                'loc' => route('services.index'),
                'priority' => '0.9',
                'changefreq' => 'weekly',
                'lastmod' => $siteModified,
                'images' => [
                    ['loc' => asset('assets/images/og-image.webp'), 'title' => 'Katalog Layanan Hukum Holong Siregar & Co.'],
                ],
            ],
            [
                'loc' => route('articles.index'),
                'priority' => '0.9',
                'changefreq' => 'daily',
                'lastmod' => $siteModified,
                'images' => [
                    ['loc' => asset('assets/images/og-image.webp'), 'title' => 'Artikel & Panduan Hukum Holong Siregar & Co.'],
                ],
            ],
            [
                'loc' => route('contact'),
                'priority' => '0.8',
                'changefreq' => 'monthly',
                'lastmod' => $siteModified,
            ],
            [
                'loc' => route('about'),
                'priority' => '0.8',
                'changefreq' => 'monthly',
                'lastmod' => $siteModified,
            ],
            [
                'loc' => route('practice-areas.index'),
                'priority' => '0.8',
                'changefreq' => 'monthly',
                'lastmod' => $siteModified,
            ],
            [
                'loc' => route('lawyers.index'),
                'priority' => '0.7',
                'changefreq' => 'monthly',
                'lastmod' => $siteModified,
            ],
            [
                'loc' => route('faq'),
                'priority' => '0.7',
                'changefreq' => 'monthly',
                'lastmod' => $siteModified,
            ],
            [
                'loc' => route('disclaimer'),
                'priority' => '0.3',
                'changefreq' => 'yearly',
                'lastmod' => $siteModified,
            ],
            [
                'loc' => route('privacy'),
                'priority' => '0.3',
                'changefreq' => 'yearly',
                'lastmod' => $siteModified,
            ],
            [
                'loc' => route('terms'),
                'priority' => '0.3',
                'changefreq' => 'yearly',
                'lastmod' => $siteModified,
            ],
        ];

        // Services
        foreach (LawFirm::services() as $service) {
            $images = [];
            if (! empty($service['image'])) {
                $images[] = [
                    'loc' => asset('assets/'.$service['image']),
                    'title' => $service['title'] ?? 'Layanan Hukum',
                ];
            }

            $urls[] = [
                'loc' => route('services.show', $service['slug']),
                'priority' => '0.9',
                'changefreq' => 'weekly',
                'lastmod' => $siteModified,
                'images' => $images,
            ];
        }

        // Articles (Long-tail SEO)
        foreach (LawFirm::articles() as $article) {
            $images = [];
            if (! empty($article['image'])) {
                $images[] = [
                    'loc' => asset('assets/'.$article['image']),
                    'title' => $article['title'] ?? 'Artikel Hukum',
                ];
            }

            $urls[] = [
                'loc' => route('articles.show', $article['slug']),
                'priority' => '0.8',
                'changefreq' => 'weekly',
                'lastmod' => $article['updated_at'] ?? ($article['published_at'] ?? $siteModified),
                'images' => $images,
            ];
        }

        // Practice Areas
        foreach (LawFirm::practiceAreas() as $area) {
            $images = [];
            if (! empty($area['image'])) {
                $images[] = [
                    'loc' => asset('assets/'.$area['image']),
                    'title' => $area['title'] ?? 'Area Praktik Hukum',
                ];
            }

            $urls[] = [
                'loc' => route('practice-areas.show', $area['slug']),
                'priority' => '0.7',
                'changefreq' => 'monthly',
                'lastmod' => $siteModified,
                'images' => $images,
            ];
        }

        // Lawyers
        foreach (LawFirm::lawyers() as $lawyer) {
            if (! empty($lawyer['has_detail'])) {
                $images = [];
                if (! empty($lawyer['photo'])) {
                    $images[] = [
                        'loc' => asset('assets/'.$lawyer['photo']),
                        'title' => $lawyer['name'] ?? 'Advokat Holong Siregar & Co.',
                    ];
                }

                $urls[] = [
                    'loc' => route('lawyers.show', $lawyer['slug']),
                    'priority' => '0.7',
                    'changefreq' => 'monthly',
                    'lastmod' => $siteModified,
                    'images' => $images,
                ];
            }
        }

        return response()
            ->view('sitemap', ['urls' => $urls])
            ->header('Content-Type', 'text/xml');
    }
}
