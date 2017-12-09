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
class DinerMenuIterator implements \Iterator
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

    /**
     *
     */
    public function next()
    {
        $this->position += 1;
    }

    /**
     * @return mixed
     */
    public function current()
    {
        return $this->items[$this->position];
    }

    /**
     *
     */
    public function rewind()
    {
        $this->position = 0;
    }

    /**
     * @return mixed
     */
    public function key()
    {
        $keys = array_keys($this->items);
        return $keys[$this->position];
    }

    /**
     * @return bool
     */
    public function valid()
    {
        if (isset($this->items[$this->position]))
            return true;
        else
            return false;
    }

}