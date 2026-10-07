@props(['service', 'isWide' => false])

<article class="law-service-card service-card h-100 {{ $isWide ? 'law-service-card-wide' : '' }}">
    <div class="law-service-icon service-icon" aria-hidden="true">
        <i class="{{ $service['icon'] ?? 'fa-solid fa-building-columns' }}"></i>
    </div>
    <h3 class="law-service-title service-title">{{ $service['title'] }}</h3>
    <p class="law-service-text service-text {{ $isWide ? 'law-service-text-wide' : '' }}">{{ $service['short_description'] }}</p>
    <a class="law-service-link card-link" href="{{ route('services.show', $service['slug']) }}">
        <span>Lihat detail layanan</span>
        <span class="law-service-link-arrow" aria-hidden="true">&rarr;</span>
    </a>
</article>
