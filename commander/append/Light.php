<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 29.10.17
 * Time: 20:37
 */

namespace commander\append;


class Light
{
    public function on()
    {
        echo 'light on' . PHP_EOL;
    }

    public function off()
    {
        echo 'light off' . PHP_EOL;
    }
}