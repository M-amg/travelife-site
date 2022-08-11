<?php

namespace App\models\ATSFlight;

class ArrayOfFareComplexFare implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var FareComplexFare[] $FareComplexFare
     */
    protected $FareComplexFare = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FareComplexFare[]
     */
    public function getFareComplexFare()
    {
      return $this->FareComplexFare;
    }

    /**
     * @param FareComplexFare[] $FareComplexFare
     * @return \App\models\ATSFlight\ArrayOfFareComplexFare
     */
    public function setFareComplexFare(array $FareComplexFare = null)
    {
      $this->FareComplexFare = $FareComplexFare;
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
      return isset($this->FareComplexFare[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return FareComplexFare
     */
    public function offsetGet($offset)
    {
      return $this->FareComplexFare[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param FareComplexFare $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->FareComplexFare[] = $value;
      } else {
        $this->FareComplexFare[$offset] = $value;
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
      unset($this->FareComplexFare[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return FareComplexFare Return the current element
     */
    public function current()
    {
      return current($this->FareComplexFare);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->FareComplexFare);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->FareComplexFare);
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
      reset($this->FareComplexFare);
    }

    /**
     * Countable implementation
     *
     * @return FareComplexFare Return count of elements
     */
    public function count()
    {
      return count($this->FareComplexFare);
    }

}
