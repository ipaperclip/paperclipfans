<?php
/**
 * Paperclip Fans
 * 图片批量下载
 * 
 * @author FlyingSky-CN
 */

foreach (explode("\r\n", file_get_contents('imglist')) as $file) {
    list($a, $b) = explode(' ', $file);
    var_dump(file_put_contents($b, file_get_contents($a)))."\n";
    sleep(1);
}

//(.*)/mmbiz_(.*)/(.*)/640?(.*) $1/mmbiz_$2/$3/640?$4 $3 $2