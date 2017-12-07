<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 07.12.17
 * Time: 17:32
 */

namespace iterator;

/**
 * Class DinerMenuIterator
 * @package iterator
 */
class DinerMenuIterator implements Iterator
{
    /**
     * @var array
     */
    public $items;

    /**
     * @var integer
     */
    public $position = 0;

    /**
     * DinerMenuIterator constructor.
     * @param $items
     */
    public function __construct($items)
    {
        $this->items = $items;
    }


    public function next()
    {
        $menuItem = $this->items[$this->position];
        $this->position++;
        return $menuItem;
    }

    /**
     * @return bool
     */
    public function hasNext()
    {
        if ($this->position >= count($this->items) || $this->items[$this->position] === NULL) {
            return false;
        } else {
            return true;
        }
    }
}