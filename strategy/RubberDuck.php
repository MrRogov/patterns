<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 11.09.17
 * Time: 13:11
 */

namespace strategy;


class RubberDuck extends Duck
{
    public function display()
    {
        echo 'Rubber duck' . PHP_EOL;
    }
}