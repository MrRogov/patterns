<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 11.09.17
 * Time: 22:46
 */

namespace strategy\fly;


class NoFly implements FlyBehavior
{
    public function fly()
    {
        echo 'i cant fly' . PHP_EOL;
    }
}