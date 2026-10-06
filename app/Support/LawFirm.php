<?php

namespace App\Support;

class LawFirm
{
    public static function site(?string $key = null, mixed $default = null): mixed
    {
        $site = config('lawfirm.site', []);

        if ($key === null) {
            return $site;
        }

        return $site[$key] ?? $default;
    }

    public static function services(): array
    {
        return config('lawfirm.services', []);
    }

    public static function findService(string $slug): ?array
    {
        foreach (self::services() as $service) {
            if ($service['slug'] === $slug) {
                return $service;
            }
        }

        return null;
    }

    public static function relatedServices(string $slug, int $limit = 3): array
    {
        return collect(self::services())
            ->where('slug', '!=', $slug)
            ->take($limit)
            ->values()
            ->all();
    }

    public static function practiceAreas(): array
    {
        return config('lawfirm.practice_areas', []);
    }

    public static function findPracticeArea(string $slug): ?array
    {
        foreach (self::practiceAreas() as $area) {
            if ($area['slug'] === $slug) {
                return $area;
            }
        }

        return null;
    }

    public static function lawyers(): array
    {
        return config('lawfirm.lawyers', []);
    }

    public static function findLawyer(string $slug): ?array
    {
        foreach (self::lawyers() as $lawyer) {
            if ($lawyer['slug'] === $slug) {
                return $lawyer;
            }
        }

        return null;
    }

    public static function articles(): array
    {
        return collect(config('lawfirm.articles', []))
            ->sortByDesc('date')
            ->values()
            ->all();
    }

    public static function findArticle(string $slug): ?array
    {
        foreach (self::articles() as $article) {
            if ($article['slug'] === $slug) {
                return $article;
            }
        }

        return null;
    }

    public static function relatedArticles(string $slug, int $limit = 3): array
    {
        return collect(self::articles())
            ->where('slug', '!=', $slug)
            ->take($limit)
            ->values()
            ->all();
    }

    public static function whatsappUrl(?string $message = null): string
    {
        $number = preg_replace('/[^0-9]/', '', (string) self::site('whatsapp', ''));
        $text = $message ?? (string) self::site('whatsapp_message', 'Halo Holong Siregar & Co.');

        return 'https://wa.me/'.$number.'?text='.urlencode($text);
    }

    public static function assetOrFallback(?string $path, string $fallback = 'images/placeholder.svg'): string
    {
        if ($path && file_exists(public_path('assets/'.$path))) {
            return asset('assets/'.$path);
        }

        return asset('assets/'.$fallback);
    }
}
