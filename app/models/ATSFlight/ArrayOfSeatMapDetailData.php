<?php

namespace App\models\ATSFlight;

class ArrayOfSeatMapDetailData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SeatMapDetailData[] $SeatMapDetailData
     */
    protected $SeatMapDetailData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SeatMapDetailData[]
     */
    public function getSeatMapDetailData()
    {
      return $this->SeatMapDetailData;
    }

    /**
     * @param SeatMapDetailData[] $SeatMapDetailData
     * @return \App\models\ATSFlight\ArrayOfSeatMapDetailData
     */
    public function setSeatMapDetailData(array $SeatMapDetailData = null)
    {
      $this->SeatMapDetailData = $SeatMapDetailData;
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
      return isset($this->SeatMapDetailData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SeatMapDetailData
     */
    public function offsetGet($offset)
    {
      return $this->SeatMapDetailData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SeatMapDetailData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SeatMapDetailData[] = $value;
      } else {
        $this->SeatMapDetailData[$offset] = $value;
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
      unset($this->SeatMapDetailData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SeatMapDetailData Return the current element
     */
    public function current()
    {
      return current($this->SeatMapDetailData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SeatMapDetailData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SeatMapDetailData);
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
      reset($this->SeatMapDetailData);
    }

    /**
     * Countable implementation
     *
     * @return SeatMapDetailData Return count of elements
     */
    public function count()
    {
      return count($this->SeatMapDetailData);
    }

}
