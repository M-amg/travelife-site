<?php

namespace App\models\ATSFlight;

class ArrayOfSeatMapAirRowData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SeatMapAirRowData[] $SeatMapAirRowData
     */
    protected $SeatMapAirRowData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SeatMapAirRowData[]
     */
    public function getSeatMapAirRowData()
    {
      return $this->SeatMapAirRowData;
    }

    /**
     * @param SeatMapAirRowData[] $SeatMapAirRowData
     * @return \App\models\ATSFlight\ArrayOfSeatMapAirRowData
     */
    public function setSeatMapAirRowData(array $SeatMapAirRowData = null)
    {
      $this->SeatMapAirRowData = $SeatMapAirRowData;
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
      return isset($this->SeatMapAirRowData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SeatMapAirRowData
     */
    public function offsetGet($offset)
    {
      return $this->SeatMapAirRowData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SeatMapAirRowData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SeatMapAirRowData[] = $value;
      } else {
        $this->SeatMapAirRowData[$offset] = $value;
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
      unset($this->SeatMapAirRowData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SeatMapAirRowData Return the current element
     */
    public function current()
    {
      return current($this->SeatMapAirRowData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SeatMapAirRowData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SeatMapAirRowData);
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
      reset($this->SeatMapAirRowData);
    }

    /**
     * Countable implementation
     *
     * @return SeatMapAirRowData Return count of elements
     */
    public function count()
    {
      return count($this->SeatMapAirRowData);
    }

}
