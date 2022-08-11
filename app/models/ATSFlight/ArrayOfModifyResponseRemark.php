<?php

namespace App\models\ATSFlight;

class ArrayOfModifyResponseRemark implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ModifyResponseRemark[] $ModifyResponseRemark
     */
    protected $ModifyResponseRemark = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ModifyResponseRemark[]
     */
    public function getModifyResponseRemark()
    {
      return $this->ModifyResponseRemark;
    }

    /**
     * @param ModifyResponseRemark[] $ModifyResponseRemark
     * @return \App\models\ATSFlight\ArrayOfModifyResponseRemark
     */
    public function setModifyResponseRemark(array $ModifyResponseRemark = null)
    {
      $this->ModifyResponseRemark = $ModifyResponseRemark;
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
      return isset($this->ModifyResponseRemark[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ModifyResponseRemark
     */
    public function offsetGet($offset)
    {
      return $this->ModifyResponseRemark[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ModifyResponseRemark $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ModifyResponseRemark[] = $value;
      } else {
        $this->ModifyResponseRemark[$offset] = $value;
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
      unset($this->ModifyResponseRemark[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ModifyResponseRemark Return the current element
     */
    public function current()
    {
      return current($this->ModifyResponseRemark);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ModifyResponseRemark);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ModifyResponseRemark);
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
      reset($this->ModifyResponseRemark);
    }

    /**
     * Countable implementation
     *
     * @return ModifyResponseRemark Return count of elements
     */
    public function count()
    {
      return count($this->ModifyResponseRemark);
    }

}
