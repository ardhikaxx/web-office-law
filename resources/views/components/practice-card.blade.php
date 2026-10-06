@props(['area'])

<article class="practice-card h-100">
    <div class="practice-top">
        <span class="practice-icon" aria-hidden="true"><i class="{{ $area['icon'] ?? 'fa-solid fa-gavel' }}"></i></span>
        <span class="practice-badge">{{ $area['type'] ?? $area['title'] }}</span>
    </div>
    <h3 class="practice-title">{{ $area['title'] }}</h3>
    <p class="practice-text">{{ $area['short_description'] }}</p>
    <a class="btn btn-outline-navy btn-sm" href="{{ route('practice-areas.show', $area['slug']) }}">Selengkapnya</a>
</article>
