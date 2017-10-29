<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 29.10.17
 * Time: 20:12
 */

namespace commander;


class SimpleRemoteControl
{
    /** @var  Command */
    public $slot;

    /**
     * @param Command $command
     */
    public function setCommand($command){
        $this->slot = $command;
    }

    public function buttonWasPressed(){
        $this->slot->execute();
    }
}