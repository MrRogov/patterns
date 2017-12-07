<?php
//simple autoloader 
require_once('../AutoLoader.php');
$autoloader = new AutoLoader();

//Enter code... 


$dinerMenu = new \iterator\DinerMenu();


$w = new \iterator\Waitress($dinerMenu, null);
$w->printMenu();

