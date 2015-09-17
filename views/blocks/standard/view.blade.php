@if (isset($block->viewPath))
    @include($theme . '::blocks.custom.' . $block->viewPath)
@endif