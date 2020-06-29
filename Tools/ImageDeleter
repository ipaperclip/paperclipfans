<?php
/**
 * Paperclip Fans
 * 图片批量删除
 * 
 * @author FlyingSky-CN
 */

if (count($argv) !== 2) exit("fatal: Missing parameters.\n");

list($me, $json) = $argv;

if (!file_exists($json)) exit("fatal: Cannot found json file.\n");

$links = json_decode(file_get_contents($json), true);

foreach ($links as $link) echo file_get_contents($link['del'])."\n";