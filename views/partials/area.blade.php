@if ($area->display)
    <div class="grid-{{ $area->width }} {{ $area->class }}">
        @if (isset($area->blocks))
            @foreach ($area->blocks as $block)
                @include ('w-cms-base-theme::partials.block', ['block' => $block])
            @endforeach
        @endif
    </div>
@endif