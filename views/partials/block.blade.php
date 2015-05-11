@if ($block->display)
    <div class="col-md-{{ $block->width }}">
        <div class="{{ $block->class }} align-{{ $block->alignment }}">
            @if ($block->type == 'view_file' && $block->view_file != '')
                @include(Shortcut::get_theme() . '::' . $block->view_file)
            @else
                @include (Shortcut::get_theme() . '::partials.blocks.' . $block->type, ['block' => $block])
            @endif
        </div>
    </div>
@endif