<?php

namespace App\models\ATSFlight;

class ArrayOfBookRequestOSI implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BookRequestOSI[] $BookRequestOSI
     */
    protected $BookRequestOSI = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BookRequestOSI[]
     */
    public function getBookRequestOSI()
    {
      return $this->BookRequestOSI;
    }

    /**
     * @param BookRequestOSI[] $BookRequestOSI
     * @return \App\models\ATSFlight\ArrayOfBookRequestOSI
     */
    public function setBookRequestOSI(array $BookRequestOSI = null)
    {
      $this->BookRequestOSI = $BookRequestOSI;
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
      return isset($this->BookRequestOSI[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BookRequestOSI
     */
    public function offsetGet($offset)
    {
      return $this->BookRequestOSI[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BookRequestOSI $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BookRequestOSI[] = $value;
      } else {
        $this->BookRequestOSI[$offset] = $value;
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
      unset($this->BookRequestOSI[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BookRequestOSI Return the current element
     */
    public function current()
    {
      return current($this->BookRequestOSI);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BookRequestOSI);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BookRequestOSI);
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
      reset($this->BookRequestOSI);
    }

    /**
     * Countable implementation
     *
     * @return BookRequestOSI Return count of elements
     */
    public function count()
    {
      return count($this->BookRequestOSI);
    }

}
