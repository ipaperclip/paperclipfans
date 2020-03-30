<?php

$dir = array_diff(scandir(__DIR__), ['.', '..']);
foreach ($dir as $file) {
    if (is_dir(DIR.'\\'.$file)) {
        file_put_contents(DIR.'\\'.$file.'.md', file_get_contents(DIR.'\\'.$file.'/readme.md'));
    }
}