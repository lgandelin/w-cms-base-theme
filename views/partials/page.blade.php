@if (isset($page->areas))
    @foreach ($page->areas as $area)
        @include (Shortcut::get_theme() . '::partials.area', ['area' => $area])
    @endforeach
@endif