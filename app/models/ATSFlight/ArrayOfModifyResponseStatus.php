<?php

namespace App\models\ATSFlight;

class ArrayOfModifyResponseStatus implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ModifyResponseStatus[] $ModifyResponseStatus
     */
    protected $ModifyResponseStatus = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ModifyResponseStatus[]
     */
    public function getModifyResponseStatus()
    {
      return $this->ModifyResponseStatus;
    }

    /**
     * @param ModifyResponseStatus[] $ModifyResponseStatus
     * @return \App\models\ATSFlight\ArrayOfModifyResponseStatus
     */
    public function setModifyResponseStatus(array $ModifyResponseStatus = null)
    {
      $this->ModifyResponseStatus = $ModifyResponseStatus;
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
      return isset($this->ModifyResponseStatus[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ModifyResponseStatus
     */
    public function offsetGet($offset)
    {
      return $this->ModifyResponseStatus[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ModifyResponseStatus $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ModifyResponseStatus[] = $value;
      } else {
        $this->ModifyResponseStatus[$offset] = $value;
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
      unset($this->ModifyResponseStatus[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ModifyResponseStatus Return the current element
     */
    public function current()
    {
      return current($this->ModifyResponseStatus);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ModifyResponseStatus);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ModifyResponseStatus);
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
      reset($this->ModifyResponseStatus);
    }

    /**
     * Countable implementation
     *
     * @return ModifyResponseStatus Return count of elements
     */
    public function count()
    {
      return count($this->ModifyResponseStatus);
    }

}
