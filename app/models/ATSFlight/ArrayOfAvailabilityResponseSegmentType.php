<?php

namespace App\models\ATSFlight;

class ArrayOfAvailabilityResponseSegmentType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AvailabilityResponseSegmentType[] $AvailabilityResponseSegmentType
     */
    protected $AvailabilityResponseSegmentType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AvailabilityResponseSegmentType[]
     */
    public function getAvailabilityResponseSegmentType()
    {
      return $this->AvailabilityResponseSegmentType;
    }

    /**
     * @param AvailabilityResponseSegmentType[] $AvailabilityResponseSegmentType
     * @return \App\models\ATSFlight\ArrayOfAvailabilityResponseSegmentType
     */
    public function setAvailabilityResponseSegmentType(array $AvailabilityResponseSegmentType = null)
    {
      $this->AvailabilityResponseSegmentType = $AvailabilityResponseSegmentType;
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
      return isset($this->AvailabilityResponseSegmentType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AvailabilityResponseSegmentType
     */
    public function offsetGet($offset)
    {
      return $this->AvailabilityResponseSegmentType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AvailabilityResponseSegmentType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AvailabilityResponseSegmentType[] = $value;
      } else {
        $this->AvailabilityResponseSegmentType[$offset] = $value;
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
      unset($this->AvailabilityResponseSegmentType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AvailabilityResponseSegmentType Return the current element
     */
    public function current()
    {
      return current($this->AvailabilityResponseSegmentType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AvailabilityResponseSegmentType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AvailabilityResponseSegmentType);
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
      reset($this->AvailabilityResponseSegmentType);
    }

    /**
     * Countable implementation
     *
     * @return AvailabilityResponseSegmentType Return count of elements
     */
    public function count()
    {
      return count($this->AvailabilityResponseSegmentType);
    }

}
