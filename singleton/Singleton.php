<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 26.10.17
 * Time: 14:11
 */

namespace singleton;


class Singleton
{
    /**
     * храним instance
     * @var null
     */
    private static $instance = null;


    /**
     * Приватный конструктор, доступ только из класса
     * Singleton constructor.
     */
    private function __construct()
    {
    }

    /**
     * Статический метод для создания
     * @return null|Singleton
     */
    public static function getInstance()
    {
        if (!isset(self::$instance))
            self::$instance = new self();

        return self::$instance;
    }
}