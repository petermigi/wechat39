<?php 
$keyword = "歌曲朋友@周华健";
$content = $keyword;
$content = mb_substr($content,2,mb_strlen($content,'utf-8')-2,'utf-8');
$arr = explode('@',$content);

if(isset($arr[1]))
{
    $curl = 'http://box.zhangmen.baidu.com/x?op=12&count=1&title='.$arr[0].'$$'.$arr[1].'$$$$';
}
else 
{
    $curl = 'http://box.zhangmen.baidu.com/x?op=12&count=1&title='.$arr[0].'$$';
}

echo $curl;