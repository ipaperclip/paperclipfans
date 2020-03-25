<?php
/**
 * Paperclip Fans
 * 自动构建 Mkdocs Nav
 * 
 * @author FlyingSky-CN
 */

define('Wiki_dir', __DIR__.'/Wiki', true);
define('SP_dir', __DIR__.'/SP', true);

$yml = file_get_contents('mkdocs.yml');

function addNav($name, $dir, $way) {
    global $yml;
    $files = array_diff(
        scandir($dir),
        ['.', '..']
    );
    $yml .= "\n  - $name: ";
    foreach ($files as $file) {
        if (is_dir($dir.'/'.$file)) {
            $yml .= "\n    - $file: $way/$file/readme.md";
        } else {
            $f = str_replace('.md', '', $file);
            $yml .= "\n    - $f: $way/$file";
        }
    }
    return true;
}

addNav('Vol', Wiki_dir, "Wiki");
addNav('Sp', SP_dir, "SP");

file_put_contents('mkdocs.yml', $yml);