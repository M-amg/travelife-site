<?php

namespace App\models\ATSFlight;

class ArrayOfAvailabilityResponseAlternativeType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AvailabilityResponseAlternativeType[] $AvailabilityResponseAlternativeType
     */
    protected $AvailabilityResponseAlternativeType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AvailabilityResponseAlternativeType[]
     */
    public function getAvailabilityResponseAlternativeType()
    {
      return $this->AvailabilityResponseAlternativeType;
    }

    /**
     * @param AvailabilityResponseAlternativeType[] $AvailabilityResponseAlternativeType
     * @return \App\models\ATSFlight\ArrayOfAvailabilityResponseAlternativeType
     */
    public function setAvailabilityResponseAlternativeType(array $AvailabilityResponseAlternativeType = null)
    {
      $this->AvailabilityResponseAlternativeType = $AvailabilityResponseAlternativeType;
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
      return isset($this->AvailabilityResponseAlternativeType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AvailabilityResponseAlternativeType
     */
    public function offsetGet($offset)
    {
      return $this->AvailabilityResponseAlternativeType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AvailabilityResponseAlternativeType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AvailabilityResponseAlternativeType[] = $value;
      } else {
        $this->AvailabilityResponseAlternativeType[$offset] = $value;
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
      unset($this->AvailabilityResponseAlternativeType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AvailabilityResponseAlternativeType Return the current element
     */
    public function current()
    {
      return current($this->AvailabilityResponseAlternativeType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AvailabilityResponseAlternativeType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AvailabilityResponseAlternativeType);
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
      reset($this->AvailabilityResponseAlternativeType);
    }

    /**
     * Countable implementation
     *
     * @return AvailabilityResponseAlternativeType Return count of elements
     */
    public function count()
    {
      return count($this->AvailabilityResponseAlternativeType);
    }

}
