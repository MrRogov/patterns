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
    public function update($temp, $humidity, $pressure);
}