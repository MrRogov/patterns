<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 06.12.17
 * Time: 18:47
 */

namespace templateMethod;


use helpers\PrintHelper;

/**
 * Class for prepare coffee
 *
 * Class Coffee
 * @package templateMethod
 */
class Coffee extends CaffeineBeverage
{
    /**
     *
     */
    public function brew()
    {
        PrintHelper::screen('Brew for coffee');
    }

    /**
     *
     */
    public function addCondiments()
    {
        PrintHelper::screen('Add condiments for coffee: milk, sugar');
    }

}