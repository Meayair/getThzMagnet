<?php
include './BEncode.php';
include './BDecode.php';
include './mainFunc.php';
$id = empty($_GET['id'])?'1447816':$_GET['id'];
$torrent = curlGet($site.pregTor(curlGet("$site/thread-$id-1-1.html")));
$desc = BDecode($torrent);
$info = $desc['info'];
$hash = strtoupper(sha1( BEncode($info) ));
echo sprintf('magnet:?xt=urn:btih:%s&dn=%s', $hash, $info['name']);
?>
