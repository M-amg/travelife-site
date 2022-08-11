<?php

namespace App\models\ATSFlight;

class ArrayOfBookRequestRemark implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BookRequestRemark[] $BookRequestRemark
     */
    protected $BookRequestRemark = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BookRequestRemark[]
     */
    public function getBookRequestRemark()
    {
      return $this->BookRequestRemark;
    }

    /**
     * @param BookRequestRemark[] $BookRequestRemark
     * @return \App\models\ATSFlight\ArrayOfBookRequestRemark
     */
    public function setBookRequestRemark(array $BookRequestRemark = null)
    {
      $this->BookRequestRemark = $BookRequestRemark;
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
      return isset($this->BookRequestRemark[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BookRequestRemark
     */
    public function offsetGet($offset)
    {
      return $this->BookRequestRemark[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BookRequestRemark $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BookRequestRemark[] = $value;
      } else {
        $this->BookRequestRemark[$offset] = $value;
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
      unset($this->BookRequestRemark[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BookRequestRemark Return the current element
     */
    public function current()
    {
      return current($this->BookRequestRemark);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BookRequestRemark);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BookRequestRemark);
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
      reset($this->BookRequestRemark);
    }

    /**
     * Countable implementation
     *
     * @return BookRequestRemark Return count of elements
     */
    public function count()
    {
      return count($this->BookRequestRemark);
    }

}
