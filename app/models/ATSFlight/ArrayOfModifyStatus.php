<?php

namespace App\models\ATSFlight;

class ArrayOfModifyStatus implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ModifyStatus[] $ModifyStatus
     */
    protected $ModifyStatus = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ModifyStatus[]
     */
    public function getModifyStatus()
    {
      return $this->ModifyStatus;
    }

    /**
     * @param ModifyStatus[] $ModifyStatus
     * @return \App\models\ATSFlight\ArrayOfModifyStatus
     */
    public function setModifyStatus(array $ModifyStatus = null)
    {
      $this->ModifyStatus = $ModifyStatus;
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
      return isset($this->ModifyStatus[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ModifyStatus
     */
    public function offsetGet($offset)
    {
      return $this->ModifyStatus[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ModifyStatus $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ModifyStatus[] = $value;
      } else {
        $this->ModifyStatus[$offset] = $value;
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
      unset($this->ModifyStatus[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ModifyStatus Return the current element
     */
    public function current()
    {
      return current($this->ModifyStatus);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ModifyStatus);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ModifyStatus);
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
      reset($this->ModifyStatus);
    }

    /**
     * Countable implementation
     *
     * @return ModifyStatus Return count of elements
     */
    public function count()
    {
      return count($this->ModifyStatus);
    }

}
