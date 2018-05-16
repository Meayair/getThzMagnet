<?php
include './mainFunc.php';
include './displayMagnet.php';
$page=empty($_GET['page'])?'1':$_GET['page'];
$html = curlGet("$site//forum.php?mod=forumdisplay&fid=220&orderby=dateline&filter=author&orderby=dateline&page=$page");
$i=0;
foreach ($html->find('tbody[id=separatorline] a[class=showcontent y]') as $a_id){
$ID_list[$i] = $a_id->id;
$i++;
}



