<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 19.09.17
 * Time: 22:49
 */

namespace observer;


interface DisplayElement
{
    /**
     * Отображение визуального элемента
     * @return mixed
     */
    public function display();
}