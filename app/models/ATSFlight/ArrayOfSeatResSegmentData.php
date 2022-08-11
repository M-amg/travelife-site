<?php

namespace App\models\ATSFlight;

class ArrayOfSeatResSegmentData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SeatResSegmentData[] $SeatResSegmentData
     */
    protected $SeatResSegmentData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SeatResSegmentData[]
     */
    public function getSeatResSegmentData()
    {
      return $this->SeatResSegmentData;
    }

    /**
     * @param SeatResSegmentData[] $SeatResSegmentData
     * @return \App\models\ATSFlight\ArrayOfSeatResSegmentData
     */
    public function setSeatResSegmentData(array $SeatResSegmentData = null)
    {
      $this->SeatResSegmentData = $SeatResSegmentData;
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
      return isset($this->SeatResSegmentData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SeatResSegmentData
     */
    public function offsetGet($offset)
    {
      return $this->SeatResSegmentData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SeatResSegmentData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SeatResSegmentData[] = $value;
      } else {
        $this->SeatResSegmentData[$offset] = $value;
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
      unset($this->SeatResSegmentData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SeatResSegmentData Return the current element
     */
    public function current()
    {
      return current($this->SeatResSegmentData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SeatResSegmentData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SeatResSegmentData);
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
      reset($this->SeatResSegmentData);
    }

    /**
     * Countable implementation
     *
     * @return SeatResSegmentData Return count of elements
     */
    public function count()
    {
      return count($this->SeatResSegmentData);
    }

}
