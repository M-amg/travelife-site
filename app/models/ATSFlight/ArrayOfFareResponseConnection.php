<?php

namespace App\models\ATSFlight;

class ArrayOfFareResponseConnection implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var FareResponseConnection[] $FareResponseConnection
     */
    protected $FareResponseConnection = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FareResponseConnection[]
     */
    public function getFareResponseConnection()
    {
      return $this->FareResponseConnection;
    }

    /**
     * @param FareResponseConnection[] $FareResponseConnection
     * @return \App\models\ATSFlight\ArrayOfFareResponseConnection
     */
    public function setFareResponseConnection(array $FareResponseConnection = null)
    {
      $this->FareResponseConnection = $FareResponseConnection;
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
      return isset($this->FareResponseConnection[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return FareResponseConnection
     */
    public function offsetGet($offset)
    {
      return $this->FareResponseConnection[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param FareResponseConnection $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->FareResponseConnection[] = $value;
      } else {
        $this->FareResponseConnection[$offset] = $value;
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
      unset($this->FareResponseConnection[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return FareResponseConnection Return the current element
     */
    public function current()
    {
      return current($this->FareResponseConnection);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->FareResponseConnection);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->FareResponseConnection);
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
      reset($this->FareResponseConnection);
    }

    /**
     * Countable implementation
     *
     * @return FareResponseConnection Return count of elements
     */
    public function count()
    {
      return count($this->FareResponseConnection);
    }

}
