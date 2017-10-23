<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 29.09.17
 * Time: 19:20
 */

namespace decorator\condiments;


use decorator\CondimentDecorator;
use decorator\Beverage;

class Whip extends CondimentDecorator
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
        return $this->beverage->getDescription() . " + Whip";
    }

    /**
     * @return float
     */
    public function cost()
    {
        return 0.12 + $this->beverage->cost();
    }
}