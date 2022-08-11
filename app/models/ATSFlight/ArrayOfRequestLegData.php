<?php

namespace App\models\ATSFlight;

class ArrayOfRequestLegData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RequestLegData[] $RequestLegData
     */
    protected $RequestLegData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RequestLegData[]
     */
    public function getRequestLegData()
    {
      return $this->RequestLegData;
    }

    /**
     * @param RequestLegData[] $RequestLegData
     * @return \App\models\ATSFlight\ArrayOfRequestLegData
     */
    public function setRequestLegData(array $RequestLegData = null)
    {
      $this->RequestLegData = $RequestLegData;
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
      return isset($this->RequestLegData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RequestLegData
     */
    public function offsetGet($offset)
    {
      return $this->RequestLegData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RequestLegData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RequestLegData[] = $value;
      } else {
        $this->RequestLegData[$offset] = $value;
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
      unset($this->RequestLegData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RequestLegData Return the current element
     */
    public function current()
    {
      return current($this->RequestLegData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RequestLegData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RequestLegData);
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
      reset($this->RequestLegData);
    }

    /**
     * Countable implementation
     *
     * @return RequestLegData Return count of elements
     */
    public function count()
    {
      return count($this->RequestLegData);
    }

}
