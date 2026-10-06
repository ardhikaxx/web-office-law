@props(['service'])

<article class="service-card h-100">
    <div class="service-icon" aria-hidden="true">
        <i class="{{ $service['icon'] ?? 'fa-solid fa-scale-balanced' }}"></i>
    </div>
    <h3 class="service-title">{{ $service['title'] }}</h3>
    <p class="service-text">{{ $service['short_description'] }}</p>
    <a class="card-link" href="{{ route('services.show', $service['slug']) }}">
        Lihat detail layanan <span aria-hidden="true">&rarr;</span>
    </a>
</article>
