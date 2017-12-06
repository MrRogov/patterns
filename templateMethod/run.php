<?php 
//simple autoloader 
require_once('../AutoLoader.php'); 
$autoloader = new AutoLoader(); 

//Enter code... 


$coffee = new \templateMethod\withHook\CoffeeWithHook();

$coffee->prepareRecipe();