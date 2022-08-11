<?php

namespace App\models\ATSFlight;

class ArrayOfAvailabilityRequestCarrier implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AvailabilityRequestCarrier[] $AvailabilityRequestCarrier
     */
    protected $AvailabilityRequestCarrier = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AvailabilityRequestCarrier[]
     */
    public function getAvailabilityRequestCarrier()
    {
      return $this->AvailabilityRequestCarrier;
    }

    /**
     * @param AvailabilityRequestCarrier[] $AvailabilityRequestCarrier
     * @return \App\models\ATSFlight\ArrayOfAvailabilityRequestCarrier
     */
    public function setAvailabilityRequestCarrier(array $AvailabilityRequestCarrier = null)
    {
      $this->AvailabilityRequestCarrier = $AvailabilityRequestCarrier;
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
      return isset($this->AvailabilityRequestCarrier[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AvailabilityRequestCarrier
     */
    public function offsetGet($offset)
    {
      return $this->AvailabilityRequestCarrier[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AvailabilityRequestCarrier $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AvailabilityRequestCarrier[] = $value;
      } else {
        $this->AvailabilityRequestCarrier[$offset] = $value;
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
      unset($this->AvailabilityRequestCarrier[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AvailabilityRequestCarrier Return the current element
     */
    public function current()
    {
      return current($this->AvailabilityRequestCarrier);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AvailabilityRequestCarrier);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AvailabilityRequestCarrier);
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
      reset($this->AvailabilityRequestCarrier);
    }

    /**
     * Countable implementation
     *
     * @return AvailabilityRequestCarrier Return count of elements
     */
    public function count()
    {
      return count($this->AvailabilityRequestCarrier);
    }

}
