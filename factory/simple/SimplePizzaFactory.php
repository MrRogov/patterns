<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 24.10.17
 * Time: 0:43
 */

namespace factory\simple;


use pizza\CheesePizza;
use pizza\Pizza;

class SimplePizzaFactory
{
    const TYPE_CHEESE = 'cheese';


    /**
     * @param $type
     * @return null|Pizza
     */
    public function create($type)
    {
        $pizza = null;

        if ($type == self::TYPE_CHEESE)
            $pizza = new CheesePizza();

        return $pizza;
    }
}