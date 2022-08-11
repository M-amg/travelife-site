<?php

namespace App\models\ATSFlight;

class ArrayOfBookResponsePassenger implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BookResponsePassenger[] $BookResponsePassenger
     */
    protected $BookResponsePassenger = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BookResponsePassenger[]
     */
    public function getBookResponsePassenger()
    {
      return $this->BookResponsePassenger;
    }

    /**
     * @param BookResponsePassenger[] $BookResponsePassenger
     * @return \App\models\ATSFlight\ArrayOfBookResponsePassenger
     */
    public function setBookResponsePassenger(array $BookResponsePassenger = null)
    {
      $this->BookResponsePassenger = $BookResponsePassenger;
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
      return isset($this->BookResponsePassenger[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BookResponsePassenger
     */
    public function offsetGet($offset)
    {
      return $this->BookResponsePassenger[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BookResponsePassenger $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BookResponsePassenger[] = $value;
      } else {
        $this->BookResponsePassenger[$offset] = $value;
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
      unset($this->BookResponsePassenger[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BookResponsePassenger Return the current element
     */
    public function current()
    {
      return current($this->BookResponsePassenger);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BookResponsePassenger);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BookResponsePassenger);
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
      reset($this->BookResponsePassenger);
    }

    /**
     * Countable implementation
     *
     * @return BookResponsePassenger Return count of elements
     */
    public function count()
    {
      return count($this->BookResponsePassenger);
    }

}
