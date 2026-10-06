<?php

namespace App\Http\Controllers;

use App\Support\LawFirm;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function index(): View
    {
        $articles = LawFirm::articles();
        $categories = collect($articles)->pluck('category')->unique()->values()->all();

        return view('pages.articles.index', [
            'articles' => $articles,
            'categories' => $categories,
            'featured' => $articles[0] ?? null,
        ]);
    }

    public function show(string $slug): View
    {
        $article = LawFirm::findArticle($slug);

        abort_if($article === null, 404);

        return view('pages.articles.show', [
            'article' => $article,
            'related' => LawFirm::relatedArticles($slug, 3),
        ]);
    }
}
