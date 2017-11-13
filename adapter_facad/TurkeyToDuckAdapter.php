<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 13.11.17
 * Time: 17:16
 */

namespace adapter_facad;


class TurkeyToDuckAdapter implements Duck
{
    /** @var  Turkey */
    private $turkey;

    public function __construct(Turkey $turkey)
    {
        $this->turkey = $turkey;
    }

    public function fly()
    {
        for ($i = 0; $i < 2; $i++) {
            $this->turkey->shortFly();
        }
    }

    public function quack()
    {
        $this->turkey->gobble();
    }
}