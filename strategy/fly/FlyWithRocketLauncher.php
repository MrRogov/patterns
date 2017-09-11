<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 11.09.17
 * Time: 22:45
 */

namespace strategy\fly;


class FlyWithRocketLauncher implements FlyBehavior
{
    public function fly()
    {
        echo 'Fly with rocket launcher' . PHP_EOL;
    }
}