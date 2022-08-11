<?php

namespace App\models\ATSFlight;

class ArrayOfBookRequestPassenger implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BookRequestPassenger[] $BookRequestPassenger
     */
    protected $BookRequestPassenger = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BookRequestPassenger[]
     */
    public function getBookRequestPassenger()
    {
      return $this->BookRequestPassenger;
    }

    /**
     * @param BookRequestPassenger[] $BookRequestPassenger
     * @return \App\models\ATSFlight\ArrayOfBookRequestPassenger
     */
    public function setBookRequestPassenger(array $BookRequestPassenger = null)
    {
      $this->BookRequestPassenger = $BookRequestPassenger;
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
      return isset($this->BookRequestPassenger[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BookRequestPassenger
     */
    public function offsetGet($offset)
    {
      return $this->BookRequestPassenger[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BookRequestPassenger $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BookRequestPassenger[] = $value;
      } else {
        $this->BookRequestPassenger[$offset] = $value;
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
      unset($this->BookRequestPassenger[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BookRequestPassenger Return the current element
     */
    public function current()
    {
      return current($this->BookRequestPassenger);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BookRequestPassenger);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BookRequestPassenger);
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
      reset($this->BookRequestPassenger);
    }

    /**
     * Countable implementation
     *
     * @return BookRequestPassenger Return count of elements
     */
    public function count()
    {
      return count($this->BookRequestPassenger);
    }

}
