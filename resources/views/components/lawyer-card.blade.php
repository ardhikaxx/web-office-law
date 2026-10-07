@props(['lawyer'])

<article class="law-attorney-card lawyer-card h-100">
    <div class="law-attorney-photo lawyer-photo">
        <img src="{{ \App\Support\LawFirm::assetOrFallback($lawyer['photo'] ?? null) }}"
             alt="Foto Advokat {{ $lawyer['name'] }}"
             loading="lazy"
             width="400"
             height="480">
    </div>
    <div class="law-attorney-body lawyer-body">
        <h3 class="law-attorney-name lawyer-name">
            <a href="{{ route('lawyers.show', $lawyer['slug']) }}" class="text-white text-decoration-none">
                {{ $lawyer['name'] }}
            </a>
        </h3>
        <p class="law-attorney-pos lawyer-position">{{ $lawyer['position'] }}</p>
        <p class="law-attorney-spec lawyer-spec">
            <i class="fa-solid fa-briefcase text-gold me-1"></i>{{ $lawyer['specialization'] }}
        </p>
        
        <div class="law-attorney-social">
            <a href="{{ route('lawyers.show', $lawyer['slug']) }}" aria-label="Lihat Profil {{ $lawyer['name'] }}" title="Lihat Profil">
                <i class="fa-solid fa-user"></i>
            </a>
            <a href="{{ $site['linkedin'] ?? '#' }}" aria-label="LinkedIn {{ $lawyer['name'] }}" target="_blank" rel="noopener">
                <i class="fa-brands fa-linkedin-in"></i>
            </a>
            <a href="mailto:{{ $site['email'] ?? 'info@holongsiregar.com' }}" aria-label="Email {{ $lawyer['name'] }}">
                <i class="fa-regular fa-envelope"></i>
            </a>
            <a href="{{ route('contact') }}" class="ms-auto law-service-link text-gold-light" style="font-size: 0.78rem;">
                Profil <i class="fa-solid fa-arrow-right ms-1"></i>
            </a>
        </div>
    </div>
</article>
