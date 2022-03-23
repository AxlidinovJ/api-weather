<?php

$data = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=ferghana&appid=038680fce98fe2bf9c80aa5704cf5c1a");
$data = json_decode($data,true);

$long =  $data['coord']['lon'];
echo "<b>".$long."</b>";
echo "<br>";

$lat =  $data['coord']['lat'];
echo "<b>".$lat."</b>";
echo "<br>";

$lat =  $data['weather'][0]['main'];
echo "<b>".$lat."</b>";
echo "<br>";

$lat =  $data['name'];
echo "<b>".$lat."</b>";
echo "<br>";



echo "<br>";
echo "<pre>";
echo json_encode($data,JSON_PRETTY_PRINT);
echo "</pre>";

?>