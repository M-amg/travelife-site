<?php

namespace App\models\ATSFlight;

class ArrayOfSeatPriceIDDATA implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SeatPriceIDDATA[] $SeatPriceIDDATA
     */
    protected $SeatPriceIDDATA = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SeatPriceIDDATA[]
     */
    public function getSeatPriceIDDATA()
    {
      return $this->SeatPriceIDDATA;
    }

    /**
     * @param SeatPriceIDDATA[] $SeatPriceIDDATA
     * @return \App\models\ATSFlight\ArrayOfSeatPriceIDDATA
     */
    public function setSeatPriceIDDATA(array $SeatPriceIDDATA = null)
    {
      $this->SeatPriceIDDATA = $SeatPriceIDDATA;
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
      return isset($this->SeatPriceIDDATA[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SeatPriceIDDATA
     */
    public function offsetGet($offset)
    {
      return $this->SeatPriceIDDATA[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SeatPriceIDDATA $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SeatPriceIDDATA[] = $value;
      } else {
        $this->SeatPriceIDDATA[$offset] = $value;
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
      unset($this->SeatPriceIDDATA[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SeatPriceIDDATA Return the current element
     */
    public function current()
    {
      return current($this->SeatPriceIDDATA);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SeatPriceIDDATA);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SeatPriceIDDATA);
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
      reset($this->SeatPriceIDDATA);
    }

    /**
     * Countable implementation
     *
     * @return SeatPriceIDDATA Return count of elements
     */
    public function count()
    {
      return count($this->SeatPriceIDDATA);
    }

}
