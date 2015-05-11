@if (isset($block->menu))
    <ul>
        @foreach ($block->menu->items as $item)
            @if ($item->display)
                @if (isset($item->page))
                    <li class="{{ $item->class }} @if ($page->uri == $item->page->uri) current @endif">
                        <a href="{{ route('front_page_index', array($item->page->uri)) }}" title="{{ $item->page->name }}">{{ $item->label }}</a>
                    </li>
                @elseif ($item->external_url)
                    <li class="{{ $item->class }}">
                        <a href="{{ $item->external_url }}" target="_blank">{{ $item->label }}</a>
                    </li>
                @endif
            @endif
        @endforeach
    </ul>
@endif