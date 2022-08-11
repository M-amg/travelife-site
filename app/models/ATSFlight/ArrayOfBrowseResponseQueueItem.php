<?php

namespace App\models\ATSFlight;

class ArrayOfBrowseResponseQueueItem implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BrowseResponseQueueItem[] $BrowseResponseQueueItem
     */
    protected $BrowseResponseQueueItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BrowseResponseQueueItem[]
     */
    public function getBrowseResponseQueueItem()
    {
      return $this->BrowseResponseQueueItem;
    }

    /**
     * @param BrowseResponseQueueItem[] $BrowseResponseQueueItem
     * @return \App\models\ATSFlight\ArrayOfBrowseResponseQueueItem
     */
    public function setBrowseResponseQueueItem(array $BrowseResponseQueueItem = null)
    {
      $this->BrowseResponseQueueItem = $BrowseResponseQueueItem;
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
      return isset($this->BrowseResponseQueueItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BrowseResponseQueueItem
     */
    public function offsetGet($offset)
    {
      return $this->BrowseResponseQueueItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BrowseResponseQueueItem $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BrowseResponseQueueItem[] = $value;
      } else {
        $this->BrowseResponseQueueItem[$offset] = $value;
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
      unset($this->BrowseResponseQueueItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BrowseResponseQueueItem Return the current element
     */
    public function current()
    {
      return current($this->BrowseResponseQueueItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BrowseResponseQueueItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BrowseResponseQueueItem);
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
      reset($this->BrowseResponseQueueItem);
    }

    /**
     * Countable implementation
     *
     * @return BrowseResponseQueueItem Return count of elements
     */
    public function count()
    {
      return count($this->BrowseResponseQueueItem);
    }

}
