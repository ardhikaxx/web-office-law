@props(['lawyer'])

<article class="law-attorney-card lawyer-card h-100 d-flex flex-column">
    <div class="law-attorney-photo lawyer-photo">
        @if (!empty($lawyer['has_detail']))
            <a href="{{ route('lawyers.show', $lawyer['slug']) }}" class="d-block w-100 h-100" aria-label="Lihat Profil {{ $lawyer['name'] }}">
                <img src="{{ \App\Support\LawFirm::assetOrFallback($lawyer['photo'] ?? null) }}"
                     alt="Foto {{ $lawyer['name'] }}"
                     loading="lazy"
                     width="400"
                     height="480">
            </a>
        @else
            <img src="{{ \App\Support\LawFirm::assetOrFallback($lawyer['photo'] ?? null) }}"
                 alt="Foto {{ $lawyer['name'] }}"
                 loading="lazy"
                 width="400"
                 height="480">
        @endif
    </div>
    <div class="law-attorney-body lawyer-body d-flex flex-column flex-grow-1">
        <h3 class="law-attorney-name lawyer-name mb-1">
            @if (!empty($lawyer['has_detail']))
                <a href="{{ route('lawyers.show', $lawyer['slug']) }}" class="text-white text-decoration-none">
                    {{ $lawyer['name'] }}
                </a>
            @else
                <span class="text-white">{{ $lawyer['name'] }}</span>
            @endif
        </h3>
        <p class="law-attorney-pos lawyer-position text-gold-light fw-bold small mb-2">{{ $lawyer['position'] }}</p>

        @if (!empty($lawyer['specialization']))
            <p class="law-attorney-spec lawyer-spec small text-light-subtle mb-3">
                <i class="fa-solid fa-briefcase text-gold me-1"></i>{{ $lawyer['specialization'] }}
            </p>
        @endif

        @if (!empty($lawyer['has_detail']))
            <div class="mt-auto pt-3 border-top border-white border-opacity-10">
                <a href="{{ route('lawyers.show', $lawyer['slug']) }}" class="btn law-btn-outline-gold btn-sm w-100">
                    <span>Lihat Profil Lengkap</span>
                    <i class="fa-solid fa-arrow-right ms-1"></i>
                </a>
            </div>
        @endif
    </div>
</article>
