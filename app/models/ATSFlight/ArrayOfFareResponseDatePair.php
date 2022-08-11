<?php

namespace App\models\ATSFlight;

class ArrayOfFareResponseDatePair implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var FareResponseDatePair[] $FareResponseDatePair
     */
    protected $FareResponseDatePair = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FareResponseDatePair[]
     */
    public function getFareResponseDatePair()
    {
      return $this->FareResponseDatePair;
    }

    /**
     * @param FareResponseDatePair[] $FareResponseDatePair
     * @return \App\models\ATSFlight\ArrayOfFareResponseDatePair
     */
    public function setFareResponseDatePair(array $FareResponseDatePair = null)
    {
      $this->FareResponseDatePair = $FareResponseDatePair;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->FareResponseDatePair[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return FareResponseDatePair
     */
    public function offsetGet($offset)
    {
      return $this->FareResponseDatePair[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param FareResponseDatePair $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->FareResponseDatePair[] = $value;
      } else {
        $this->FareResponseDatePair[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->FareResponseDatePair[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return FareResponseDatePair Return the current element
     */
    public function current()
    {
      return current($this->FareResponseDatePair);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->FareResponseDatePair);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->FareResponseDatePair);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->FareResponseDatePair);
    }

    /**
     * Countable implementation
     *
     * @return FareResponseDatePair Return count of elements
     */
    public function count()
    {
      return count($this->FareResponseDatePair);
    }

}
