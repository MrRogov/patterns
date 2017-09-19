<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 16.09.17
 * Time: 19:06
 */

namespace observer;


interface Observer
{
    /**
     * Данные передаваемые при изменении состояния объекта
     * обновляются
     * @param $temp
     * @param $humidity
     * @param $pressure
     * @return mixed
     */
    public function update($temp, $humidity, $pressure);
}