<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 11.09.17
 * Time: 13:11
 */

namespace strategy;


use strategy\fly\NoFly;
use strategy\quack\Squeak;

class RubberDuck extends Duck
{
    /**
     * RubberDuck constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->quackBehavior = new Squeak();
        $this->flyBehavior = new NoFly();
    }

    public function display()
    {
        echo 'Rubber duck' . PHP_EOL;
    }
}