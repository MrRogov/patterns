<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 11.09.17
 * Time: 13:12
 */

//simple autoloader
require_once('../AutoLoader.php');
$autoloader = new AutoLoader();

$ducks = [
    new \strategy\MallardDuck(),
    new \strategy\RedHeadDuck(),
    new \strategy\RubberDuck(),
];

/** @var \strategy\Duck $duck */
foreach ($ducks as $duck) {
    $duck->display();
    $duck->quack();
    $duck->swim();
    $duck->fly();

    echo PHP_EOL;
}