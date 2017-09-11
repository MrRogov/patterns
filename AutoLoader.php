<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 11.09.17
 * Time: 13:31
 */

class AutoLoader
{
    /** @var  string */
    private static $_lastLoadedFilename;

    /**
     * register loader in system
     * AutoLoader constructor.
     */
    public function __construct()
    {
        spl_autoload_register([$this, 'load']);
    }

    /**
     * load class.php
     * @param $className
     */
    private function load($className)
    {

        self::$_lastLoadedFilename = str_replace('\\', '/', $className) . '.php';
        require_once(self::$_lastLoadedFilename);
    }
}