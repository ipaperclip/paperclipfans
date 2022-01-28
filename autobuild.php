<?php
/**
 * Paperclip Fans
 * 自动构建 Mkdocs 预处理
 * 
 * @author FlyingSky-CN
 * Modified By Just-Prog
 */

function includeFile($file, $name) {
    if (!file_exists($file)) return false;
    $content = file_get_contents($file);
    return file_put_contents('docs/'.$name.'.md', $content);
}

function addClass($name) {
    global $yml;
    $files = array_diff(
        scandir(__DIR__.'/'.$name),
        ['.', '..']
    );
    $yml .= "\n  - $name: ";
    foreach ($files as $file) {
        $filename = $name.'.'.explode('.', explode(' ', $file)[0])[1];
        includeFile("$name/$file", "$filename");
        $f = str_replace('.md', '', $file);
        $yml .= "\n    - $f: $filename.md";
    }
    return true;
}

function listContributor() {
    if (!file_exists('docs/contributor.json') or !file_exists('docs/contribution.md')) return false;
    $contributors = json_decode(file_get_contents('docs/contributor.json'), true);
    $out = '<style>[class*="mdui-row-"] {margin-left: -8px;margin-right: -8px} [class*="mdui-row-"]:after {isplay: table;clear: both;content: \'\'}.mdui-row-xs-1 .mdui-col {float: left;width: 100%}@media (min-width: 600px) {.mdui-row-sm-2 .mdui-col {float: left;width: 50%}}.mdui-card {position: relative;-webkit-box-sizing: border-box;box-sizing: border-box;overflow: hidden;color: #000;background-color: #fff;border-radius: 2px;-webkit-box-shadow: 0 3px 1px -2px rgba(0,0,0,.2), 0 2px 2px 0 rgba(0,0,0,.14), 0 1px 5px 0 rgba(0,0,0,.12);box-shadow: 0 3px 1px -2px rgba(0,0,0,.2), 0 2px 2px 0 rgba(0,0,0,.14), 0 1px 5px 0 rgba(0,0,0,.12)}.mdui-card-header {position: relative;height: 72px;-webkit-box-sizing: border-box;box-sizing: border-box;padding: 16px;}.mdui-card-header-avatar {float: left;width: 40px;height: 40px;border-radius: 50%}.mdui-card-header-title, .mdui-card-header-subtitle {display: block;margin-left: 52px;overflow: hidden;line-height: 20px;text-overflow: ellipsis;white-space: nowrap;}.mdui-card-header-title {font-size: 16px;font-weight: 500;opacity: .87}.mdui-card-header-subtitle {font-size: 14px;font-weight: 400;opacity: .54}.mdui-card-content {position: relative;padding: 4px 16px 16px;font-size: 14px;line-height: 24px} .mdui-p-a-1 {padding: 8px!important}</style>';
    $out .= '<div><div class="mdui-row-xs-1 mdui-row-sm-2" style="display: table">';
    foreach ($contributors as $contributor) {
        $contributor['link'] = [];
        if ($contributor['commit']) $contributor['link'][] = '📦 <a href="https://github.com/ipaperclip/paperclipfans/commits?author='.$contributor['github'].'">Commits</a>';
        if ($contributor['email']) $contributor['link'][] = '📧 <a href="mailto:'.$contributor['email'].'">Email</a>';
        $out .= '<div class="mdui-col mdui-p-a-1"><div class="mdui-card"><div class="mdui-card-header"><img class="mdui-card-header-avatar" src="'.$contributor['avatar'].'"/><div class="mdui-card-header-title"><a href="https://github.com/'.$contributor['github'].'">'.$contributor['github'].'</a></div><div class="mdui-card-header-subtitle">Contributor</div></div><div class="mdui-card-content">'.implode(' / ', $contributor['object']).'<br/>'.implode(' / ', $contributor['link']).'</div></div></div>';
    }
    $out .= '</div></div>';
    return file_put_contents('docs/contribution.md', $out, FILE_APPEND);
}

$yml = file_get_contents('mkdocs.yml');

addClass('Vol');
addClass('Sp');
addClass('Ad');
addClass('x');
addClass('Df');

file_put_contents('mkdocs.yml', $yml);

listContributor();
