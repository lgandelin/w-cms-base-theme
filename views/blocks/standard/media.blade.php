@if (isset($content->media))
    @if ($content->mediaLink)<a href="{{ $content->mediaLink }}">@endif
        <img src="{{ asset(Shortcut::get_uploads_folder() . $content->media->ID . '/' . $content->media->fileName) }}" alt="{{ $content->media->alt }}" @if ($content->media->title) title="{{ $content->media->title }}" @endif style="display: block; max-width: 100%; height: auto" />
    @if ($content->mediaLink)</a>@endif
@endif