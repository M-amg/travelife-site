<?php

namespace App\models\ATSFlight;

class ArrayOfSeatResSeatData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SeatResSeatData[] $SeatResSeatData
     */
    protected $SeatResSeatData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SeatResSeatData[]
     */
    public function getSeatResSeatData()
    {
      return $this->SeatResSeatData;
    }

    /**
     * @param SeatResSeatData[] $SeatResSeatData
     * @return \App\models\ATSFlight\ArrayOfSeatResSeatData
     */
    public function setSeatResSeatData(array $SeatResSeatData = null)
    {
      $this->SeatResSeatData = $SeatResSeatData;
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
      return isset($this->SeatResSeatData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SeatResSeatData
     */
    public function offsetGet($offset)
    {
      return $this->SeatResSeatData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SeatResSeatData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SeatResSeatData[] = $value;
      } else {
        $this->SeatResSeatData[$offset] = $value;
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
      unset($this->SeatResSeatData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SeatResSeatData Return the current element
     */
    public function current()
    {
      return current($this->SeatResSeatData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SeatResSeatData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SeatResSeatData);
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
      reset($this->SeatResSeatData);
    }

    /**
     * Countable implementation
     *
     * @return SeatResSeatData Return count of elements
     */
    public function count()
    {
      return count($this->SeatResSeatData);
    }

}
