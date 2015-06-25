@if ($area->display)
<div class="{{ $area->class }} grid-{{ $area->width }}">
    <div class="container">
        @if (isset($area->blocks))
            @foreach ($area->blocks as $block)
                @include ($theme . '::structure.block', ['block' => $block])
            @endforeach
        @endif
    </div>
</div>
@endif