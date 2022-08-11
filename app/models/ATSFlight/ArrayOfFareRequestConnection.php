<?php

namespace App\models\ATSFlight;

class ArrayOfFareRequestConnection implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var FareRequestConnection[] $FareRequestConnection
     */
    protected $FareRequestConnection = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FareRequestConnection[]
     */
    public function getFareRequestConnection()
    {
      return $this->FareRequestConnection;
    }

    /**
     * @param FareRequestConnection[] $FareRequestConnection
     * @return \App\models\ATSFlight\ArrayOfFareRequestConnection
     */
    public function setFareRequestConnection(array $FareRequestConnection = null)
    {
      $this->FareRequestConnection = $FareRequestConnection;
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
      return isset($this->FareRequestConnection[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return FareRequestConnection
     */
    public function offsetGet($offset)
    {
      return $this->FareRequestConnection[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param FareRequestConnection $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->FareRequestConnection[] = $value;
      } else {
        $this->FareRequestConnection[$offset] = $value;
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
      unset($this->FareRequestConnection[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return FareRequestConnection Return the current element
     */
    public function current()
    {
      return current($this->FareRequestConnection);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->FareRequestConnection);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->FareRequestConnection);
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
      reset($this->FareRequestConnection);
    }

    /**
     * Countable implementation
     *
     * @return FareRequestConnection Return count of elements
     */
    public function count()
    {
      return count($this->FareRequestConnection);
    }

}
