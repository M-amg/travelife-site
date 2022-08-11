<?php

namespace App\models\ATSFlight;

class ArrayOfSeatMapPassenger implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SeatMapPassenger[] $SeatMapPassenger
     */
    protected $SeatMapPassenger = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SeatMapPassenger[]
     */
    public function getSeatMapPassenger()
    {
      return $this->SeatMapPassenger;
    }

    /**
     * @param SeatMapPassenger[] $SeatMapPassenger
     * @return \App\models\ATSFlight\ArrayOfSeatMapPassenger
     */
    public function setSeatMapPassenger(array $SeatMapPassenger = null)
    {
      $this->SeatMapPassenger = $SeatMapPassenger;
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
      return isset($this->SeatMapPassenger[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SeatMapPassenger
     */
    public function offsetGet($offset)
    {
      return $this->SeatMapPassenger[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SeatMapPassenger $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SeatMapPassenger[] = $value;
      } else {
        $this->SeatMapPassenger[$offset] = $value;
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
      unset($this->SeatMapPassenger[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SeatMapPassenger Return the current element
     */
    public function current()
    {
      return current($this->SeatMapPassenger);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SeatMapPassenger);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SeatMapPassenger);
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
      reset($this->SeatMapPassenger);
    }

    /**
     * Countable implementation
     *
     * @return SeatMapPassenger Return count of elements
     */
    public function count()
    {
      return count($this->SeatMapPassenger);
    }

}
