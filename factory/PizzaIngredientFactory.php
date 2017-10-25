<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 25.10.17
 * Time: 13:49
 */

namespace factory;


interface PizzaIngredientFactory
{
    public function createDough();

    public function createSauce();

    public function createCheese();

    public function createVeggies();

    public function createPepperoni();

    public function createClam();

}