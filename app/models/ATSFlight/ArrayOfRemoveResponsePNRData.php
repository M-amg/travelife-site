<?php

namespace App\models\ATSFlight;

class ArrayOfRemoveResponsePNRData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RemoveResponsePNRData[] $RemoveResponsePNRData
     */
    protected $RemoveResponsePNRData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RemoveResponsePNRData[]
     */
    public function getRemoveResponsePNRData()
    {
      return $this->RemoveResponsePNRData;
    }

    /**
     * @param RemoveResponsePNRData[] $RemoveResponsePNRData
     * @return \App\models\ATSFlight\ArrayOfRemoveResponsePNRData
     */
    public function setRemoveResponsePNRData(array $RemoveResponsePNRData = null)
    {
      $this->RemoveResponsePNRData = $RemoveResponsePNRData;
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
      return isset($this->RemoveResponsePNRData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RemoveResponsePNRData
     */
    public function offsetGet($offset)
    {
      return $this->RemoveResponsePNRData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RemoveResponsePNRData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RemoveResponsePNRData[] = $value;
      } else {
        $this->RemoveResponsePNRData[$offset] = $value;
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
      unset($this->RemoveResponsePNRData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RemoveResponsePNRData Return the current element
     */
    public function current()
    {
      return current($this->RemoveResponsePNRData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RemoveResponsePNRData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RemoveResponsePNRData);
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
      reset($this->RemoveResponsePNRData);
    }

    /**
     * Countable implementation
     *
     * @return RemoveResponsePNRData Return count of elements
     */
    public function count()
    {
      return count($this->RemoveResponsePNRData);
    }

}
