<?php

namespace App\models\ATSFlight;

class ArrayOfResponseUserData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ResponseUserData[] $ResponseUserData
     */
    protected $ResponseUserData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ResponseUserData[]
     */
    public function getResponseUserData()
    {
      return $this->ResponseUserData;
    }

    /**
     * @param ResponseUserData[] $ResponseUserData
     * @return \App\models\ATSFlight\ArrayOfResponseUserData
     */
    public function setResponseUserData(array $ResponseUserData = null)
    {
      $this->ResponseUserData = $ResponseUserData;
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
      return isset($this->ResponseUserData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ResponseUserData
     */
    public function offsetGet($offset)
    {
      return $this->ResponseUserData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ResponseUserData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ResponseUserData[] = $value;
      } else {
        $this->ResponseUserData[$offset] = $value;
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
      unset($this->ResponseUserData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ResponseUserData Return the current element
     */
    public function current()
    {
      return current($this->ResponseUserData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ResponseUserData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ResponseUserData);
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
      reset($this->ResponseUserData);
    }

    /**
     * Countable implementation
     *
     * @return ResponseUserData Return count of elements
     */
    public function count()
    {
      return count($this->ResponseUserData);
    }

}
