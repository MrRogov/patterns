<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 24.10.17
 * Time: 0:46
 */

namespace pizza;


class CheesePizza implements Pizza
{
    public function prepare()
    {
        return self::class . 'prepare';
    }

    public function bake()
    {
        return 'bake';
    }

    public function cut()
    {
        return 'cut';
    }

    public function box()
    {
        return 'box';
    }
}