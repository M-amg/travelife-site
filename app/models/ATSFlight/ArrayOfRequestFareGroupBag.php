<?php

namespace App\models\ATSFlight;

class ArrayOfRequestFareGroupBag implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RequestFareGroupBag[] $RequestFareGroupBag
     */
    protected $RequestFareGroupBag = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RequestFareGroupBag[]
     */
    public function getRequestFareGroupBag()
    {
      return $this->RequestFareGroupBag;
    }

    /**
     * @param RequestFareGroupBag[] $RequestFareGroupBag
     * @return \App\models\ATSFlight\ArrayOfRequestFareGroupBag
     */
    public function setRequestFareGroupBag(array $RequestFareGroupBag = null)
    {
      $this->RequestFareGroupBag = $RequestFareGroupBag;
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
      return isset($this->RequestFareGroupBag[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RequestFareGroupBag
     */
    public function offsetGet($offset)
    {
      return $this->RequestFareGroupBag[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RequestFareGroupBag $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RequestFareGroupBag[] = $value;
      } else {
        $this->RequestFareGroupBag[$offset] = $value;
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
      unset($this->RequestFareGroupBag[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RequestFareGroupBag Return the current element
     */
    public function current()
    {
      return current($this->RequestFareGroupBag);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RequestFareGroupBag);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RequestFareGroupBag);
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
      reset($this->RequestFareGroupBag);
    }

    /**
     * Countable implementation
     *
     * @return RequestFareGroupBag Return count of elements
     */
    public function count()
    {
      return count($this->RequestFareGroupBag);
    }

}
