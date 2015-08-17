@if ($block->display)
    <div class="{{ $block->class }} grid-{{ $block->width }} align-{{ $block->alignment }}">
    	<div class="block">
        	@include ($theme . '::' . $block->type->front_view, ['content' => $block->content])
        </div>
    </div>
@endif
