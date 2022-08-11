<?php

namespace App\models\ATSFlight;

class ArrayOfRaisedException implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RaisedException[] $RaisedException
     */
    protected $RaisedException = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RaisedException[]
     */
    public function getRaisedException()
    {
      return $this->RaisedException;
    }

    /**
     * @param RaisedException[] $RaisedException
     * @return \App\models\ATSFlight\ArrayOfRaisedException
     */
    public function setRaisedException(array $RaisedException = null)
    {
      $this->RaisedException = $RaisedException;
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
      return isset($this->RaisedException[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RaisedException
     */
    public function offsetGet($offset)
    {
      return $this->RaisedException[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RaisedException $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RaisedException[] = $value;
      } else {
        $this->RaisedException[$offset] = $value;
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
      unset($this->RaisedException[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RaisedException Return the current element
     */
    public function current()
    {
      return current($this->RaisedException);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RaisedException);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RaisedException);
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
      reset($this->RaisedException);
    }

    /**
     * Countable implementation
     *
     * @return RaisedException Return count of elements
     */
    public function count()
    {
      return count($this->RaisedException);
    }

}
