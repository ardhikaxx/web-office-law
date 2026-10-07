<?php

namespace App\Http\Controllers;

use App\Support\LawFirm;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $urls = [
            ['loc' => route('home'), 'priority' => '1.0'],
            ['loc' => route('about'), 'priority' => '0.8'],
            ['loc' => route('services.index'), 'priority' => '0.9'],
            ['loc' => route('practice-areas.index'), 'priority' => '0.9'],
            ['loc' => route('lawyers.index'), 'priority' => '0.8'],
            ['loc' => route('contact'), 'priority' => '0.9'],
            ['loc' => route('faq'), 'priority' => '0.5'],
            ['loc' => route('disclaimer'), 'priority' => '0.3'],
            ['loc' => route('privacy'), 'priority' => '0.3'],
            ['loc' => route('terms'), 'priority' => '0.3'],
        ];

        foreach (LawFirm::services() as $service) {
            $urls[] = ['loc' => route('services.show', $service['slug']), 'priority' => '0.7'];
        }

        foreach (LawFirm::practiceAreas() as $area) {
            $urls[] = ['loc' => route('practice-areas.show', $area['slug']), 'priority' => '0.7'];
        }

        foreach (LawFirm::lawyers() as $lawyer) {
            if (! empty($lawyer['has_detail'])) {
                $urls[] = ['loc' => route('lawyers.show', $lawyer['slug']), 'priority' => '0.6'];
            }
        }

        return response()
            ->view('sitemap', ['urls' => $urls])
            ->header('Content-Type', 'text/xml');
    }
}
