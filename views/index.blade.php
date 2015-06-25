@include ($theme . '::includes.header')

<div class="grid-container">
    @include ($theme . '::structure.page', ['page' => $page])
</div>

@include ($theme . '::includes.footer')