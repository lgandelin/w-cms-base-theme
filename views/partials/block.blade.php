@if ($block->display)
    <div class="col-md-{{ $block->width }}">
        <div class="{{ $block->class }} align-{{ $block->alignment }}">
            @if ($block->type == 'html')
                {!! $block->html !!}
            @elseif ($block->type == 'menu' && isset($block->menu))
                @include (Shortcut::get_theme() . '::partials.blocks.menu', ['menu' => $block->menu])
            @elseif ($block->type == 'view_file' && $block->view_file != '')
                @include(Shortcut::get_theme() . '::partials.blocks.' . $block->view_file)
            @elseif ($block->type == 'article' && isset($block->article))
                @include (Shortcut::get_theme() . '::partials.blocks.article', ['article' => $block->article])
            @elseif ($block->type == 'article_list')
                @include (Shortcut::get_theme() . '::partials.blocks.article_list', ['articles' => $block->articles])
            @elseif ($block->type == 'media' && isset($block->media))
                @include (Shortcut::get_theme() . '::partials.blocks.media', ['media' => $block->media, 'media_link' => $block->media_link])
            @endif
        </div>
    </div>
@endif