@if ($area->display)
    <div class="col-md-{{ $area->width }}">
        <div class="{{ $area->class }}">
            @if (isset($area->blocks))
                {{--*/ $total_width = 0 /*--}}
                <div class="row">
                    @foreach ($area->blocks as $block)
                        @if ($total_width >= 12){{--*/ $total_width = 0 /*--}}</div><div class="row">@endif
                            @include (Shortcut::get_theme() . '::partials.block', ['block' => $block])
                        @if ($total_width >= 12)</div> @endif
                        {{--*/ $total_width += $block->width /*--}}
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endif