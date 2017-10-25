<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 24.10.17
 * Time: 0:44
 */

namespace pizza;


use factory\PizzaIngredientFactory;

abstract class Pizza
{
    public $name;
    public $dough;
    public $sauce;
    public $veggies;
    public $cheese;
    public $pepperoni;
    public $clam;

    protected $ingredientFactory;

    abstract public function prepare();

    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function bake()
    {

    }

    public function cut()
    {

    }

    public function box()
    {

    }

}