@include ('w-cms-base-theme::includes.header')

<div class="container">
    @include ('w-cms-base-theme::partials.page', ['page' => $page])
</div>

{!! HTML::script('w-cms-base-theme/js/scripts.js') !!}

@include ('w-cms-base-theme::includes.footer')