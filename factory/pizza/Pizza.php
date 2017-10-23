<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 24.10.17
 * Time: 0:44
 */

namespace pizza;


interface Pizza
{
    public function prepare();

    public function bake();

    public function cut();

    public function box();

}