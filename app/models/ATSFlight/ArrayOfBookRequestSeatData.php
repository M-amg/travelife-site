<?php

namespace App\models\ATSFlight;

class ArrayOfBookRequestSeatData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BookRequestSeatData[] $BookRequestSeatData
     */
    protected $BookRequestSeatData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BookRequestSeatData[]
     */
    public function getBookRequestSeatData()
    {
      return $this->BookRequestSeatData;
    }

    /**
     * @param BookRequestSeatData[] $BookRequestSeatData
     * @return \App\models\ATSFlight\ArrayOfBookRequestSeatData
     */
    public function setBookRequestSeatData(array $BookRequestSeatData = null)
    {
      $this->BookRequestSeatData = $BookRequestSeatData;
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
      return isset($this->BookRequestSeatData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BookRequestSeatData
     */
    public function offsetGet($offset)
    {
      return $this->BookRequestSeatData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BookRequestSeatData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BookRequestSeatData[] = $value;
      } else {
        $this->BookRequestSeatData[$offset] = $value;
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
      unset($this->BookRequestSeatData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BookRequestSeatData Return the current element
     */
    public function current()
    {
      return current($this->BookRequestSeatData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BookRequestSeatData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BookRequestSeatData);
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
      reset($this->BookRequestSeatData);
    }

    /**
     * Countable implementation
     *
     * @return BookRequestSeatData Return count of elements
     */
    public function count()
    {
      return count($this->BookRequestSeatData);
    }

}
