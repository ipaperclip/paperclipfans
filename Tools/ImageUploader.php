<?php
/**
 * Paperclip Fans
 * 图片批量上传
 * 
 * @author FlyingSky-CN
 */

define('API', 'https://p.sda1.dev/api/v1/upload_external_noform');
define('VEN', __DIR__.'/vendor');
define('IMG', __DIR__.'/img');

if (!file_exists(VEN.'/autoload.php')) exit("fatal: need php-curl-class.\n");
if (!is_dir(IMG)) exit("fatal: Image dir not found.\n");

$imgList = array_diff(scandir(IMG), ['.', '..']);
$uploadList = [];

if (in_array('imglist', $imgList)) $imgList = array_diff($imgList, ['imglist']);
if (in_array('imgDownloader', $imgList)) $imgList = array_diff($imgList, ['imgDownloader']);

$allCount = count($imgList);
$nowCount = 0;

require VEN.'/autoload.php';

use Curl\Curl;

$curl = new Curl();

foreach ($imgList as $value) {

    $curl->post(
        API.'?filename='.$value, 
        file_get_contents(IMG.'/'.$value)
    );
    
    if ($curl->error) {
        echo 'error: '.$curl->errorCode.': '.$curl->errorMessage."\n";
    } else {
        $nowCount++;
        echo "success: [$nowCount/$allCount]\n";
        $uploadList[] = [
            'name' => $value,
            'size' => $curl->response->data->size,
            'url' => $curl->response->data->url,
            'del' => $curl->response->data->delete_url
        ];
    }
}

file_put_contents('upload-'.time().'.json', json_encode($uploadList));

echo "Done.\n";