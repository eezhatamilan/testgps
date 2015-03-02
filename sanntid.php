<?php

//$address = "Vestre_Ringvei_2";
$getLat = $_REQUEST["latlng"];

$url = 'http://maps.google.com/maps/api/geocode/json?latlng='.$getLat.'&sensor=true';
//$url = 'http://maps.google.com/maps/api/geocode/json?latlng=59.9438007,10.9545642&sensor=true';

$response = file_get_contents($url);
$response = json_decode($response, true);
 
//print_r($response);
 
$lat = $response['results'][0]['geometry']['location']['lat'];
$long = $response['results'][0]['geometry']['location']['lng'];
$geodata =  $response['results'][0]['formatted_address'];

echo "latitude: " . $lat . " longitude: " . $long . " Adresse: " . $geodata;

?>