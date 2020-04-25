<?php

add_filter('the_content', function ($c) {
    return str_replace('This is an example page.', '<span style="color: red">This is an example page.</span>', $c);
});