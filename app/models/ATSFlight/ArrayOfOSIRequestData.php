<?php

namespace App\models\ATSFlight;

class ArrayOfOSIRequestData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var OSIRequestData[] $OSIRequestData
     */
    protected $OSIRequestData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OSIRequestData[]
     */
    public function getOSIRequestData()
    {
      return $this->OSIRequestData;
    }

    /**
     * @param OSIRequestData[] $OSIRequestData
     * @return \App\models\ATSFlight\ArrayOfOSIRequestData
     */
    public function setOSIRequestData(array $OSIRequestData = null)
    {
      $this->OSIRequestData = $OSIRequestData;
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
      return isset($this->OSIRequestData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return OSIRequestData
     */
    public function offsetGet($offset)
    {
      return $this->OSIRequestData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param OSIRequestData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->OSIRequestData[] = $value;
      } else {
        $this->OSIRequestData[$offset] = $value;
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
      unset($this->OSIRequestData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return OSIRequestData Return the current element
     */
    public function current()
    {
      return current($this->OSIRequestData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->OSIRequestData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->OSIRequestData);
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
      reset($this->OSIRequestData);
    }

    /**
     * Countable implementation
     *
     * @return OSIRequestData Return count of elements
     */
    public function count()
    {
      return count($this->OSIRequestData);
    }

}
