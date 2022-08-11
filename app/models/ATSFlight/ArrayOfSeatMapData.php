<?php

namespace App\models\ATSFlight;

class ArrayOfSeatMapData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SeatMapData[] $SeatMapData
     */
    protected $SeatMapData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SeatMapData[]
     */
    public function getSeatMapData()
    {
      return $this->SeatMapData;
    }

    /**
     * @param SeatMapData[] $SeatMapData
     * @return \App\models\ATSFlight\ArrayOfSeatMapData
     */
    public function setSeatMapData(array $SeatMapData = null)
    {
      $this->SeatMapData = $SeatMapData;
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
      return isset($this->SeatMapData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SeatMapData
     */
    public function offsetGet($offset)
    {
      return $this->SeatMapData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SeatMapData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SeatMapData[] = $value;
      } else {
        $this->SeatMapData[$offset] = $value;
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
      unset($this->SeatMapData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SeatMapData Return the current element
     */
    public function current()
    {
      return current($this->SeatMapData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SeatMapData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SeatMapData);
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
      reset($this->SeatMapData);
    }

    /**
     * Countable implementation
     *
     * @return SeatMapData Return count of elements
     */
    public function count()
    {
      return count($this->SeatMapData);
    }

}
