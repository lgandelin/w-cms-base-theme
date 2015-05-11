@if (isset($block->article))
    <h2>{{ $block->article->title }}</h2>
    {!! $block->article->text !!}
@endif