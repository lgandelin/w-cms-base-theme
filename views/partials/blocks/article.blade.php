@if ($content)
    <h2>{{ $content->title }}</h2>
    {!! $content->text !!}
@endif