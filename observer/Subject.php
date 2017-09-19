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
     * Регистрируем подписчика
     * @param Observer $o
     * @return mixed
     */
    public function registerObserver(Observer $o);

    /**
     * Удаляем подписчика
     * @param Observer $o
     * @return mixed
     */
    public function removeObserver(Observer $o);

    /**
     * Оповещаем всех подписчиков об изменении системы
     * @return mixed
     */
    public function notifyObservers();


}