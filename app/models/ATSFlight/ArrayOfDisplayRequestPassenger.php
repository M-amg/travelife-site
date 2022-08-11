<?php

namespace App\models\ATSFlight;

class ArrayOfDisplayRequestPassenger implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DisplayRequestPassenger[] $DisplayRequestPassenger
     */
    protected $DisplayRequestPassenger = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DisplayRequestPassenger[]
     */
    public function getDisplayRequestPassenger()
    {
      return $this->DisplayRequestPassenger;
    }

    /**
     * @param DisplayRequestPassenger[] $DisplayRequestPassenger
     * @return \App\models\ATSFlight\ArrayOfDisplayRequestPassenger
     */
    public function setDisplayRequestPassenger(array $DisplayRequestPassenger = null)
    {
      $this->DisplayRequestPassenger = $DisplayRequestPassenger;
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
      return isset($this->DisplayRequestPassenger[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DisplayRequestPassenger
     */
    public function offsetGet($offset)
    {
      return $this->DisplayRequestPassenger[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DisplayRequestPassenger $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DisplayRequestPassenger[] = $value;
      } else {
        $this->DisplayRequestPassenger[$offset] = $value;
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
      unset($this->DisplayRequestPassenger[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DisplayRequestPassenger Return the current element
     */
    public function current()
    {
      return current($this->DisplayRequestPassenger);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DisplayRequestPassenger);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DisplayRequestPassenger);
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
      reset($this->DisplayRequestPassenger);
    }

    /**
     * Countable implementation
     *
     * @return DisplayRequestPassenger Return count of elements
     */
    public function count()
    {
      return count($this->DisplayRequestPassenger);
    }

}
