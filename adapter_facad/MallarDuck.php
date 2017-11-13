<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 13.11.17
 * Time: 17:12
 */

namespace adapter_facad;


class MallarDuck implements Duck
{
    public function fly()
    {
        echo 'Fly!';
    }

    public function quack()
    {
        echo 'Quack! Quack!';
    }
}