<?php

namespace App\models\ATSFlight;

class ArrayOfSeatRequestData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SeatRequestData[] $SeatRequestData
     */
    protected $SeatRequestData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SeatRequestData[]
     */
    public function getSeatRequestData()
    {
      return $this->SeatRequestData;
    }

    /**
     * @param SeatRequestData[] $SeatRequestData
     * @return \App\models\ATSFlight\ArrayOfSeatRequestData
     */
    public function setSeatRequestData(array $SeatRequestData = null)
    {
      $this->SeatRequestData = $SeatRequestData;
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
      return isset($this->SeatRequestData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SeatRequestData
     */
    public function offsetGet($offset)
    {
      return $this->SeatRequestData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SeatRequestData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SeatRequestData[] = $value;
      } else {
        $this->SeatRequestData[$offset] = $value;
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
      unset($this->SeatRequestData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SeatRequestData Return the current element
     */
    public function current()
    {
      return current($this->SeatRequestData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SeatRequestData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SeatRequestData);
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
      reset($this->SeatRequestData);
    }

    /**
     * Countable implementation
     *
     * @return SeatRequestData Return count of elements
     */
    public function count()
    {
      return count($this->SeatRequestData);
    }

}
