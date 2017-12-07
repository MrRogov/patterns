<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 07.12.17
 * Time: 18:10
 */

namespace iterator;


use helpers\PrintHelper;

class Waitress
{
    /**
     * @var DinerMenu
     */
    public $dinerMenu;

    /**
     * @var
     */
    public $pancakeMenu;

    /**
     * Waitress constructor.
     * @param $dinerMenu
     * @param $pancakeMenu
     */
    public function __construct($dinerMenu, $pancakeMenu)
    {
        $this->dinerMenu = $dinerMenu;
    }

    public function printMenu()
    {
        $dinerIterator = $this->dinerMenu->createIterator();

        $this->_printMenu($dinerIterator);
    }


    /**
     * @param Iterator $iterator
     */
    private function _printMenu(Iterator $iterator)
    {
        while ($iterator->hasNext()) {
            $menuItem = $iterator->next();
            print_r($menuItem);
        }
    }
}