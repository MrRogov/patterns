<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 11.09.17
 * Time: 22:48
 */

namespace strategy\quack;


class Squeak implements QuackBehavior
{
    public function quack()
    {
        echo 'Squeak! Squeak!' . PHP_EOL;
    }
}