<?php

namespace App\models\ATSFlight;

class ArrayOfDisplayRequestSegment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DisplayRequestSegment[] $DisplayRequestSegment
     */
    protected $DisplayRequestSegment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DisplayRequestSegment[]
     */
    public function getDisplayRequestSegment()
    {
      return $this->DisplayRequestSegment;
    }

    /**
     * @param DisplayRequestSegment[] $DisplayRequestSegment
     * @return \App\models\ATSFlight\ArrayOfDisplayRequestSegment
     */
    public function setDisplayRequestSegment(array $DisplayRequestSegment = null)
    {
      $this->DisplayRequestSegment = $DisplayRequestSegment;
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
      return isset($this->DisplayRequestSegment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DisplayRequestSegment
     */
    public function offsetGet($offset)
    {
      return $this->DisplayRequestSegment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DisplayRequestSegment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DisplayRequestSegment[] = $value;
      } else {
        $this->DisplayRequestSegment[$offset] = $value;
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
      unset($this->DisplayRequestSegment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DisplayRequestSegment Return the current element
     */
    public function current()
    {
      return current($this->DisplayRequestSegment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DisplayRequestSegment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DisplayRequestSegment);
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
      reset($this->DisplayRequestSegment);
    }

    /**
     * Countable implementation
     *
     * @return DisplayRequestSegment Return count of elements
     */
    public function count()
    {
      return count($this->DisplayRequestSegment);
    }

}
