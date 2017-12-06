<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 06.12.17
 * Time: 19:00
 */

namespace templateMethod;

use helpers\PrintHelper;

/**
 * Class CaffeineBeverage
 * @package templateMethod
 */
abstract class CaffeineBeverage
{
    /**
     *  template method
     */
    public function prepareRecipe()
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        $this->addCondiments();
    }

    /**
     * @return mixed
     */
    abstract public function brew();

    /**
     * @return mixed
     */
    abstract public function addCondiments();

    /**
     *
     */
    public function boilWater()
    {
        PrintHelper::screen('boil water');
    }

    /**
     *
     */
    public function pourInCup()
    {
        PrintHelper::screen('Pouring into cup');
    }

}