<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 24.10.17
 * Time: 22:17
 */

namespace factory;


use pizza\ny\NYPizzaIngredientFactory;
use pizza\ny\NYStyleCheesePizza;
use pizza\Pizza;

class NYStylePizzaStore extends PizzaStore
{
    /**
     * @param $type
     * @return null|Pizza
     */
    public function createPizza($type)
    {
        $pizza = null;

        if ($type == 'cheese')
            return new NYStyleCheesePizza(new NYPizzaIngredientFactory());
//        if($type == 'meat')
//            return new ...
//        if($type == 'pepperoni')
//            return new ...
//        if($type == 'veggie')
//            return new ...

        return $pizza;
    }
}