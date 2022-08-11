<?php

namespace App\models\ATSFlight;

class ArrayOfEnhancedRemark implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var EnhancedRemark[] $EnhancedRemark
     */
    protected $EnhancedRemark = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EnhancedRemark[]
     */
    public function getEnhancedRemark()
    {
      return $this->EnhancedRemark;
    }

    /**
     * @param EnhancedRemark[] $EnhancedRemark
     * @return \App\models\ATSFlight\ArrayOfEnhancedRemark
     */
    public function setEnhancedRemark(array $EnhancedRemark = null)
    {
      $this->EnhancedRemark = $EnhancedRemark;
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
      return isset($this->EnhancedRemark[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return EnhancedRemark
     */
    public function offsetGet($offset)
    {
      return $this->EnhancedRemark[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param EnhancedRemark $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->EnhancedRemark[] = $value;
      } else {
        $this->EnhancedRemark[$offset] = $value;
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
      unset($this->EnhancedRemark[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return EnhancedRemark Return the current element
     */
    public function current()
    {
      return current($this->EnhancedRemark);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->EnhancedRemark);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->EnhancedRemark);
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
      reset($this->EnhancedRemark);
    }

    /**
     * Countable implementation
     *
     * @return EnhancedRemark Return count of elements
     */
    public function count()
    {
      return count($this->EnhancedRemark);
    }

}
