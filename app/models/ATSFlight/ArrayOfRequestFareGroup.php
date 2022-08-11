<?php

namespace App\models\ATSFlight;

class ArrayOfRequestFareGroup implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RequestFareGroup[] $RequestFareGroup
     */
    protected $RequestFareGroup = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RequestFareGroup[]
     */
    public function getRequestFareGroup()
    {
      return $this->RequestFareGroup;
    }

    /**
     * @param RequestFareGroup[] $RequestFareGroup
     * @return \App\models\ATSFlight\ArrayOfRequestFareGroup
     */
    public function setRequestFareGroup(array $RequestFareGroup = null)
    {
      $this->RequestFareGroup = $RequestFareGroup;
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
      return isset($this->RequestFareGroup[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RequestFareGroup
     */
    public function offsetGet($offset)
    {
      return $this->RequestFareGroup[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RequestFareGroup $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RequestFareGroup[] = $value;
      } else {
        $this->RequestFareGroup[$offset] = $value;
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
      unset($this->RequestFareGroup[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RequestFareGroup Return the current element
     */
    public function current()
    {
      return current($this->RequestFareGroup);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RequestFareGroup);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RequestFareGroup);
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
      reset($this->RequestFareGroup);
    }

    /**
     * Countable implementation
     *
     * @return RequestFareGroup Return count of elements
     */
    public function count()
    {
      return count($this->RequestFareGroup);
    }

}
