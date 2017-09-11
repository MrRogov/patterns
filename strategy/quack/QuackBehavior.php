<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 11.09.17
 * Time: 22:43
 */

namespace strategy\quack;

/**
 * Interface QuackBehavior
 * @package strategy
 */
interface QuackBehavior
{
    /**
     * @return void
     */
    public function quack();
}