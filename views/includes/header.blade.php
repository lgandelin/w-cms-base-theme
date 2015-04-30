<html>
<head>
    <meta charset="UTF-8">
    <title>@if ($page->meta_title){{ $page->meta_title }}@else{{$page->name }}@endif</title>
    {!! HTML::style('w-cms-base-theme/css/styles.css') !!}
    @if ($page->meta_description)<meta name="description" content="{{ $page->meta_description }}" />@endif
    @if ($page->meta_keywords)<meta name="keywords" content="{{ $page->meta_keywords }}" />@endif
</head>
<body>