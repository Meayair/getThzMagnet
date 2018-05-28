<?php
include './mainFunc.php';
$id = 1828393;
$html=curlGet("$site/thread-$id-1-1.html");
$pregTitle = '/<span\sid="thread_subject">(.*?)<\\/span>/is';
preg_match($pregTitle,$html,$matchTitle);
$title = $matchTitle[1];
//echo $title;
$pregVid = '/\\[(.*?)\\]/is';
preg_match($pregVid,$title,$matchVid);
$vid = $matchVid[1];
//echo $vid;
$pregTime = '/(\d+-\d+-\d+) (\d+:\d+:\d+)/is';
preg_match_all($pregTime,$html,$matchTime);
$time = $matchTime[1][0];
//echo $time;
$torrent = curlGet($site.pregTor($html));
newDir("content/torrent/$time");
newDir("content/info/$time");
$torrent = curlGet($site.pregTor($html));
$info = json_encode(array(
    "vid"=>$vid,
    "title"=>$title,
    "time"=>$time,
    ));
file_put_contents("content/torrent/$time/$vid.torrent",$torrent);
file_put_contents("content/info/$time/$vid.json",$info);
