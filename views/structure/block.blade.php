@if ($block->display)
    <div class="{{ $block->class }} grid-{{ $block->width }} align-{{ $block->alignment }}">
    	<div class="block">
            @if (isset($block->front_content))
                {!! $block->front_content !!}
            @elseif ($block->type->front_view)
        	    @include ($theme . '::' . $block->type->front_view)
            @endif
        </div>
    </div>
@endif
