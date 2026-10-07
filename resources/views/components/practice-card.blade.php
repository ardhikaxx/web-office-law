@props(['area'])

<article class="law-practice-card practice-card h-100">
    <div class="law-practice-top practice-top">
        <div class="law-service-icon practice-icon mb-0" aria-hidden="true">
            <i class="{{ $area['icon'] ?? 'fa-solid fa-gavel' }}"></i>
        </div>
        <span class="law-practice-badge practice-badge">
            {{ $area['type'] ?? $area['title'] }}
        </span>
    </div>

    <h3 class="law-practice-title practice-title mt-3">{{ $area['title'] }}</h3>
    <p class="law-practice-text practice-text">{{ $area['short_description'] }}</p>

    @if (!empty($area['points']))
        <ul class="law-practice-points">
            @foreach (array_slice($area['points'], 0, 4) as $point)
                <li>
                    <i class="fa-solid fa-circle-check"></i>
                    <span>{{ $point }}</span>
                </li>
            @endforeach
        </ul>
    @endif

    <div class="mt-auto pt-2">
        <a class="btn btn-outline-navy law-btn-outline" href="{{ route('practice-areas.show', $area['slug']) }}">
            <span>Pelajari Selengkapnya</span>
            <i class="fa-solid fa-arrow-right ms-1"></i>
        </a>
    </div>
</article>
