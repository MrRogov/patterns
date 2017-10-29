<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 29.10.17
 * Time: 20:15
 */

namespace commander;


use commander\append\GarageDoor;
use commander\append\Light;

class RemoteControlTest
{
    public static function go()
    {
        $remote = new SimpleRemoteControl();
        $lightOn = new LightOnCommand(new Light());
        $doorOpen = new GarageDoorOpenCommand(new GarageDoor());

        $remote->setCommand($lightOn);
        $remote->buttonWasPressed();

        $remote->setCommand($doorOpen);
        $remote->buttonWasPressed();

    }
}