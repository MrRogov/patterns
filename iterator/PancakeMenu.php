<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 09.12.17
 * Time: 13:21
 */

namespace iterator;


class PancakeMenu implements Menu
{
    /**
     * @var \ArrayObject
     */
    public $items;

    public function __construct()
    {

        $random_menu = [
            ['pancake_1', 100, false],
            ['pancake_2', 200, false],
            ['pancake_3', 300, false],
        ];

        $this->items = new \ArrayObject($random_menu);

    }

    /**
     * @param array $value
     */
    public function addItem($value)
    {
        $this->items->append($value);
    }


    public function getName()
    {
        // TODO: Implement getName() method.
    }

    public function getPrice()
    {
        // TODO: Implement getPrice() method.
    }

    public function createIterator(){
        return $this->items->getIterator();
    }
}