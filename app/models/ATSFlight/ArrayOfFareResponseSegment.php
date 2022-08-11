<?php

namespace App\models\ATSFlight;

class ArrayOfFareResponseSegment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var FareResponseSegment[] $FareResponseSegment
     */
    protected $FareResponseSegment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FareResponseSegment[]
     */
    public function getFareResponseSegment()
    {
      return $this->FareResponseSegment;
    }

    /**
     * @param FareResponseSegment[] $FareResponseSegment
     * @return \App\models\ATSFlight\ArrayOfFareResponseSegment
     */
    public function setFareResponseSegment(array $FareResponseSegment = null)
    {
      $this->FareResponseSegment = $FareResponseSegment;
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
      return isset($this->FareResponseSegment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return FareResponseSegment
     */
    public function offsetGet($offset)
    {
      return $this->FareResponseSegment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param FareResponseSegment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->FareResponseSegment[] = $value;
      } else {
        $this->FareResponseSegment[$offset] = $value;
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
      unset($this->FareResponseSegment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return FareResponseSegment Return the current element
     */
    public function current()
    {
      return current($this->FareResponseSegment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->FareResponseSegment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->FareResponseSegment);
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
      reset($this->FareResponseSegment);
    }

    /**
     * Countable implementation
     *
     * @return FareResponseSegment Return count of elements
     */
    public function count()
    {
      return count($this->FareResponseSegment);
    }

}
