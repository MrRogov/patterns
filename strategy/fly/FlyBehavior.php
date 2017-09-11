<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 11.09.17
 * Time: 22:41
 */

namespace strategy\fly;

/***
 * Interface FlyBehavior
 * @package strategy
 */
interface FlyBehavior
{
    /**
     * @return void
     */
    public function fly();
}