<?php
/**
 * Paperclip Fans
 * 图片下载校验
 * 
 * @author FlyingSky-CN
 */

$need = [];
foreach (explode("\r\n", file_get_contents('imglist')) as $file) {
    list($a, $b) = explode(' ', $file);
    $need[] = $b;
}

$now = array_diff(
    scandir(__DIR__),
    ['.', '..', 'imglist', 'imgDownloader.php', 'checkList.php']
);

var_dump(array_diff($need, $now));