<?php

namespace App\models\ATSFlight;

class ArrayOfSeatResResponseSegment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SeatResResponseSegment[] $SeatResResponseSegment
     */
    protected $SeatResResponseSegment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SeatResResponseSegment[]
     */
    public function getSeatResResponseSegment()
    {
      return $this->SeatResResponseSegment;
    }

    /**
     * @param SeatResResponseSegment[] $SeatResResponseSegment
     * @return \App\models\ATSFlight\ArrayOfSeatResResponseSegment
     */
    public function setSeatResResponseSegment(array $SeatResResponseSegment = null)
    {
      $this->SeatResResponseSegment = $SeatResResponseSegment;
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
      return isset($this->SeatResResponseSegment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SeatResResponseSegment
     */
    public function offsetGet($offset)
    {
      return $this->SeatResResponseSegment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SeatResResponseSegment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SeatResResponseSegment[] = $value;
      } else {
        $this->SeatResResponseSegment[$offset] = $value;
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
      unset($this->SeatResResponseSegment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SeatResResponseSegment Return the current element
     */
    public function current()
    {
      return current($this->SeatResResponseSegment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SeatResResponseSegment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SeatResResponseSegment);
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
      reset($this->SeatResResponseSegment);
    }

    /**
     * Countable implementation
     *
     * @return SeatResResponseSegment Return count of elements
     */
    public function count()
    {
      return count($this->SeatResResponseSegment);
    }

}
