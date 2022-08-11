<?php

namespace App\models\ATSFlight;

class ArrayOfPNRResponseSegment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PNRResponseSegment[] $PNRResponseSegment
     */
    protected $PNRResponseSegment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PNRResponseSegment[]
     */
    public function getPNRResponseSegment()
    {
      return $this->PNRResponseSegment;
    }

    /**
     * @param PNRResponseSegment[] $PNRResponseSegment
     * @return \App\models\ATSFlight\ArrayOfPNRResponseSegment
     */
    public function setPNRResponseSegment(array $PNRResponseSegment = null)
    {
      $this->PNRResponseSegment = $PNRResponseSegment;
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
      return isset($this->PNRResponseSegment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PNRResponseSegment
     */
    public function offsetGet($offset)
    {
      return $this->PNRResponseSegment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PNRResponseSegment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PNRResponseSegment[] = $value;
      } else {
        $this->PNRResponseSegment[$offset] = $value;
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
      unset($this->PNRResponseSegment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PNRResponseSegment Return the current element
     */
    public function current()
    {
      return current($this->PNRResponseSegment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PNRResponseSegment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PNRResponseSegment);
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
      reset($this->PNRResponseSegment);
    }

    /**
     * Countable implementation
     *
     * @return PNRResponseSegment Return count of elements
     */
    public function count()
    {
      return count($this->PNRResponseSegment);
    }

}
