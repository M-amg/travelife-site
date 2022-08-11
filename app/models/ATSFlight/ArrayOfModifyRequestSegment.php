<?php

namespace App\models\ATSFlight;

class ArrayOfModifyRequestSegment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ModifyRequestSegment[] $ModifyRequestSegment
     */
    protected $ModifyRequestSegment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ModifyRequestSegment[]
     */
    public function getModifyRequestSegment()
    {
      return $this->ModifyRequestSegment;
    }

    /**
     * @param ModifyRequestSegment[] $ModifyRequestSegment
     * @return \App\models\ATSFlight\ArrayOfModifyRequestSegment
     */
    public function setModifyRequestSegment(array $ModifyRequestSegment = null)
    {
      $this->ModifyRequestSegment = $ModifyRequestSegment;
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
      return isset($this->ModifyRequestSegment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ModifyRequestSegment
     */
    public function offsetGet($offset)
    {
      return $this->ModifyRequestSegment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ModifyRequestSegment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ModifyRequestSegment[] = $value;
      } else {
        $this->ModifyRequestSegment[$offset] = $value;
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
      unset($this->ModifyRequestSegment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ModifyRequestSegment Return the current element
     */
    public function current()
    {
      return current($this->ModifyRequestSegment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ModifyRequestSegment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ModifyRequestSegment);
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
      reset($this->ModifyRequestSegment);
    }

    /**
     * Countable implementation
     *
     * @return ModifyRequestSegment Return count of elements
     */
    public function count()
    {
      return count($this->ModifyRequestSegment);
    }

}
