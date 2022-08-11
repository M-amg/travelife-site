<?php

namespace App\models\ATSFlight;

class ArrayOfFareSegmentData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var FareSegmentData[] $FareSegmentData
     */
    protected $FareSegmentData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FareSegmentData[]
     */
    public function getFareSegmentData()
    {
      return $this->FareSegmentData;
    }

    /**
     * @param FareSegmentData[] $FareSegmentData
     * @return \App\models\ATSFlight\ArrayOfFareSegmentData
     */
    public function setFareSegmentData(array $FareSegmentData = null)
    {
      $this->FareSegmentData = $FareSegmentData;
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
      return isset($this->FareSegmentData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return FareSegmentData
     */
    public function offsetGet($offset)
    {
      return $this->FareSegmentData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param FareSegmentData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->FareSegmentData[] = $value;
      } else {
        $this->FareSegmentData[$offset] = $value;
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
      unset($this->FareSegmentData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return FareSegmentData Return the current element
     */
    public function current()
    {
      return current($this->FareSegmentData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->FareSegmentData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->FareSegmentData);
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
      reset($this->FareSegmentData);
    }

    /**
     * Countable implementation
     *
     * @return FareSegmentData Return count of elements
     */
    public function count()
    {
      return count($this->FareSegmentData);
    }

}
