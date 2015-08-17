@if (isset($content->view_path))
    @include($theme . '::blocks.custom.' . $content->view_path)
@endif