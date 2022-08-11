<?php

namespace App\models\ATSFlight;

class ArrayOfResponseFareData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ResponseFareData[] $ResponseFareData
     */
    protected $ResponseFareData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ResponseFareData[]
     */
    public function getResponseFareData()
    {
      return $this->ResponseFareData;
    }

    /**
     * @param ResponseFareData[] $ResponseFareData
     * @return \App\models\ATSFlight\ArrayOfResponseFareData
     */
    public function setResponseFareData(array $ResponseFareData = null)
    {
      $this->ResponseFareData = $ResponseFareData;
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
      return isset($this->ResponseFareData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ResponseFareData
     */
    public function offsetGet($offset)
    {
      return $this->ResponseFareData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ResponseFareData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ResponseFareData[] = $value;
      } else {
        $this->ResponseFareData[$offset] = $value;
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
      unset($this->ResponseFareData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ResponseFareData Return the current element
     */
    public function current()
    {
      return current($this->ResponseFareData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ResponseFareData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ResponseFareData);
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
      reset($this->ResponseFareData);
    }

    /**
     * Countable implementation
     *
     * @return ResponseFareData Return count of elements
     */
    public function count()
    {
      return count($this->ResponseFareData);
    }

}
