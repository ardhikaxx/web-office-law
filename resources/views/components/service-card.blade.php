@props(['service'])

<article class="law-service-card service-card h-100">
    <div class="law-service-icon service-icon" aria-hidden="true">
        <i class="{{ $service['icon'] ?? 'fa-solid fa-scale-balanced' }}"></i>
    </div>
    <h3 class="law-service-title service-title">{{ $service['title'] }}</h3>
    <p class="law-service-text service-text">{{ $service['short_description'] }}</p>
    <a class="law-service-link card-link" href="{{ route('services.show', $service['slug']) }}">
        <span>Lihat Detail</span>
        <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
    </a>
</article>
