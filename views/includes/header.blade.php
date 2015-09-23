<html>
<head>
    <meta charset="UTF-8">
    <title>@if ($page->meta_title){{ $page->meta_title }}@else{{$page->name }}@endif</title>
    {!! HTML::style('css/styles.css') !!}
    @if ($page->meta_description)<meta name="description" content="{{ $page->meta_description }}" />@endif
    @if ($page->meta_keywords)<meta name="keywords" content="{{ $page->meta_keywords }}" />@endif
    @if (!$page->is_indexed || !env('ROBOTS_INDEXING'))<meta name="robots" content="noindex, nofollow" />@endif
</head>
<body>