<?php

namespace App\models\ATSFlight;

class ArrayOfRequestFareTypeFareBase implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RequestFareTypeFareBase[] $RequestFareTypeFareBase
     */
    protected $RequestFareTypeFareBase = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RequestFareTypeFareBase[]
     */
    public function getRequestFareTypeFareBase()
    {
      return $this->RequestFareTypeFareBase;
    }

    /**
     * @param RequestFareTypeFareBase[] $RequestFareTypeFareBase
     * @return \App\models\ATSFlight\ArrayOfRequestFareTypeFareBase
     */
    public function setRequestFareTypeFareBase(array $RequestFareTypeFareBase = null)
    {
      $this->RequestFareTypeFareBase = $RequestFareTypeFareBase;
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
      return isset($this->RequestFareTypeFareBase[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RequestFareTypeFareBase
     */
    public function offsetGet($offset)
    {
      return $this->RequestFareTypeFareBase[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RequestFareTypeFareBase $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RequestFareTypeFareBase[] = $value;
      } else {
        $this->RequestFareTypeFareBase[$offset] = $value;
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
      unset($this->RequestFareTypeFareBase[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RequestFareTypeFareBase Return the current element
     */
    public function current()
    {
      return current($this->RequestFareTypeFareBase);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RequestFareTypeFareBase);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RequestFareTypeFareBase);
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
      reset($this->RequestFareTypeFareBase);
    }

    /**
     * Countable implementation
     *
     * @return RequestFareTypeFareBase Return count of elements
     */
    public function count()
    {
      return count($this->RequestFareTypeFareBase);
    }

}
