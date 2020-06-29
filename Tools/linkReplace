<?php
/**
 * Paperclip Fans
 * 批量替换链接
 * 
 * @author FlyingSky-CN
 */

if (count($argv) !== 3) exit("fatal: Missing parameters.\n");

list($me, $md, $json) = $argv;

if (!file_exists($md)) exit("fatal: Cannot found markdown file.\n");
if (!file_exists($json)) exit("fatal: Cannot found json file.\n");

$links = json_decode(file_get_contents($json), true);
$replace = [[], []];

foreach ($links as $link) {
    $replace[0][] = $link['name'];
    $replace[1][] = '!['.$link['name'].']('.$link['url'].')';
}

file_put_contents(
    $md,
    str_replace(
        $replace[0],
        $replace[1],
        file_get_contents($md)
    )
);

echo "Done.\n";
