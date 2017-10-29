<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 29.10.17
 * Time: 20:08
 */

namespace commander;


use commander\append\Light;

class LightOnCommand implements Command
{
    /**
     * @var Light
     */
    public $light;

    /**
     * LightOnCommand constructor.
     * @param Light $light
     */
    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    /**
     *  turn on light
     */
    public function execute()
    {
        $this->light->on();
    }
}