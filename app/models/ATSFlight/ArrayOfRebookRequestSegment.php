<?php

namespace App\models\ATSFlight;

class ArrayOfRebookRequestSegment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RebookRequestSegment[] $RebookRequestSegment
     */
    protected $RebookRequestSegment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RebookRequestSegment[]
     */
    public function getRebookRequestSegment()
    {
      return $this->RebookRequestSegment;
    }

    /**
     * @param RebookRequestSegment[] $RebookRequestSegment
     * @return \App\models\ATSFlight\ArrayOfRebookRequestSegment
     */
    public function setRebookRequestSegment(array $RebookRequestSegment = null)
    {
      $this->RebookRequestSegment = $RebookRequestSegment;
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
      return isset($this->RebookRequestSegment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RebookRequestSegment
     */
    public function offsetGet($offset)
    {
      return $this->RebookRequestSegment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RebookRequestSegment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RebookRequestSegment[] = $value;
      } else {
        $this->RebookRequestSegment[$offset] = $value;
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
      unset($this->RebookRequestSegment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RebookRequestSegment Return the current element
     */
    public function current()
    {
      return current($this->RebookRequestSegment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RebookRequestSegment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RebookRequestSegment);
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
      reset($this->RebookRequestSegment);
    }

    /**
     * Countable implementation
     *
     * @return RebookRequestSegment Return count of elements
     */
    public function count()
    {
      return count($this->RebookRequestSegment);
    }

}
