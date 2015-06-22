@if ($area->display)
<div class="{{ $area->class }} grid-{{ $area->width }}">
    <div class="container">
        @if (isset($area->blocks))
            @foreach ($area->blocks as $block)
                @include (Shortcut::get_theme() . '::structure.block', ['block' => $block])
            @endforeach
        @endif
    </div>
</div>
@endif