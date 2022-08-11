<?php

namespace App\models\ATSFlight;

class ArrayOfPreferenceResponseItem implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PreferenceResponseItem[] $PreferenceResponseItem
     */
    protected $PreferenceResponseItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PreferenceResponseItem[]
     */
    public function getPreferenceResponseItem()
    {
      return $this->PreferenceResponseItem;
    }

    /**
     * @param PreferenceResponseItem[] $PreferenceResponseItem
     * @return \App\models\ATSFlight\ArrayOfPreferenceResponseItem
     */
    public function setPreferenceResponseItem(array $PreferenceResponseItem = null)
    {
      $this->PreferenceResponseItem = $PreferenceResponseItem;
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
      return isset($this->PreferenceResponseItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PreferenceResponseItem
     */
    public function offsetGet($offset)
    {
      return $this->PreferenceResponseItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PreferenceResponseItem $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PreferenceResponseItem[] = $value;
      } else {
        $this->PreferenceResponseItem[$offset] = $value;
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
      unset($this->PreferenceResponseItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PreferenceResponseItem Return the current element
     */
    public function current()
    {
      return current($this->PreferenceResponseItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PreferenceResponseItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PreferenceResponseItem);
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
      reset($this->PreferenceResponseItem);
    }

    /**
     * Countable implementation
     *
     * @return PreferenceResponseItem Return count of elements
     */
    public function count()
    {
      return count($this->PreferenceResponseItem);
    }

}
