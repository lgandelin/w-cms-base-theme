@if ($block->display)
    <div class="grid-{{ $block->width }} {{ $block->class }}">
        @if ($block->type == 'html')
            {!! $block->html !!}
        @elseif ($block->type == 'menu' && isset($block->menu))
            @include ('w-cms-base-theme::partials.blocks.menu', ['menu' => $block->menu])
        @elseif ($block->type == 'view_file' && $block->view_file != '')
            @include($block->view_file)
        @elseif ($block->type == 'article' && isset($block->article))
            @include ('w-cms-base-theme::partials.blocks.article', ['article' => $block->article])
        @elseif ($block->type == 'article_list')
            @include ('w-cms-base-theme::partials.blocks.article_list', ['articles' => $block->articles])
        @elseif ($block->type == 'media' && isset($block->media))
            @include ('w-cms-base-theme::partials.blocks.media', ['media' => $block->media, 'media_link' => $block->media_link])
        @endif
    </div>
@endif