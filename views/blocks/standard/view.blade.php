@if (isset($content->viewPath))
    @include($theme . '::partials.blocks.' . $content->viewPath)
@endif