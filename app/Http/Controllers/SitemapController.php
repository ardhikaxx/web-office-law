<?php

namespace App\Http\Controllers;

use App\Support\LawFirm;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $releaseDate = '2026-10-08';

        $urls = [
            ['loc' => route('home'), 'priority' => '1.0', 'changefreq' => 'weekly', 'lastmod' => $releaseDate],
            ['loc' => route('services.index'), 'priority' => '0.9', 'changefreq' => 'weekly', 'lastmod' => $releaseDate],
            ['loc' => route('contact'), 'priority' => '0.9', 'changefreq' => 'weekly', 'lastmod' => $releaseDate],
            ['loc' => route('about'), 'priority' => '0.8', 'changefreq' => 'monthly', 'lastmod' => $releaseDate],
            ['loc' => route('practice-areas.index'), 'priority' => '0.8', 'changefreq' => 'monthly', 'lastmod' => $releaseDate],
            ['loc' => route('lawyers.index'), 'priority' => '0.8', 'changefreq' => 'monthly', 'lastmod' => $releaseDate],
            ['loc' => route('faq'), 'priority' => '0.7', 'changefreq' => 'weekly', 'lastmod' => $releaseDate],
            ['loc' => route('disclaimer'), 'priority' => '0.3', 'changefreq' => 'yearly', 'lastmod' => $releaseDate],
            ['loc' => route('privacy'), 'priority' => '0.3', 'changefreq' => 'yearly', 'lastmod' => $releaseDate],
            ['loc' => route('terms'), 'priority' => '0.3', 'changefreq' => 'yearly', 'lastmod' => $releaseDate],
        ];

        foreach (LawFirm::services() as $service) {
            $urls[] = [
                'loc' => route('services.show', $service['slug']),
                'priority' => '0.9',
                'changefreq' => 'weekly',
                'lastmod' => $releaseDate,
            ];
        }

        foreach (LawFirm::practiceAreas() as $area) {
            $urls[] = [
                'loc' => route('practice-areas.show', $area['slug']),
                'priority' => '0.7',
                'changefreq' => 'monthly',
                'lastmod' => $releaseDate,
            ];
        }

        foreach (LawFirm::lawyers() as $lawyer) {
            if (! empty($lawyer['has_detail'])) {
                $urls[] = [
                    'loc' => route('lawyers.show', $lawyer['slug']),
                    'priority' => '0.7',
                    'changefreq' => 'monthly',
                    'lastmod' => $releaseDate,
                ];
            }
        }

        return response()
            ->view('sitemap', ['urls' => $urls])
            ->header('Content-Type', 'text/xml');
    }
}
