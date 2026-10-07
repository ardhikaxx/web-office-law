@props([
    'eyebrow' => null,
    'title' => '',
    'description' => null,
    'align' => 'center',
    'dark' => false,
    'divider' => true,
])

@php
    $alignClass = $align === 'start' ? 'text-start mx-0' : 'text-center mx-auto';
    $dividerClass = $align === 'start' ? 'law-divider-gold start' : 'law-divider-gold';
@endphp

<div class="law-section-heading section-heading {{ $alignClass }} {{ $dark ? 'is-dark' : '' }}">
    @if ($eyebrow)
        <span class="law-section-eyebrow section-eyebrow">{{ $eyebrow }}</span>
    @endif
    
    <h2 class="law-section-title section-title">{!! $title !!}</h2>

    @if ($divider)
        <div class="{{ $dividerClass }}" aria-hidden="true">
            <i class="fa-solid fa-scale-balanced"></i>
        </div>
    @endif

    @if ($description)
        <p class="law-section-desc section-desc">{{ $description }}</p>
    @endif
</div>
