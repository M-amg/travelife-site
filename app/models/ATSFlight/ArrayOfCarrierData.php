<?php

namespace App\models\ATSFlight;

class ArrayOfCarrierData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CarrierData[] $CarrierData
     */
    protected $CarrierData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CarrierData[]
     */
    public function getCarrierData()
    {
      return $this->CarrierData;
    }

    /**
     * @param CarrierData[] $CarrierData
     * @return \App\models\ATSFlight\ArrayOfCarrierData
     */
    public function setCarrierData(array $CarrierData = null)
    {
      $this->CarrierData = $CarrierData;
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
      return isset($this->CarrierData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CarrierData
     */
    public function offsetGet($offset)
    {
      return $this->CarrierData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CarrierData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CarrierData[] = $value;
      } else {
        $this->CarrierData[$offset] = $value;
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
      unset($this->CarrierData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CarrierData Return the current element
     */
    public function current()
    {
      return current($this->CarrierData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CarrierData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CarrierData);
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
      reset($this->CarrierData);
    }

    /**
     * Countable implementation
     *
     * @return CarrierData Return count of elements
     */
    public function count()
    {
      return count($this->CarrierData);
    }

}
