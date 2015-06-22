@include (Shortcut::get_theme() . '::includes.header')

<div class="grid-container">
    @include (Shortcut::get_theme() . '::structure.page', ['page' => $page])
</div>

@include (Shortcut::get_theme() . '::includes.footer')