@if (isset($block->media))
    @if ($block->media_link)<a href="{{ $block->media_link }}">@endif
        <img src="{{ asset(Shortcut::get_uploads_folder() . $block->media->ID . '/' . $block->media->file_name) }}" alt="{{ $block->media->alt }}" @if ($block->media->title) title="{{ $block->media->title }}" @endif style="display: block; max-width: 100%; height: auto" />
    @if ($block->media_link)</a>@endif
@endif