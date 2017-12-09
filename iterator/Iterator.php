<?php
/**
 * Created by PhpStorm.
 * User: rogov
 * Date: 07.12.17
 * Time: 17:29
 */

namespace iterator;

/**
 * My test iterator.
 * Use system Iterator
 * @see \Iterator
 *
 * Interface Iterator
 * @package iterator
 */
interface Iterator
{
    /**
     * @return boolean
     */
    public function hasNext();

    /**
     * @return object
     */
    public function next();
}