@if (isset($block->articles))
    <ul>
        @foreach ($block->articles as $article)
            <li>
                <h4>{{ $article->title }}</h4>
                <p>{{ $article->summary }}</p>
                @if (isset($article->media))
                    <img src="{{ asset(Shortcut::get_uploads_folder() . $media->ID . '/' . $article->media->fileName) }}" alt="{{ $article->media->alt }}" @if ($article->media->title) title="{{ $article->media->title }}" @endif style="display: article; max-width: 100%; height: auto" />
                @endif
                @if (isset($article->page))<a href="{{ route('front_page_index', [$article->page->uri]) }}">En savoir plus</a>@endif
            </li>
        @endforeach
    </ul>
@endif