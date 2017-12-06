<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 06.12.17
 * Time: 19:17
 */

namespace templateMethod\withHook;


use helpers\PrintHelper;

class CoffeeWithHook extends CaffeineBeverageWithHook
{
    public function brew()
    {
        PrintHelper::screen('Brew for coffee');
    }

    public function addCondiments()
    {
        PrintHelper::screen('Add condiments for coffee: milk, sugar');
    }

    /**
     *  override method
     *
     *  Place into method all logic to make decision for condiments
     *
     * @return bool
     */
    public function customerWantsCondiments()
    {
        return $this->interactiveQuestion();
    }

    /**
     * random logiс,no metter
     */
    public function interactiveQuestion()
    {
        PrintHelper::screen('Do you want to add condiments ? y/n');
        $answer = readline();

        if ($answer == 'y')
            return true;
        else
            return false;
    }
}