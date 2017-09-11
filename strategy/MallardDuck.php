<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 11.09.17
 * Time: 13:07
 */

namespace strategy;


class MallardDuck extends Duck implements Flyable, Quackable
{

    public function display()
    {
        echo 'Mallard duck!' . PHP_EOL;
    }

    public function fly()
    {
        echo 'Fly!'. PHP_EOL;
    }

    public function quack()
    {
        echo 'mallar Quack!'. PHP_EOL;
    }
}