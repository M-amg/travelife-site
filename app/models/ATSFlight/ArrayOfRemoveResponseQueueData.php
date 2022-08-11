<?php

namespace App\models\ATSFlight;

class ArrayOfRemoveResponseQueueData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RemoveResponseQueueData[] $RemoveResponseQueueData
     */
    protected $RemoveResponseQueueData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RemoveResponseQueueData[]
     */
    public function getRemoveResponseQueueData()
    {
      return $this->RemoveResponseQueueData;
    }

    /**
     * @param RemoveResponseQueueData[] $RemoveResponseQueueData
     * @return \App\models\ATSFlight\ArrayOfRemoveResponseQueueData
     */
    public function setRemoveResponseQueueData(array $RemoveResponseQueueData = null)
    {
      $this->RemoveResponseQueueData = $RemoveResponseQueueData;
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
      return isset($this->RemoveResponseQueueData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RemoveResponseQueueData
     */
    public function offsetGet($offset)
    {
      return $this->RemoveResponseQueueData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RemoveResponseQueueData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RemoveResponseQueueData[] = $value;
      } else {
        $this->RemoveResponseQueueData[$offset] = $value;
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
      unset($this->RemoveResponseQueueData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RemoveResponseQueueData Return the current element
     */
    public function current()
    {
      return current($this->RemoveResponseQueueData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RemoveResponseQueueData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RemoveResponseQueueData);
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
      reset($this->RemoveResponseQueueData);
    }

    /**
     * Countable implementation
     *
     * @return RemoveResponseQueueData Return count of elements
     */
    public function count()
    {
      return count($this->RemoveResponseQueueData);
    }

}
