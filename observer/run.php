<?php 
//simple autoloader 
require_once('../AutoLoader.php'); 
$autoloader = new AutoLoader(); 

//Enter code...

$station = new \observer\WeatherData();

$display1 = new \observer\CurrentConditionsDisplay($station);

$station->setMeasurements(24,20,155);
$station->setMeasurements(23,23,160);
$station->setMeasurements(24,22,161);
$station->setMeasurements(25,20,163);

