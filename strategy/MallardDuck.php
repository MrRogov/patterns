<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 11.09.17
 * Time: 13:07
 */

namespace strategy;


class MallardDuck extends Duck
{

    public function display()
    {
        echo 'Mallard duck!' . PHP_EOL;
    }
}