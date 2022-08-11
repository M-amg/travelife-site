<?php

namespace App\models\ATSFlight;

class ArrayOfFareComplexResponseFareItem implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var FareComplexResponseFareItem[] $FareComplexResponseFareItem
     */
    protected $FareComplexResponseFareItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FareComplexResponseFareItem[]
     */
    public function getFareComplexResponseFareItem()
    {
      return $this->FareComplexResponseFareItem;
    }

    /**
     * @param FareComplexResponseFareItem[] $FareComplexResponseFareItem
     * @return \App\models\ATSFlight\ArrayOfFareComplexResponseFareItem
     */
    public function setFareComplexResponseFareItem(array $FareComplexResponseFareItem = null)
    {
      $this->FareComplexResponseFareItem = $FareComplexResponseFareItem;
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
      return isset($this->FareComplexResponseFareItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return FareComplexResponseFareItem
     */
    public function offsetGet($offset)
    {
      return $this->FareComplexResponseFareItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param FareComplexResponseFareItem $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->FareComplexResponseFareItem[] = $value;
      } else {
        $this->FareComplexResponseFareItem[$offset] = $value;
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
      unset($this->FareComplexResponseFareItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return FareComplexResponseFareItem Return the current element
     */
    public function current()
    {
      return current($this->FareComplexResponseFareItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->FareComplexResponseFareItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->FareComplexResponseFareItem);
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
      reset($this->FareComplexResponseFareItem);
    }

    /**
     * Countable implementation
     *
     * @return FareComplexResponseFareItem Return count of elements
     */
    public function count()
    {
      return count($this->FareComplexResponseFareItem);
    }

}
