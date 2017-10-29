<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 29.10.17
 * Time: 20:42
 */

namespace commander\append;


class GarageDoor
{
    public function up()
    {
        echo 'door opened' . PHP_EOL;
    }

    public function down()
    {
        echo 'door closed' . PHP_EOL;
    }

    public function stop()
    {
        echo 'door stopped' . PHP_EOL;
    }

    public function lightOn()
    {
        echo 'door is lighting' . PHP_EOL;
    }

    public function lightOff()
    {
        echo 'door is unlighting' . PHP_EOL;
    }
}