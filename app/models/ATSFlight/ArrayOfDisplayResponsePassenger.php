<?php

namespace App\models\ATSFlight;

class ArrayOfDisplayResponsePassenger implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DisplayResponsePassenger[] $DisplayResponsePassenger
     */
    protected $DisplayResponsePassenger = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DisplayResponsePassenger[]
     */
    public function getDisplayResponsePassenger()
    {
      return $this->DisplayResponsePassenger;
    }

    /**
     * @param DisplayResponsePassenger[] $DisplayResponsePassenger
     * @return \App\models\ATSFlight\ArrayOfDisplayResponsePassenger
     */
    public function setDisplayResponsePassenger(array $DisplayResponsePassenger = null)
    {
      $this->DisplayResponsePassenger = $DisplayResponsePassenger;
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
      return isset($this->DisplayResponsePassenger[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DisplayResponsePassenger
     */
    public function offsetGet($offset)
    {
      return $this->DisplayResponsePassenger[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DisplayResponsePassenger $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DisplayResponsePassenger[] = $value;
      } else {
        $this->DisplayResponsePassenger[$offset] = $value;
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
      unset($this->DisplayResponsePassenger[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DisplayResponsePassenger Return the current element
     */
    public function current()
    {
      return current($this->DisplayResponsePassenger);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DisplayResponsePassenger);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DisplayResponsePassenger);
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
      reset($this->DisplayResponsePassenger);
    }

    /**
     * Countable implementation
     *
     * @return DisplayResponsePassenger Return count of elements
     */
    public function count()
    {
      return count($this->DisplayResponsePassenger);
    }

}
