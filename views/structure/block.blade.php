@if ($block->display)
    <div class="{{ $block->class }} grid-{{ $block->width }} align-{{ $block->alignment }}">
        @include (Shortcut::get_theme() . '::' . $block->type->front_view, ['content' => $block->content])
    </div>
@endif
