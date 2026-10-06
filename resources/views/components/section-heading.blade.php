@props(['eyebrow' => null, 'title' => '', 'description' => null, 'align' => 'center', 'dark' => false])

@php
    $alignClass = $align === 'start' ? 'text-start mx-0' : 'text-center mx-auto';
@endphp

<div class="section-heading {{ $alignClass }} {{ $dark ? 'is-dark' : '' }}">
    @if ($eyebrow)
        <span class="section-eyebrow">{{ $eyebrow }}</span>
    @endif
    <h2 class="section-title">{{ $title }}</h2>
    @if ($description)
        <p class="section-desc">{{ $description }}</p>
    @endif
</div>
