@if (isset($block->media))
    @if ($block->mediaLink)<a href="{{ $block->mediaLink }}">@endif
        <img src="{{ asset(Shortcut::get_uploads_folder() . $block->media->ID . '/' . $block->media->fileName) }}" alt="{{ $block->media->alt }}" @if ($block->media->title) title="{{ $block->media->title }}" @endif />
    @if ($block->mediaLink)</a>@endif
@endif