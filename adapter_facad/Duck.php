<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 13.11.17
 * Time: 17:11
 */

namespace adapter_facad;


interface Duck
{
    /**
     * утка крякает
     * @return mixed
     */
    public function quack();

    /**
     * утка летает
     * @return mixed
     */
    public function fly();
}