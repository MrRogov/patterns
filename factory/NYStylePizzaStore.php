<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 24.10.17
 * Time: 22:17
 */

namespace factory;



use pizza\ny\NYStyleChessePizza;

class NYStylePizzaStore extends PizzaStore
{
    /**
     * @param $type
     * @return null|NYStyleChessePizza
     */
    public function createPizza($type)
    {
        $pizza = null;

        if($type == 'cheese')
            return new NYStyleChessePizza();

        return $pizza;
    }
}