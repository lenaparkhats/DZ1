<?php
$bmw = array(
    "model" => "X5",
    "speed" => 120,
    "doors" => 5,
    "year" => "2015"
);
$toyota = array(
    "model" => "5",
    "speed" => 140,
    "doors" => 4,
    "year" => "2017"
);
$opel = array(
    "model" => "omega",
    "speed" => 150,
    "doors" => 5,
    "year" => "2016"
);

$array = array(
    "bmw" => $bmw,
    "toyota" => $toyota,
    "opel" => $opel
);

echo 'CAR BMW <br>' . $array[bmw][model] . ' ' . $array[bmw][speed] . ' ' . $array[bmw][doors] . ' ' . $array[bmw][year];
echo '<br>CAR TOYOTA <br>' . $array[toyota][model] . ' ' . $array[toyota][speed] . ' ' . $array[toyota][doors] . ' ' . $array[toyota][year];
echo '<br>CAR OPEL <br>' . $array[opel][model] . ' ' . $array[opel][speed] . ' ' . $array[opel][doors] . ' ' . $array[opel][year];
