<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 24.10.17
 * Time: 0:59
 */

namespace factory\simple;


class PizzaStore
{
    /** @var  SimplePizzaFactory */
    public $factory;

    /**
     * PizzaStore constructor.
     * @param SimplePizzaFactory $factory
     */
    public function __construct(SimplePizzaFactory $factory)
    {
        $this->factory = $factory;
    }

    /**
     * @param string $type - type of pizza
     */
    public function orderPizza($type)
    {
        $pizza = $this->factory->create($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

    }
}