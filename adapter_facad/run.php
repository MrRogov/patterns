<?php
//simple autoloader 
require_once('../AutoLoader.php');
$autoloader = new AutoLoader();

//Enter code...

$turkey = new \adapter_facad\Turkey();
$adapter = new \adapter_facad\TurkeyToDuckAdapter($turkey);

$adapter->quack();
$adapter->fly();
