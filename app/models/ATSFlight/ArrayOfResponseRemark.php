<?php

namespace App\models\ATSFlight;

class ArrayOfResponseRemark implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ResponseRemark[] $ResponseRemark
     */
    protected $ResponseRemark = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ResponseRemark[]
     */
    public function getResponseRemark()
    {
      return $this->ResponseRemark;
    }

    /**
     * @param ResponseRemark[] $ResponseRemark
     * @return \App\models\ATSFlight\ArrayOfResponseRemark
     */
    public function setResponseRemark(array $ResponseRemark = null)
    {
      $this->ResponseRemark = $ResponseRemark;
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
      return isset($this->ResponseRemark[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ResponseRemark
     */
    public function offsetGet($offset)
    {
      return $this->ResponseRemark[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ResponseRemark $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ResponseRemark[] = $value;
      } else {
        $this->ResponseRemark[$offset] = $value;
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
      unset($this->ResponseRemark[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ResponseRemark Return the current element
     */
    public function current()
    {
      return current($this->ResponseRemark);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ResponseRemark);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ResponseRemark);
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
      reset($this->ResponseRemark);
    }

    /**
     * Countable implementation
     *
     * @return ResponseRemark Return count of elements
     */
    public function count()
    {
      return count($this->ResponseRemark);
    }

}
