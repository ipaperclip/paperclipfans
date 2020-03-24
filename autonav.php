<?php

define('Wiki_dir', __DIR__.'/Wiki', true);
define('SP_dir', __DIR__.'/SP', true);

$yml = file_get_contents('mkdocs.yml');

function addNav($name, $dir) {
    global $yml;
    $files = array_diff(
        scandir($dir),
        ['.', '..']
    );
    $yml .= "\n  - $name: ";
    foreach ($files as $name) {
        if (is_dir($dir.'/'.$name)) {
            $yml .= "\n    - $name: $name/readme.md";
        } else {
            $file = str_replace('.md', '', $name);
            $yml .= "\n    - $file: $name";
        }
    }
    return true;
}

addNav('Vol.', Wiki_dir);
addNav('Sp.', SP_dir);

file_put_contents('mkdocs.yml', $yml);