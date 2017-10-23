<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 29.09.17
 * Time: 19:12
 */

namespace decorator\condiments;


use decorator\Beverage;
use decorator\CondimentDecorator;

class Mocha extends CondimentDecorator
{
    /**
     * @var Beverage
     */
    public $beverage;

    /**
     * Mocha constructor.
     * @param Beverage $beverage
     */
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->beverage->getDescription() . " + Mocha";
    }

    /**
     * @return float
     */
    public function cost()
    {
        return 0.20 + $this->beverage->cost();
    }
}