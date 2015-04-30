@if ($media_link)<a href="{{ $media_link }}">@endif
    <img src="{{ asset('img/uploads/' . $media->ID . '/' . $media->file_name) }}" alt="{{ $media->alt }}" @if ($media->title) title="{{ $media->title }}" @endif style="display: block; max-width: 100%; height: auto" />
@if ($media_link)</a>@endif