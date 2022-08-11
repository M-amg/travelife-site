<?php

namespace App\models\ATSFlight;

class ArrayOfQueueData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var QueueData[] $QueueData
     */
    protected $QueueData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return QueueData[]
     */
    public function getQueueData()
    {
      return $this->QueueData;
    }

    /**
     * @param QueueData[] $QueueData
     * @return \App\models\ATSFlight\ArrayOfQueueData
     */
    public function setQueueData(array $QueueData = null)
    {
      $this->QueueData = $QueueData;
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
      return isset($this->QueueData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return QueueData
     */
    public function offsetGet($offset)
    {
      return $this->QueueData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param QueueData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->QueueData[] = $value;
      } else {
        $this->QueueData[$offset] = $value;
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
      unset($this->QueueData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return QueueData Return the current element
     */
    public function current()
    {
      return current($this->QueueData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->QueueData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->QueueData);
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
      reset($this->QueueData);
    }

    /**
     * Countable implementation
     *
     * @return QueueData Return count of elements
     */
    public function count()
    {
      return count($this->QueueData);
    }

}
