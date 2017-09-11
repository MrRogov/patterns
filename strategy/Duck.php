<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 11.09.17
 * Time: 13:02
 */

namespace strategy;


abstract class Duck
{

    /**
     *  swim ability
     */
    public function swim()
    {
        echo "I'm swimming" . PHP_EOL;
    }

    /**
     * @return mixed
     */
    abstract public function display();
}