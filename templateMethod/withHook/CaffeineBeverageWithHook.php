<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 06.12.17
 * Time: 19:12
 */

namespace templateMethod\withHook;


use templateMethod\CaffeineBeverage;

abstract class CaffeineBeverageWithHook extends CaffeineBeverage
{
    /**
     *
     */
    final public function prepareRecipe()
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();

        if ($this->customerWantsCondiments()) {
            $this->addCondiments();
        }

    }

    /**
     *  hook
     * @return bool
     */
    public function customerWantsCondiments()
    {
        return true;
    }
}