<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 09.12.17
 * Time: 13:23
 */

namespace iterator;


interface Menu
{
    /**
     * @return mixed
     */
    public function getName();

    /**
     * @return mixed
     */
    public function getPrice();

    /**
     * @return mixed
     */
    public function createIterator();
}