<?php

namespace App\models\ATSFlight;

class ArrayOfBrowseResponseRecordLocatorItem implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BrowseResponseRecordLocatorItem[] $BrowseResponseRecordLocatorItem
     */
    protected $BrowseResponseRecordLocatorItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BrowseResponseRecordLocatorItem[]
     */
    public function getBrowseResponseRecordLocatorItem()
    {
      return $this->BrowseResponseRecordLocatorItem;
    }

    /**
     * @param BrowseResponseRecordLocatorItem[] $BrowseResponseRecordLocatorItem
     * @return \App\models\ATSFlight\ArrayOfBrowseResponseRecordLocatorItem
     */
    public function setBrowseResponseRecordLocatorItem(array $BrowseResponseRecordLocatorItem = null)
    {
      $this->BrowseResponseRecordLocatorItem = $BrowseResponseRecordLocatorItem;
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
      return isset($this->BrowseResponseRecordLocatorItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BrowseResponseRecordLocatorItem
     */
    public function offsetGet($offset)
    {
      return $this->BrowseResponseRecordLocatorItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BrowseResponseRecordLocatorItem $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BrowseResponseRecordLocatorItem[] = $value;
      } else {
        $this->BrowseResponseRecordLocatorItem[$offset] = $value;
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
      unset($this->BrowseResponseRecordLocatorItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BrowseResponseRecordLocatorItem Return the current element
     */
    public function current()
    {
      return current($this->BrowseResponseRecordLocatorItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BrowseResponseRecordLocatorItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BrowseResponseRecordLocatorItem);
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
      reset($this->BrowseResponseRecordLocatorItem);
    }

    /**
     * Countable implementation
     *
     * @return BrowseResponseRecordLocatorItem Return count of elements
     */
    public function count()
    {
      return count($this->BrowseResponseRecordLocatorItem);
    }

}
