<?php

namespace App\models\ATSFlight;

class ArrayOfFareRequestCarrier implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var FareRequestCarrier[] $FareRequestCarrier
     */
    protected $FareRequestCarrier = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FareRequestCarrier[]
     */
    public function getFareRequestCarrier()
    {
      return $this->FareRequestCarrier;
    }

    /**
     * @param FareRequestCarrier[] $FareRequestCarrier
     * @return \App\models\ATSFlight\ArrayOfFareRequestCarrier
     */
    public function setFareRequestCarrier(array $FareRequestCarrier = null)
    {
      $this->FareRequestCarrier = $FareRequestCarrier;
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
      return isset($this->FareRequestCarrier[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return FareRequestCarrier
     */
    public function offsetGet($offset)
    {
      return $this->FareRequestCarrier[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param FareRequestCarrier $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->FareRequestCarrier[] = $value;
      } else {
        $this->FareRequestCarrier[$offset] = $value;
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
      unset($this->FareRequestCarrier[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return FareRequestCarrier Return the current element
     */
    public function current()
    {
      return current($this->FareRequestCarrier);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->FareRequestCarrier);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->FareRequestCarrier);
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
      reset($this->FareRequestCarrier);
    }

    /**
     * Countable implementation
     *
     * @return FareRequestCarrier Return count of elements
     */
    public function count()
    {
      return count($this->FareRequestCarrier);
    }

}
