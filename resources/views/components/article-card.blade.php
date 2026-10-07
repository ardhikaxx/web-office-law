@props(['article'])

<article class="law-article-card article-card h-100">
    <a class="law-article-media article-media" href="{{ route('articles.show', $article['slug']) }}" aria-label="Baca {{ $article['title'] }}">
        <img src="{{ \App\Support\LawFirm::assetOrFallback($article['image'] ?? null) }}"
             alt="{{ $article['title'] }}"
             loading="lazy"
             width="600"
             height="375">
        <span class="law-article-cat article-cat">{{ $article['category'] }}</span>
    </a>
    <div class="law-article-body article-body">
        <p class="law-article-meta article-meta">
            <span><i class="fa-regular fa-calendar text-gold me-1"></i>{{ \Carbon\Carbon::parse($article['date'])->translatedFormat('d M Y') }}</span>
            <span class="mx-1">&middot;</span>
            <span><i class="fa-regular fa-user text-gold me-1"></i>{{ $article['author'] }}</span>
        </p>
        <h3 class="law-article-title article-title">
            <a href="{{ route('articles.show', $article['slug']) }}">
                {{ $article['title'] }}
            </a>
        </h3>
        <p class="law-article-excerpt article-excerpt">{{ $article['excerpt'] }}</p>
        <div class="mt-auto pt-2">
            <a class="law-service-link card-link" href="{{ route('articles.show', $article['slug']) }}">
                <span>Baca Selengkapnya</span>
                <i class="fa-solid fa-arrow-right ms-1" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</article>
