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

    public static function vision(): string
    {
        return (string) config('lawfirm.vision', '');
    }

    public static function mission(): string
    {
        return (string) config('lawfirm.mission', '');
    }

    public static function whatsappUrl(?string $message = null): string
    {
        $number = preg_replace('/[^0-9]/', '', (string) self::site('whatsapp', ''));
        $text = $message ?? (string) self::site('whatsapp_message', 'Halo Holong Siregar & Co.');

        return 'https://wa.me/'.$number.'?text='.urlencode($text);
    }

    public static function publicCandidates(): array
    {
        $candidates = [];

        try {
            $candidates[] = public_path();
        } catch (\Throwable) {
            // abaikan, lanjut ke kandidat lain
        }

        // Pola shared-hosting: code di /home/user/office-law,
        // docroot di /home/user/public_html
        $candidates[] = dirname(base_path()).'/public_html';
        $candidates[] = base_path('../public_html');
        $candidates[] = base_path('public');

        return array_values(array_unique(array_filter($candidates, fn ($p) => is_string($p) && $p !== '')));
    }

    public static function publicAssetExists(string $relative): bool
    {
        $relative = ltrim($relative, '/');

        foreach (self::publicCandidates() as $base) {
            if (@file_exists($base.'/'.$relative)) {
                return true;
            }
        }

        return false;
    }

    public static function assetVersion(string $relative): string
    {
        $relative = ltrim($relative, '/');

        foreach (self::publicCandidates() as $base) {
            $full = $base.'/'.$relative;
            if (@is_file($full)) {
                $mtime = @filemtime($full);

                if ($mtime !== false) {
                    return (string) $mtime;
                }
            }
        }

        return '1';
    }

    public static function versionedAsset(string $relative): string
    {
        $relative = ltrim($relative, '/');

        return asset($relative).'?v='.self::assetVersion($relative);
    }

    public static function assetOrFallback(?string $path, string $fallback = 'images/placeholder.svg'): string
    {
        if ($path) {
            $webpPath = preg_replace('/\.(jpe?g|png)$/i', '.webp', $path);
            if ($webpPath !== $path && self::publicAssetExists('assets/'.$webpPath)) {
                return asset('assets/'.$webpPath);
            }

            if (self::publicAssetExists('assets/'.$path)) {
                return asset('assets/'.$path);
            }

            // Hosting split-folder (code di office-law, docroot di public_html):
            // public_path() menunjuk ke office-law/public, padahal file diserve
            // dari public_html. Kalau file tidak ketemu di public_path tapi path
            // diminta tidak kosong, tetap kembalikan URL asset agar browser bisa
            // memuat dari public_html. Fallback hanya untuk path kosong.
            // Kembalikan URL optimistis agar tidak selalu jatuh ke placeholder
            // saat file sebenarnya ada di public_html.
            if (! str_contains($path, '..')) {
                return asset('assets/'.$path);
            }
        }

        return asset('assets/'.$fallback);
    }

    public static function articles(): array
    {
        return config('lawfirm.articles', []);
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
}
