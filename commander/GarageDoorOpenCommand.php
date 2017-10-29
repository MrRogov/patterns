<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 29.10.17
 * Time: 20:56
 */

namespace commander;


use commander\append\GarageDoor;

class GarageDoorOpenCommand implements Command
{
    /** @var GarageDoor */
    public $door;

    public function __construct(GarageDoor $door)
    {
        $this->door = $door;
    }

    public function execute()
    {
        $this->door->up();
    }

}