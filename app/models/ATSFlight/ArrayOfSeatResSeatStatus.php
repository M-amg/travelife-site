<?php

namespace App\models\ATSFlight;

class ArrayOfSeatResSeatStatus implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SeatResSeatStatus[] $SeatResSeatStatus
     */
    protected $SeatResSeatStatus = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SeatResSeatStatus[]
     */
    public function getSeatResSeatStatus()
    {
      return $this->SeatResSeatStatus;
    }

    /**
     * @param SeatResSeatStatus[] $SeatResSeatStatus
     * @return \App\models\ATSFlight\ArrayOfSeatResSeatStatus
     */
    public function setSeatResSeatStatus(array $SeatResSeatStatus = null)
    {
      $this->SeatResSeatStatus = $SeatResSeatStatus;
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
      return isset($this->SeatResSeatStatus[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SeatResSeatStatus
     */
    public function offsetGet($offset)
    {
      return $this->SeatResSeatStatus[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SeatResSeatStatus $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SeatResSeatStatus[] = $value;
      } else {
        $this->SeatResSeatStatus[$offset] = $value;
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
      unset($this->SeatResSeatStatus[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SeatResSeatStatus Return the current element
     */
    public function current()
    {
      return current($this->SeatResSeatStatus);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SeatResSeatStatus);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SeatResSeatStatus);
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
      reset($this->SeatResSeatStatus);
    }

    /**
     * Countable implementation
     *
     * @return SeatResSeatStatus Return count of elements
     */
    public function count()
    {
      return count($this->SeatResSeatStatus);
    }

}
