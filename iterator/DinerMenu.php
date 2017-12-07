<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 07.12.17
 * Time: 17:41
 */

namespace iterator;


class DinerMenu
{
    /** max size of menu */
    const MAX_ITEMS = 6;

    /**
     * @var int
     */
    public $number = 0;

    /**
     * @var array
     */
    public $menuItems = [];

    /**
     * DinerMenu constructor.
     */
    public function __construct()
    {
        $this->addItem('title_1', 100, true);
        $this->addItem('title_2', 200, false);
        $this->addItem('title_3', 300, true);
        $this->addItem('title_4', 400, false);
    }


    /**
     * @param $title
     * @param $price
     * @param $vegan
     * @return bool
     */
    public function addItem($title, $price, $vegan)
    {
        if (count($this->menuItems) < self::MAX_ITEMS) {
            $this->menuItems[] = [$title, $price, $vegan];
            return true;
        } else
            return false;
    }

    public function getName(){

    }

    public function getPrice(){

    }

    /**
     * @return DinerMenuIterator
     */
    public function createIterator()
    {
        return new DinerMenuIterator($this->menuItems);
    }
}