@if (isset($content->viewPath))
    @include(Shortcut::get_theme() . '::partials.blocks.' . $content->viewPath)
@endif