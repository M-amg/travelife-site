<?php

namespace App\models\ATSFlight;

class ArrayOfAvailabilityRequestPassengerType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AvailabilityRequestPassengerType[] $AvailabilityRequestPassengerType
     */
    protected $AvailabilityRequestPassengerType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AvailabilityRequestPassengerType[]
     */
    public function getAvailabilityRequestPassengerType()
    {
      return $this->AvailabilityRequestPassengerType;
    }

    /**
     * @param AvailabilityRequestPassengerType[] $AvailabilityRequestPassengerType
     * @return \App\models\ATSFlight\ArrayOfAvailabilityRequestPassengerType
     */
    public function setAvailabilityRequestPassengerType(array $AvailabilityRequestPassengerType = null)
    {
      $this->AvailabilityRequestPassengerType = $AvailabilityRequestPassengerType;
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
      return isset($this->AvailabilityRequestPassengerType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AvailabilityRequestPassengerType
     */
    public function offsetGet($offset)
    {
      return $this->AvailabilityRequestPassengerType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AvailabilityRequestPassengerType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AvailabilityRequestPassengerType[] = $value;
      } else {
        $this->AvailabilityRequestPassengerType[$offset] = $value;
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
      unset($this->AvailabilityRequestPassengerType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AvailabilityRequestPassengerType Return the current element
     */
    public function current()
    {
      return current($this->AvailabilityRequestPassengerType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AvailabilityRequestPassengerType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AvailabilityRequestPassengerType);
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
      reset($this->AvailabilityRequestPassengerType);
    }

    /**
     * Countable implementation
     *
     * @return AvailabilityRequestPassengerType Return count of elements
     */
    public function count()
    {
      return count($this->AvailabilityRequestPassengerType);
    }

}
