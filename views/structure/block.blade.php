@if ($block->display)
    <div class="{{ $block->class }} grid-{{ $block->width }} align-{{ $block->alignment }}">
        @include (Shortcut::get_theme() . '::' . BlockType::getFrontView($block->type), ['content' => $block->content])
    </div>
@endif
