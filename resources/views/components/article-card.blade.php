@props(['article'])

<article class="article-card h-100">
    <a class="article-media" href="{{ route('articles.show', $article['slug']) }}" aria-label="Baca {{ $article['title'] }}">
        <img src="{{ \App\Support\LawFirm::assetOrFallback($article['image'] ?? null) }}"
            alt="{{ $article['title'] }}" loading="lazy" width="600" height="360">
        <span class="article-cat">{{ $article['category'] }}</span>
    </a>
    <div class="article-body">
        <p class="article-meta">
            <span><i class="fa-regular fa-calendar me-1"></i>{{ \Carbon\Carbon::parse($article['date'])->translatedFormat('d M Y') }}</span>
            <span class="mx-1">&middot;</span>
            <span>{{ $article['author'] }}</span>
        </p>
        <h3 class="article-title">
            <a href="{{ route('articles.show', $article['slug']) }}">{{ $article['title'] }}</a>
        </h3>
        <p class="article-excerpt">{{ $article['excerpt'] }}</p>
        <a class="card-link" href="{{ route('articles.show', $article['slug']) }}">Baca Selengkapnya <span aria-hidden="true">&rarr;</span></a>
    </div>
</article>
