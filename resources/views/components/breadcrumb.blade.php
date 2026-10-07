@props(['items' => []])

@if (count($items))
    <nav aria-label="Breadcrumb" class="law-breadcrumb page-breadcrumb">
        <ol class="breadcrumb">
            @foreach ($items as $item)
                @if ($loop->last || empty($item['url']))
                    <li class="breadcrumb-item active" aria-current="page">{!! $item['label'] !!}</li>
                @else
                    <li class="breadcrumb-item">
                        <a href="{{ $item['url'] }}">{!! $item['label'] !!}</a>
                    </li>
                @endif
            @endforeach
        </ol>
    </nav>

    @php
        $breadcrumbSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => array_values(array_map(function ($idx, $item) {
                return [
                    '@type' => 'ListItem',
                    'position' => $idx + 1,
                    'name' => strip_tags($item['label'] ?? ''),
                    'item' => !empty($item['url']) ? $item['url'] : url()->current(),
                ];
            }, array_keys($items), $items)),
        ];
    @endphp
    <script type="application/ld+json">{!! json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
@endif
