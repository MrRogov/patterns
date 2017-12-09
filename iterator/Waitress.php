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
     * @var PancakeMenu
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
        $this->pancakeMenu = $pancakeMenu;
    }

    public function printMenu()
    {
        $dinerIterator = $this->dinerMenu->createIterator();
        $pancakeIterator = $this->pancakeMenu->createIterator();

        $this->_printMenu($dinerIterator);
        $this->_printMenu($pancakeIterator);
    }


    /**
     * @param \Iterator $iterator
     */
    private function _printMenu(\Iterator $iterator)
    {
        while ($iterator->valid()) {
            print_r($iterator->current());
            $iterator->next();
        }
    }
}