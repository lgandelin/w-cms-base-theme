@if ($block->display)
    <div class="col-md-{{ $block->width }} align-{{ $block->alignment }}">
        <div class="{{ $block->class }}">
            @include (Shortcut::get_theme() . '::' . BlockType::getFrontView($block->type), ['content' => $block->content])
        </div>
    </div>
@endif
