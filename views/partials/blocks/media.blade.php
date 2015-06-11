@if (isset($content->media))
    @if ($content->media_link)<a href="{{ $content->media_link }}">@endif
        <img src="{{ asset(Shortcut::get_uploads_folder() . $content->media->ID . '/' . $content->media->file_name) }}" alt="{{ $content->media->alt }}" @if ($content->media->title) title="{{ $content->media->title }}" @endif style="display: block; max-width: 100%; height: auto" />
    @if ($content->media_link)</a>@endif
@endif