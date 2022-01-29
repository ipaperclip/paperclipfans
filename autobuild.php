<?php

/**
 * Paperclip Fans
 * 自动构建 Mkdocs 预处理
 * 
 * @author FlyingSky-CN
 * @author Just-Prog
 */

/**
 * Include Single File
 * 
 * @param string $file The file to be including.
 * @param string $name The filename of new file.
 * @return void
 */
function includeFile($file, $name)
{
    if (!file_exists($file)) return false;
    $content = file_get_contents($file);
    return file_put_contents('docs/' . $name . '.md', $content);
}

/**
 * Include Directory
 * 
 * @param string $dir The directory to be including.
 * @return void
 */
function addClass($name)
{
    global $yml;
    $files = array_diff(
        scandir(__DIR__ . '/' . $name),
        ['.', '..']
    );

    $ucname = ucwords($name);
    $yml .= "\n  - $ucname: ";

    foreach ($files as $file) {
        $filename = $ucname . '.' . explode('.', explode(' ', $file)[0])[1];
        includeFile("$name/$file", "$filename");
        $f = str_replace('.md', '', ucwords($file));
        $yml .= "\n    - $f: $filename.md";
    }
    return true;
}

/**
 * Render the Contribution Guide
 * 
 * @return void
 */
function listContributor()
{
    if (!file_exists('docs/contributor.json') or !file_exists('docs/contribution.md')) return false;
    $contributors = json_decode(file_get_contents('docs/contributor.json'), true);
    $out = '';
    $out .= '<div><div class="mdui-row-xs-1 mdui-row-sm-2" style="display: table">';
    foreach ($contributors as $contributor) {
        $contributor['link'] = [];
        if ($contributor['commit']) $contributor['link'][] = '📦 <a href="https://github.com/ipaperclip/paperclipfans/commits?author=' . $contributor['github'] . '">Commits</a>';
        if ($contributor['email']) $contributor['link'][] = '📧 <a href="mailto:' . $contributor['email'] . '">Email</a>';
        $out .= '<div class="mdui-col mdui-p-a-1"><div class="mdui-card"><div class="mdui-card-header"><img class="mdui-card-header-avatar" src="' . $contributor['avatar'] . '"/><div class="mdui-card-header-title"><a href="https://github.com/' . $contributor['github'] . '">' . $contributor['github'] . '</a></div><div class="mdui-card-header-subtitle">Contributor</div></div><div class="mdui-card-content">' . implode(' / ', $contributor['object']) . '<br/>' . implode(' / ', $contributor['link']) . '</div></div></div>';
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
