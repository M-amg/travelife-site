<?php

namespace App\models\ATSFlight;

class ArrayOfFareComplexResponseFare implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var FareComplexResponseFare[] $FareComplexResponseFare
     */
    protected $FareComplexResponseFare = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FareComplexResponseFare[]
     */
    public function getFareComplexResponseFare()
    {
      return $this->FareComplexResponseFare;
    }

    /**
     * @param FareComplexResponseFare[] $FareComplexResponseFare
     * @return \App\models\ATSFlight\ArrayOfFareComplexResponseFare
     */
    public function setFareComplexResponseFare(array $FareComplexResponseFare = null)
    {
      $this->FareComplexResponseFare = $FareComplexResponseFare;
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
      return isset($this->FareComplexResponseFare[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return FareComplexResponseFare
     */
    public function offsetGet($offset)
    {
      return $this->FareComplexResponseFare[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param FareComplexResponseFare $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->FareComplexResponseFare[] = $value;
      } else {
        $this->FareComplexResponseFare[$offset] = $value;
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
      unset($this->FareComplexResponseFare[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return FareComplexResponseFare Return the current element
     */
    public function current()
    {
      return current($this->FareComplexResponseFare);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->FareComplexResponseFare);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->FareComplexResponseFare);
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
      reset($this->FareComplexResponseFare);
    }

    /**
     * Countable implementation
     *
     * @return FareComplexResponseFare Return count of elements
     */
    public function count()
    {
      return count($this->FareComplexResponseFare);
    }

}
