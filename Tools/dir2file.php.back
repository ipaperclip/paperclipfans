<?php

define('DIR', __DIR__);
$dir = array_diff(scandir(DIR), ['.', '..']);
foreach ($dir as $file) {
    if (is_dir(DIR.'\\'.$file)) {
        file_put_contents(DIR.'\\'.$file.'.md', file_get_contents(DIR.'\\'.$file.'/readme.md'));
    }
}