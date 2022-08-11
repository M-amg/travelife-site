<?php

namespace App\models\ATSFlight;

class ArrayOfBookRequestSegment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BookRequestSegment[] $BookRequestSegment
     */
    protected $BookRequestSegment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BookRequestSegment[]
     */
    public function getBookRequestSegment()
    {
      return $this->BookRequestSegment;
    }

    /**
     * @param BookRequestSegment[] $BookRequestSegment
     * @return \App\models\ATSFlight\ArrayOfBookRequestSegment
     */
    public function setBookRequestSegment(array $BookRequestSegment = null)
    {
      $this->BookRequestSegment = $BookRequestSegment;
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
      return isset($this->BookRequestSegment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BookRequestSegment
     */
    public function offsetGet($offset)
    {
      return $this->BookRequestSegment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BookRequestSegment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BookRequestSegment[] = $value;
      } else {
        $this->BookRequestSegment[$offset] = $value;
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
      unset($this->BookRequestSegment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BookRequestSegment Return the current element
     */
    public function current()
    {
      return current($this->BookRequestSegment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BookRequestSegment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BookRequestSegment);
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
      reset($this->BookRequestSegment);
    }

    /**
     * Countable implementation
     *
     * @return BookRequestSegment Return count of elements
     */
    public function count()
    {
      return count($this->BookRequestSegment);
    }

}
