@if (isset($page->areas))
    @foreach ($page->areas as $area)
        @include ($theme . '::structure.area', ['area' => $area])
    @endforeach
@endif