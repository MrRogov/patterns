<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 16.09.17
 * Time: 19:04
 */

namespace observer;


interface Subject
{
    /**
     * @param Observer $o
     * @return mixed
     */
    public function registerObserver(Observer $o);

    /**
     * @param Observer $o
     * @return mixed
     */
    public function removeObserver(Observer $o);

}