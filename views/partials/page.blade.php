@if (isset($page->areas))
    @foreach ($page->areas as $area)
        @include ('w-cms-base-theme::partials.area', ['area' => $area])
    @endforeach
@endif