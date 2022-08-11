<?php

namespace App\models\ATSFlight;

class ArrayOfAvailabilityResponseDatePair implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AvailabilityResponseDatePair[] $AvailabilityResponseDatePair
     */
    protected $AvailabilityResponseDatePair = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AvailabilityResponseDatePair[]
     */
    public function getAvailabilityResponseDatePair()
    {
      return $this->AvailabilityResponseDatePair;
    }

    /**
     * @param AvailabilityResponseDatePair[] $AvailabilityResponseDatePair
     * @return \App\models\ATSFlight\ArrayOfAvailabilityResponseDatePair
     */
    public function setAvailabilityResponseDatePair(array $AvailabilityResponseDatePair = null)
    {
      $this->AvailabilityResponseDatePair = $AvailabilityResponseDatePair;
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
      return isset($this->AvailabilityResponseDatePair[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AvailabilityResponseDatePair
     */
    public function offsetGet($offset)
    {
      return $this->AvailabilityResponseDatePair[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AvailabilityResponseDatePair $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AvailabilityResponseDatePair[] = $value;
      } else {
        $this->AvailabilityResponseDatePair[$offset] = $value;
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
      unset($this->AvailabilityResponseDatePair[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AvailabilityResponseDatePair Return the current element
     */
    public function current()
    {
      return current($this->AvailabilityResponseDatePair);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AvailabilityResponseDatePair);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AvailabilityResponseDatePair);
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
      reset($this->AvailabilityResponseDatePair);
    }

    /**
     * Countable implementation
     *
     * @return AvailabilityResponseDatePair Return count of elements
     */
    public function count()
    {
      return count($this->AvailabilityResponseDatePair);
    }

}
