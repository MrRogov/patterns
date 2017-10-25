<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 24.10.17
 * Time: 14:46
 */

namespace factory;


use pizza\Pizza;

abstract class PizzaStore
{

    /**
     * @param $type
     * @return Pizza
     */
    public function orderPizza($type)
    {

        /** @var Pizza $pizza */
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;

    }

    /**
     * @param $type
     * @return Pizza
     */
    abstract protected function createPizza($type);

}