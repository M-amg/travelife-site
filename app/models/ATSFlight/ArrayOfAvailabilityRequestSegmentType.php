<?php

namespace App\models\ATSFlight;

class ArrayOfAvailabilityRequestSegmentType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AvailabilityRequestSegmentType[] $AvailabilityRequestSegmentType
     */
    protected $AvailabilityRequestSegmentType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AvailabilityRequestSegmentType[]
     */
    public function getAvailabilityRequestSegmentType()
    {
      return $this->AvailabilityRequestSegmentType;
    }

    /**
     * @param AvailabilityRequestSegmentType[] $AvailabilityRequestSegmentType
     * @return \App\models\ATSFlight\ArrayOfAvailabilityRequestSegmentType
     */
    public function setAvailabilityRequestSegmentType(array $AvailabilityRequestSegmentType = null)
    {
      $this->AvailabilityRequestSegmentType = $AvailabilityRequestSegmentType;
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
      return isset($this->AvailabilityRequestSegmentType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AvailabilityRequestSegmentType
     */
    public function offsetGet($offset)
    {
      return $this->AvailabilityRequestSegmentType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AvailabilityRequestSegmentType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AvailabilityRequestSegmentType[] = $value;
      } else {
        $this->AvailabilityRequestSegmentType[$offset] = $value;
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
      unset($this->AvailabilityRequestSegmentType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AvailabilityRequestSegmentType Return the current element
     */
    public function current()
    {
      return current($this->AvailabilityRequestSegmentType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AvailabilityRequestSegmentType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AvailabilityRequestSegmentType);
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
      reset($this->AvailabilityRequestSegmentType);
    }

    /**
     * Countable implementation
     *
     * @return AvailabilityRequestSegmentType Return count of elements
     */
    public function count()
    {
      return count($this->AvailabilityRequestSegmentType);
    }

}
