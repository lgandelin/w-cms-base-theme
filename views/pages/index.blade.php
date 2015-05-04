@include (Shortcut::get_theme() . '::includes.header')

<div class="container">
	@include (Shortcut::get_theme() . '::partials.page', ['page' => $page])
</div>

@include (Shortcut::get_theme() . '::includes.footer')