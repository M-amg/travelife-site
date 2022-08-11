<?php

namespace App\models\ATSFlight;

class ArrayOfModifyResponseSeats implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ModifyResponseSeats[] $ModifyResponseSeats
     */
    protected $ModifyResponseSeats = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ModifyResponseSeats[]
     */
    public function getModifyResponseSeats()
    {
      return $this->ModifyResponseSeats;
    }

    /**
     * @param ModifyResponseSeats[] $ModifyResponseSeats
     * @return \App\models\ATSFlight\ArrayOfModifyResponseSeats
     */
    public function setModifyResponseSeats(array $ModifyResponseSeats = null)
    {
      $this->ModifyResponseSeats = $ModifyResponseSeats;
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
      return isset($this->ModifyResponseSeats[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ModifyResponseSeats
     */
    public function offsetGet($offset)
    {
      return $this->ModifyResponseSeats[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ModifyResponseSeats $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ModifyResponseSeats[] = $value;
      } else {
        $this->ModifyResponseSeats[$offset] = $value;
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
      unset($this->ModifyResponseSeats[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ModifyResponseSeats Return the current element
     */
    public function current()
    {
      return current($this->ModifyResponseSeats);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ModifyResponseSeats);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ModifyResponseSeats);
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
      reset($this->ModifyResponseSeats);
    }

    /**
     * Countable implementation
     *
     * @return ModifyResponseSeats Return count of elements
     */
    public function count()
    {
      return count($this->ModifyResponseSeats);
    }

}
