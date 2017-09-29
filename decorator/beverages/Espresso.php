<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 29.09.17
 * Time: 19:08
 */

namespace decorator\beverages;


use decorator\Beverage;

class Espresso extends Beverage
{

    /**
     * Espresso constructor.
     */
    public function __construct()
    {
        $this->description = "Espresso";
    }

    /**
     * @return float
     */
    public function cost()
    {
        return 1.99;
    }
}