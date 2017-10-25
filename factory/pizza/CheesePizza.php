<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 24.10.17
 * Time: 0:46
 */

namespace pizza;


class CheesePizza extends Pizza
{

    public function prepare()
    {
       echo 'preparing';
       $factory = $this->ingredientFactory;

       $this->dough = $factory->createDough();
       $this->cheese = $factory->createCheese();
    }

    public function bake()
    {
        return 'bake';
    }

    public function cut()
    {
        return 'cut';
    }

    public function box()
    {
        return 'box';
    }
}