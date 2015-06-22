@if (isset($page->areas))
    @foreach ($page->areas as $area)
        @include (Shortcut::get_theme() . '::structure.area', ['area' => $area])
    @endforeach
@endif