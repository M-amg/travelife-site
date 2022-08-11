<?php

namespace App\models\ATSFlight;

class ArrayOfDetailsRequestSegment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DetailsRequestSegment[] $DetailsRequestSegment
     */
    protected $DetailsRequestSegment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DetailsRequestSegment[]
     */
    public function getDetailsRequestSegment()
    {
      return $this->DetailsRequestSegment;
    }

    /**
     * @param DetailsRequestSegment[] $DetailsRequestSegment
     * @return \App\models\ATSFlight\ArrayOfDetailsRequestSegment
     */
    public function setDetailsRequestSegment(array $DetailsRequestSegment = null)
    {
      $this->DetailsRequestSegment = $DetailsRequestSegment;
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
      return isset($this->DetailsRequestSegment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DetailsRequestSegment
     */
    public function offsetGet($offset)
    {
      return $this->DetailsRequestSegment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DetailsRequestSegment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DetailsRequestSegment[] = $value;
      } else {
        $this->DetailsRequestSegment[$offset] = $value;
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
      unset($this->DetailsRequestSegment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DetailsRequestSegment Return the current element
     */
    public function current()
    {
      return current($this->DetailsRequestSegment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DetailsRequestSegment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DetailsRequestSegment);
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
      reset($this->DetailsRequestSegment);
    }

    /**
     * Countable implementation
     *
     * @return DetailsRequestSegment Return count of elements
     */
    public function count()
    {
      return count($this->DetailsRequestSegment);
    }

}
