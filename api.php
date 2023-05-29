<?php
$headers = [
    "Content-type: application/json; charset=UTF-8",
"Accept-language : en" ];


$ch = curl_init () ;

$plate = $_POST['plate'];
$state = $_POST['state'];
$url = 'https://licenseplatedata.com/consumer-api/ISRAEL-LPDOW1QWX/';
$url .= $state.'/'.$plate;

curl_setopt_array ($ch, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
CURLOPT_CUSTOMREQUEST=> "GET",
CURLOPT_HTTPHEADER => $headers
]);


$data = curl_exec($ch);
curl_close($ch);

$yummy = json_decode($data,true);

echo($yummy["licensePlateLookup"]["vin"]); //donut

// json_encode($result);


