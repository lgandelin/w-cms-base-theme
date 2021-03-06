@if ($content)
    <ul>
        @foreach ($content->items as $item)
            @if ($item->display)
                @if (isset($item->page))
                    <li class="{{ $item->class }} @if ($page->uri == $item->page->uri) current @endif">
                        <a href="{{ route('front_page_index', array($item->page->uri)) }}" title="{{ $item->page->name }}">{{ $item->label }}</a>
                    </li>
                @elseif ($item->externalURL)
                    <li class="{{ $item->class }}">
                        <a href="{{ $item->externalURL }}" target="_blank">{{ $item->label }}</a>
                    </li>
                @endif
            @endif
        @endforeach
    </ul>
@endif