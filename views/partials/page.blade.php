@if (isset($page->areas))
    {{--*/ $total_width = 0 /*--}}
    <div class="row">
        @foreach ($page->areas as $area)
            @if ($total_width >= 12){{--*/ $total_width = 0 /*--}}</div><div class="row">@endif
                @include (Shortcut::get_theme() . '::partials.area', ['area' => $area])
            @if ($total_width >= 12)</div> @endif
            {{--*/ $total_width += $area->width /*--}}
        @endforeach
    </div>
@endif