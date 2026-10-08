<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class RobotsController extends Controller
{
    /**
     * Render dynamic robots.txt with absolute sitemap URL.
     */
    public function index(): Response
    {
        $sitemapUrl = route('sitemap');

        $lines = [
            'User-agent: *',
            'Allow: /',
            'Disallow: /admin',
            'Disallow: /dashboard',
            '',
            'Sitemap: '.$sitemapUrl,
            '',
        ];

        return response(implode("\n", $lines), 200, [
            'Content-Type' => 'text/plain',
        ]);
    }
}
