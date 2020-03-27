<?php
/**
 * Paperclip Fans
 * 自动构建 Mkdocs Nav
 * 
 * @author FlyingSky-CN
 */

$yml = file_get_contents('mkdocs.yml');

function addNav($name, $way) {
    global $yml;
    $files = array_diff(
        scandir(__DIR__.'/'.$way),
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

addNav('Vol', "Vol");
addNav('Sp', "Sp");

file_put_contents('mkdocs.yml', $yml);