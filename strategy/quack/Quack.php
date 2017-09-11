<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 11.09.17
 * Time: 22:47
 */

namespace strategy\quack;


class Quack implements QuackBehavior
{
    public function quack()
    {
        echo 'Quack! Quack!' . PHP_EOL;
    }
}