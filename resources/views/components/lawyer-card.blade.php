@props(['lawyer'])

<article class="lawyer-card h-100">
    <div class="lawyer-photo">
        <img src="{{ \App\Support\LawFirm::assetOrFallback($lawyer['photo'] ?? null) }}"
            alt="Foto {{ $lawyer['name'] }}" loading="lazy" width="400" height="460">
    </div>
    <div class="lawyer-body">
        <h3 class="lawyer-name">{{ $lawyer['name'] }}</h3>
        <p class="lawyer-position">{{ $lawyer['position'] }}</p>
        <p class="lawyer-spec"><i class="fa-solid fa-briefcase me-1"></i>{{ $lawyer['specialization'] }}</p>
        <a class="card-link" href="{{ route('lawyers.show', $lawyer['slug']) }}">Lihat Profil <span aria-hidden="true">&rarr;</span></a>
    </div>
</article>
