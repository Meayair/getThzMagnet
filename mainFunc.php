<?php
function curlGet($url) 
{
    $header[]= 'user-agent:Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36';  
    $curl = curl_init(); 
    curl_setopt($curl, CURLOPT_URL, $url); 
    curl_setopt($curl, CURLOPT_REFERER, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER,$header); 
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
    return curl_exec($curl); 
    curl_close($curl); 
}
function pregTor($content)
{
    $preg = '/href="imc_attachad-ad.html\\?aid=(\w+)"/is';
    preg_match($preg,$content,$match);
    return $tor='/forum.php?mod=attachment&aid='.$match[1];
}
?>
