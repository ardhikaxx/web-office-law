@props(['items' => []])

@if (count($items))
    <nav aria-label="Breadcrumb" class="law-breadcrumb page-breadcrumb">
        <ol class="breadcrumb">
            @foreach ($items as $item)
                @if ($loop->last || empty($item['url']))
                    <li class="breadcrumb-item active" aria-current="page">{{ $item['label'] }}</li>
                @else
                    <li class="breadcrumb-item">
                        <a href="{{ $item['url'] }}">{{ $item['label'] }}</a>
                    </li>
                @endif
            @endforeach
        </ol>
    </nav>
@endif
