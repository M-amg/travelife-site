<?php

namespace App\models\ATSFlight;

class ArrayOfFareResponseFare implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var FareResponseFare[] $FareResponseFare
     */
    protected $FareResponseFare = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FareResponseFare[]
     */
    public function getFareResponseFare()
    {
      return $this->FareResponseFare;
    }

    /**
     * @param FareResponseFare[] $FareResponseFare
     * @return \App\models\ATSFlight\ArrayOfFareResponseFare
     */
    public function setFareResponseFare(array $FareResponseFare = null)
    {
      $this->FareResponseFare = $FareResponseFare;
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
      return isset($this->FareResponseFare[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return FareResponseFare
     */
    public function offsetGet($offset)
    {
      return $this->FareResponseFare[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param FareResponseFare $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->FareResponseFare[] = $value;
      } else {
        $this->FareResponseFare[$offset] = $value;
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
      unset($this->FareResponseFare[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return FareResponseFare Return the current element
     */
    public function current()
    {
      return current($this->FareResponseFare);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->FareResponseFare);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->FareResponseFare);
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
      reset($this->FareResponseFare);
    }

    /**
     * Countable implementation
     *
     * @return FareResponseFare Return count of elements
     */
    public function count()
    {
      return count($this->FareResponseFare);
    }

}
