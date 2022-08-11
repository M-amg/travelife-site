<?php

namespace App\models\ATSFlight;

class ArrayOfAvailabilityRequestLegType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AvailabilityRequestLegType[] $AvailabilityRequestLegType
     */
    protected $AvailabilityRequestLegType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AvailabilityRequestLegType[]
     */
    public function getAvailabilityRequestLegType()
    {
      return $this->AvailabilityRequestLegType;
    }

    /**
     * @param AvailabilityRequestLegType[] $AvailabilityRequestLegType
     * @return \App\models\ATSFlight\ArrayOfAvailabilityRequestLegType
     */
    public function setAvailabilityRequestLegType(array $AvailabilityRequestLegType = null)
    {
      $this->AvailabilityRequestLegType = $AvailabilityRequestLegType;
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
      return isset($this->AvailabilityRequestLegType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AvailabilityRequestLegType
     */
    public function offsetGet($offset)
    {
      return $this->AvailabilityRequestLegType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AvailabilityRequestLegType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AvailabilityRequestLegType[] = $value;
      } else {
        $this->AvailabilityRequestLegType[$offset] = $value;
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
      unset($this->AvailabilityRequestLegType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AvailabilityRequestLegType Return the current element
     */
    public function current()
    {
      return current($this->AvailabilityRequestLegType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AvailabilityRequestLegType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AvailabilityRequestLegType);
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
      reset($this->AvailabilityRequestLegType);
    }

    /**
     * Countable implementation
     *
     * @return AvailabilityRequestLegType Return count of elements
     */
    public function count()
    {
      return count($this->AvailabilityRequestLegType);
    }

}
