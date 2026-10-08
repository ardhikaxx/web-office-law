<?php

namespace App\Http\Controllers;

use App\Support\LawFirm;
use App\Support\Seo;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ArticleController extends Controller
{
    /**
     * Display legal articles index.
     */
    public function index(Request $request): View
    {
        $articles = LawFirm::articles();
        $category = $request->query('kategori');

        if ($category) {
            $articles = array_values(array_filter($articles, function ($a) use ($category) {
                return strtolower($a['category']) === strtolower($category);
            }));
        }

        $allCategories = array_values(array_unique(array_map(function ($a) {
            return $a['category'];
        }, LawFirm::articles())));

        return view('pages.articles.index', [
            'articles' => $articles,
            'categories' => $allCategories,
            'selectedCategory' => $category,
            'whatsappUrl' => LawFirm::whatsappUrl('Halo Holong Siregar & Co., saya membaca artikel hukum di website Anda dan ingin berkonsultasi.'),
        ]);
    }

    /**
     * Display single legal article.
     */
    public function show(string $slug): View
    {
        $article = LawFirm::findArticle($slug);

        if (! $article) {
            abort(404);
        }

        $related = LawFirm::relatedArticles($slug, 3);
        $schema = Seo::articleSchema($article);

        $waMessage = 'Halo Holong Siregar & Co., saya membaca artikel "'.$article['title'].'" dan ingin berkonsultasi mengenai persoalan hukum saya.';

        return view('pages.articles.show', [
            'article' => $article,
            'related' => $related,
            'schema' => $schema,
            'whatsappUrl' => LawFirm::whatsappUrl($waMessage),
        ]);
    }
}
