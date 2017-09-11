<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 11.09.17
 * Time: 13:09
 */

namespace strategy;


class RedHeadDuck extends Duck
{

    public function display()
    {
        echo 'Red head duck!'. PHP_EOL;
    }
}