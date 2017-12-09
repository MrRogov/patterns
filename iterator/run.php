<?php
//simple autoloader 
require_once('../AutoLoader.php');
$autoloader = new AutoLoader();

//Enter code... 


$dinerMenu = new \iterator\DinerMenu();
$pancakeMenu = new \iterator\PancakeMenu();

$w = new \iterator\Waitress($dinerMenu, $pancakeMenu);
$w->printMenu();

