<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 29.10.17
 * Time: 20:07
 */
namespace commander;

interface Command
{
    public function execute();
}