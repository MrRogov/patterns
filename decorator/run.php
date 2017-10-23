<?php
//simple autoloader 
require_once('../AutoLoader.php');
$autoloader = new AutoLoader();

//Enter code... 


//Make an order
$beverage = new \decorator\beverages\Espresso();
echo "{$beverage->getDescription()}: {$beverage->cost()}" . PHP_EOL;

$beverage2 = new \decorator\beverages\Espresso();
$beverage2 = new \decorator\condiments\Mocha($beverage2);
$beverage2 = new \decorator\condiments\Whip($beverage2);
echo "{$beverage2->getDescription()}: {$beverage2->cost()}" . PHP_EOL;

$beverage3 = new \decorator\beverages\Espresso();
$beverage2 = new \decorator\condiments\Mocha($beverage2);
$beverage2 = new \decorator\condiments\Mocha($beverage2);
$beverage2 = new \decorator\condiments\Mocha($beverage2);
echo "{$beverage2->getDescription()}: {$beverage2->cost()}" . PHP_EOL;