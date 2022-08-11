<?php

namespace App\models\ATSFlight;

class ArrayOfRequestPassengerData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RequestPassengerData[] $RequestPassengerData
     */
    protected $RequestPassengerData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RequestPassengerData[]
     */
    public function getRequestPassengerData()
    {
      return $this->RequestPassengerData;
    }

    /**
     * @param RequestPassengerData[] $RequestPassengerData
     * @return \App\models\ATSFlight\ArrayOfRequestPassengerData
     */
    public function setRequestPassengerData(array $RequestPassengerData = null)
    {
      $this->RequestPassengerData = $RequestPassengerData;
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
      return isset($this->RequestPassengerData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RequestPassengerData
     */
    public function offsetGet($offset)
    {
      return $this->RequestPassengerData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RequestPassengerData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RequestPassengerData[] = $value;
      } else {
        $this->RequestPassengerData[$offset] = $value;
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
      unset($this->RequestPassengerData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RequestPassengerData Return the current element
     */
    public function current()
    {
      return current($this->RequestPassengerData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RequestPassengerData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RequestPassengerData);
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
      reset($this->RequestPassengerData);
    }

    /**
     * Countable implementation
     *
     * @return RequestPassengerData Return count of elements
     */
    public function count()
    {
      return count($this->RequestPassengerData);
    }

}
