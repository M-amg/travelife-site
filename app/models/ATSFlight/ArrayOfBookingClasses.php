<?php

namespace App\models\ATSFlight;

class ArrayOfBookingClasses implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BookingClasses[] $BookingClasses
     */
    protected $BookingClasses = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BookingClasses[]
     */
    public function getBookingClasses()
    {
      return $this->BookingClasses;
    }

    /**
     * @param BookingClasses[] $BookingClasses
     * @return \App\models\ATSFlight\ArrayOfBookingClasses
     */
    public function setBookingClasses(array $BookingClasses = null)
    {
      $this->BookingClasses = $BookingClasses;
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
      return isset($this->BookingClasses[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BookingClasses
     */
    public function offsetGet($offset)
    {
      return $this->BookingClasses[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BookingClasses $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BookingClasses[] = $value;
      } else {
        $this->BookingClasses[$offset] = $value;
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
      unset($this->BookingClasses[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BookingClasses Return the current element
     */
    public function current()
    {
      return current($this->BookingClasses);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BookingClasses);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BookingClasses);
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
      reset($this->BookingClasses);
    }

    /**
     * Countable implementation
     *
     * @return BookingClasses Return count of elements
     */
    public function count()
    {
      return count($this->BookingClasses);
    }

}
