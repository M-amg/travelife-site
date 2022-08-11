<?php

namespace App\models\ATSFlight;

class ArrayOfModifyResponseRebookSementStatus implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ModifyResponseRebookSementStatus[] $ModifyResponseRebookSementStatus
     */
    protected $ModifyResponseRebookSementStatus = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ModifyResponseRebookSementStatus[]
     */
    public function getModifyResponseRebookSementStatus()
    {
      return $this->ModifyResponseRebookSementStatus;
    }

    /**
     * @param ModifyResponseRebookSementStatus[] $ModifyResponseRebookSementStatus
     * @return \App\models\ATSFlight\ArrayOfModifyResponseRebookSementStatus
     */
    public function setModifyResponseRebookSementStatus(array $ModifyResponseRebookSementStatus = null)
    {
      $this->ModifyResponseRebookSementStatus = $ModifyResponseRebookSementStatus;
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
      return isset($this->ModifyResponseRebookSementStatus[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ModifyResponseRebookSementStatus
     */
    public function offsetGet($offset)
    {
      return $this->ModifyResponseRebookSementStatus[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ModifyResponseRebookSementStatus $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ModifyResponseRebookSementStatus[] = $value;
      } else {
        $this->ModifyResponseRebookSementStatus[$offset] = $value;
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
      unset($this->ModifyResponseRebookSementStatus[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ModifyResponseRebookSementStatus Return the current element
     */
    public function current()
    {
      return current($this->ModifyResponseRebookSementStatus);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ModifyResponseRebookSementStatus);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ModifyResponseRebookSementStatus);
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
      reset($this->ModifyResponseRebookSementStatus);
    }

    /**
     * Countable implementation
     *
     * @return ModifyResponseRebookSementStatus Return count of elements
     */
    public function count()
    {
      return count($this->ModifyResponseRebookSementStatus);
    }

}
