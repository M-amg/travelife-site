<?php

namespace App\models\ATSFlight;

class ArrayOfModifyRequestPassenger implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ModifyRequestPassenger[] $ModifyRequestPassenger
     */
    protected $ModifyRequestPassenger = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ModifyRequestPassenger[]
     */
    public function getModifyRequestPassenger()
    {
      return $this->ModifyRequestPassenger;
    }

    /**
     * @param ModifyRequestPassenger[] $ModifyRequestPassenger
     * @return \App\models\ATSFlight\ArrayOfModifyRequestPassenger
     */
    public function setModifyRequestPassenger(array $ModifyRequestPassenger = null)
    {
      $this->ModifyRequestPassenger = $ModifyRequestPassenger;
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
      return isset($this->ModifyRequestPassenger[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ModifyRequestPassenger
     */
    public function offsetGet($offset)
    {
      return $this->ModifyRequestPassenger[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ModifyRequestPassenger $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ModifyRequestPassenger[] = $value;
      } else {
        $this->ModifyRequestPassenger[$offset] = $value;
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
      unset($this->ModifyRequestPassenger[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ModifyRequestPassenger Return the current element
     */
    public function current()
    {
      return current($this->ModifyRequestPassenger);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ModifyRequestPassenger);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ModifyRequestPassenger);
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
      reset($this->ModifyRequestPassenger);
    }

    /**
     * Countable implementation
     *
     * @return ModifyRequestPassenger Return count of elements
     */
    public function count()
    {
      return count($this->ModifyRequestPassenger);
    }

}
