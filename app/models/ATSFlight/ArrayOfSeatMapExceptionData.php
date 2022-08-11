<?php

namespace App\models\ATSFlight;

class ArrayOfSeatMapExceptionData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SeatMapExceptionData[] $SeatMapExceptionData
     */
    protected $SeatMapExceptionData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SeatMapExceptionData[]
     */
    public function getSeatMapExceptionData()
    {
      return $this->SeatMapExceptionData;
    }

    /**
     * @param SeatMapExceptionData[] $SeatMapExceptionData
     * @return \App\models\ATSFlight\ArrayOfSeatMapExceptionData
     */
    public function setSeatMapExceptionData(array $SeatMapExceptionData = null)
    {
      $this->SeatMapExceptionData = $SeatMapExceptionData;
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
      return isset($this->SeatMapExceptionData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SeatMapExceptionData
     */
    public function offsetGet($offset)
    {
      return $this->SeatMapExceptionData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SeatMapExceptionData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SeatMapExceptionData[] = $value;
      } else {
        $this->SeatMapExceptionData[$offset] = $value;
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
      unset($this->SeatMapExceptionData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SeatMapExceptionData Return the current element
     */
    public function current()
    {
      return current($this->SeatMapExceptionData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SeatMapExceptionData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SeatMapExceptionData);
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
      reset($this->SeatMapExceptionData);
    }

    /**
     * Countable implementation
     *
     * @return SeatMapExceptionData Return count of elements
     */
    public function count()
    {
      return count($this->SeatMapExceptionData);
    }

}
