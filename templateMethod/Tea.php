<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 06.12.17
 * Time: 19:07
 */

namespace templateMethod;

use helpers\PrintHelper;

/**
 * Class Tea
 * @package templateMethod
 */
class Tea extends CaffeineBeverage
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