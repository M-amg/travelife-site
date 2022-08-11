<?php

namespace App\models\ATSFlight;

class ArrayOfProcessResponseSegment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProcessResponseSegment[] $ProcessResponseSegment
     */
    protected $ProcessResponseSegment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProcessResponseSegment[]
     */
    public function getProcessResponseSegment()
    {
      return $this->ProcessResponseSegment;
    }

    /**
     * @param ProcessResponseSegment[] $ProcessResponseSegment
     * @return \App\models\ATSFlight\ArrayOfProcessResponseSegment
     */
    public function setProcessResponseSegment(array $ProcessResponseSegment = null)
    {
      $this->ProcessResponseSegment = $ProcessResponseSegment;
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
      return isset($this->ProcessResponseSegment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProcessResponseSegment
     */
    public function offsetGet($offset)
    {
      return $this->ProcessResponseSegment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProcessResponseSegment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ProcessResponseSegment[] = $value;
      } else {
        $this->ProcessResponseSegment[$offset] = $value;
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
      unset($this->ProcessResponseSegment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProcessResponseSegment Return the current element
     */
    public function current()
    {
      return current($this->ProcessResponseSegment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProcessResponseSegment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProcessResponseSegment);
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
      reset($this->ProcessResponseSegment);
    }

    /**
     * Countable implementation
     *
     * @return ProcessResponseSegment Return count of elements
     */
    public function count()
    {
      return count($this->ProcessResponseSegment);
    }

}
