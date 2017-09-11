<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 11.09.17
 * Time: 13:02
 */

namespace strategy;

use strategy\fly\FlyBehavior;
use strategy\fly\FlyWithWings;
use strategy\quack\Quack;
use strategy\quack\QuackBehavior;

abstract class Duck
{
    /**
     * @var FlyBehavior
     */
    public $flyBehavior;

    /**
     * @var QuackBehavior
     */
    public $quackBehavior;


    /**
     * Duck constructor.
     */
    public function __construct()
    {
        $this->flyBehavior = new FlyWithWings();
        $this->quackBehavior = new Quack();
    }

    /**
     *  swim ability
     */
    public function swim()
    {
        echo "I'm swimming" . PHP_EOL;
    }

    /**
     * do action fly
     */
    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    /**
     *  do action quack
     */
    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    /**
     * @return mixed
     */
    abstract public function display();
}