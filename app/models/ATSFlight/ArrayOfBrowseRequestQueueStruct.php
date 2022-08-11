<?php

namespace App\models\ATSFlight;

class ArrayOfBrowseRequestQueueStruct implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BrowseRequestQueueStruct[] $BrowseRequestQueueStruct
     */
    protected $BrowseRequestQueueStruct = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BrowseRequestQueueStruct[]
     */
    public function getBrowseRequestQueueStruct()
    {
      return $this->BrowseRequestQueueStruct;
    }

    /**
     * @param BrowseRequestQueueStruct[] $BrowseRequestQueueStruct
     * @return \App\models\ATSFlight\ArrayOfBrowseRequestQueueStruct
     */
    public function setBrowseRequestQueueStruct(array $BrowseRequestQueueStruct = null)
    {
      $this->BrowseRequestQueueStruct = $BrowseRequestQueueStruct;
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
      return isset($this->BrowseRequestQueueStruct[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BrowseRequestQueueStruct
     */
    public function offsetGet($offset)
    {
      return $this->BrowseRequestQueueStruct[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BrowseRequestQueueStruct $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BrowseRequestQueueStruct[] = $value;
      } else {
        $this->BrowseRequestQueueStruct[$offset] = $value;
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
      unset($this->BrowseRequestQueueStruct[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BrowseRequestQueueStruct Return the current element
     */
    public function current()
    {
      return current($this->BrowseRequestQueueStruct);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BrowseRequestQueueStruct);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BrowseRequestQueueStruct);
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
      reset($this->BrowseRequestQueueStruct);
    }

    /**
     * Countable implementation
     *
     * @return BrowseRequestQueueStruct Return count of elements
     */
    public function count()
    {
      return count($this->BrowseRequestQueueStruct);
    }

}
