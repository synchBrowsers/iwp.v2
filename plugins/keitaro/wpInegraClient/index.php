<?php
header('Access-Control-Allow-Origin: *');
$landUrl = 'https://quotes-me.com/';

$pathArr = explode('@', $client->getBody());

if(count($pathArr) > 1) {
    $offerUrl = $client->getOffer();
    $path = explode(' ', $pathArr[1])[0];
    $pixels = $pathArr[2];
    $arbName = $pathArr[3];
    $land = '@'.$pathArr[4];

    echo '<base href="'.$landUrl.'__Offers/'.$path.'/'.$land.'/lp.php'.'">';
    $myvar = file_get_contents($landUrl . '__Offers/'.$path.'/'.$land.'/lp.php');
    $myvar = str_replace("href=\"\"", "href=\"$offerUrl\"", $myvar);
    echo $myvar;


    echo "<script id=\"uccess-hash-{$client->getSubId()}\">";
    require_once YOUR_PLUGIN_DIR . 'keitaro/wpInegraClient/successful.js';
    echo "</script>";


    echo "<script id=\"inject\">";
    require_once YOUR_PLUGIN_DIR . 'keitaro/wpInegraClient/inject.js';
    echo "</script>";
    die();

}



?>