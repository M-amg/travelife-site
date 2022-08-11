<?php

namespace App\models\ATSFlight;

class ArrayOfResponseSeat implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ResponseSeat[] $ResponseSeat
     */
    protected $ResponseSeat = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ResponseSeat[]
     */
    public function getResponseSeat()
    {
      return $this->ResponseSeat;
    }

    /**
     * @param ResponseSeat[] $ResponseSeat
     * @return \App\models\ATSFlight\ArrayOfResponseSeat
     */
    public function setResponseSeat(array $ResponseSeat = null)
    {
      $this->ResponseSeat = $ResponseSeat;
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
      return isset($this->ResponseSeat[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ResponseSeat
     */
    public function offsetGet($offset)
    {
      return $this->ResponseSeat[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ResponseSeat $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ResponseSeat[] = $value;
      } else {
        $this->ResponseSeat[$offset] = $value;
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
      unset($this->ResponseSeat[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ResponseSeat Return the current element
     */
    public function current()
    {
      return current($this->ResponseSeat);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ResponseSeat);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ResponseSeat);
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
      reset($this->ResponseSeat);
    }

    /**
     * Countable implementation
     *
     * @return ResponseSeat Return count of elements
     */
    public function count()
    {
      return count($this->ResponseSeat);
    }

}
