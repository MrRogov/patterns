<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 29.09.17
 * Time: 18:04
 */

namespace decorator;


abstract class Beverage
{
    protected $description = "Unknown Beverage";

    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public abstract function cost();
}