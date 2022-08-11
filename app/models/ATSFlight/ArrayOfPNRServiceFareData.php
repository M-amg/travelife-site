<?php

namespace App\models\ATSFlight;

class ArrayOfPNRServiceFareData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PNRServiceFareData[] $PNRServiceFareData
     */
    protected $PNRServiceFareData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PNRServiceFareData[]
     */
    public function getPNRServiceFareData()
    {
      return $this->PNRServiceFareData;
    }

    /**
     * @param PNRServiceFareData[] $PNRServiceFareData
     * @return \App\models\ATSFlight\ArrayOfPNRServiceFareData
     */
    public function setPNRServiceFareData(array $PNRServiceFareData = null)
    {
      $this->PNRServiceFareData = $PNRServiceFareData;
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
      return isset($this->PNRServiceFareData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PNRServiceFareData
     */
    public function offsetGet($offset)
    {
      return $this->PNRServiceFareData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PNRServiceFareData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PNRServiceFareData[] = $value;
      } else {
        $this->PNRServiceFareData[$offset] = $value;
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
      unset($this->PNRServiceFareData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PNRServiceFareData Return the current element
     */
    public function current()
    {
      return current($this->PNRServiceFareData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PNRServiceFareData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PNRServiceFareData);
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
      reset($this->PNRServiceFareData);
    }

    /**
     * Countable implementation
     *
     * @return PNRServiceFareData Return count of elements
     */
    public function count()
    {
      return count($this->PNRServiceFareData);
    }

}
