<?php
header('Access-Control-Allow-Origin: *');
$landUrl = 'https://quotes-me.com/';


function debug($obj) 
{
    echo '<pre>';
    print_r($obj);
    echo '</pre>';

}

// debug(json_decode($_REQUEST['params']));

$params = json_decode($_REQUEST['params']);

$successful = $landUrl.'__Offers/'.$params->path.'/successful.php?';

// $_REQUEST['name'] = $params->name;
// $_REQUEST['phone'] = $params->phone;

// foreach ($params as $key => $value) {
//     $_REQUEST[$key] = $value;
// }

// debug($params);

// echo http_build_query($params) . "\n";
// echo urldecode(http_build_query($params));


// echo $successful.urldecode(http_build_query($params));

// https://quotes-me.com/__Offers/Arthrazex/SG/successful.php?&pixels=xxxxxxxxx&arb=_test&clickid=226sdds1fpf&name=gnida&phone=91916565655

echo file_get_contents($successful.urldecode(http_build_query($params)));