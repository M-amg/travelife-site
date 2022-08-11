<?php

namespace App\models\ATSFlight;

class ArrayOfBookResponseSegment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BookResponseSegment[] $BookResponseSegment
     */
    protected $BookResponseSegment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BookResponseSegment[]
     */
    public function getBookResponseSegment()
    {
      return $this->BookResponseSegment;
    }

    /**
     * @param BookResponseSegment[] $BookResponseSegment
     * @return \App\models\ATSFlight\ArrayOfBookResponseSegment
     */
    public function setBookResponseSegment(array $BookResponseSegment = null)
    {
      $this->BookResponseSegment = $BookResponseSegment;
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
      return isset($this->BookResponseSegment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BookResponseSegment
     */
    public function offsetGet($offset)
    {
      return $this->BookResponseSegment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BookResponseSegment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BookResponseSegment[] = $value;
      } else {
        $this->BookResponseSegment[$offset] = $value;
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
      unset($this->BookResponseSegment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BookResponseSegment Return the current element
     */
    public function current()
    {
      return current($this->BookResponseSegment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BookResponseSegment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BookResponseSegment);
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
      reset($this->BookResponseSegment);
    }

    /**
     * Countable implementation
     *
     * @return BookResponseSegment Return count of elements
     */
    public function count()
    {
      return count($this->BookResponseSegment);
    }

}
