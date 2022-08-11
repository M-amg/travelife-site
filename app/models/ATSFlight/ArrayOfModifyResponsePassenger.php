<?php

namespace App\models\ATSFlight;

class ArrayOfModifyResponsePassenger implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ModifyResponsePassenger[] $ModifyResponsePassenger
     */
    protected $ModifyResponsePassenger = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ModifyResponsePassenger[]
     */
    public function getModifyResponsePassenger()
    {
      return $this->ModifyResponsePassenger;
    }

    /**
     * @param ModifyResponsePassenger[] $ModifyResponsePassenger
     * @return \App\models\ATSFlight\ArrayOfModifyResponsePassenger
     */
    public function setModifyResponsePassenger(array $ModifyResponsePassenger = null)
    {
      $this->ModifyResponsePassenger = $ModifyResponsePassenger;
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
      return isset($this->ModifyResponsePassenger[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ModifyResponsePassenger
     */
    public function offsetGet($offset)
    {
      return $this->ModifyResponsePassenger[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ModifyResponsePassenger $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ModifyResponsePassenger[] = $value;
      } else {
        $this->ModifyResponsePassenger[$offset] = $value;
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
      unset($this->ModifyResponsePassenger[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ModifyResponsePassenger Return the current element
     */
    public function current()
    {
      return current($this->ModifyResponsePassenger);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ModifyResponsePassenger);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ModifyResponsePassenger);
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
      reset($this->ModifyResponsePassenger);
    }

    /**
     * Countable implementation
     *
     * @return ModifyResponsePassenger Return count of elements
     */
    public function count()
    {
      return count($this->ModifyResponsePassenger);
    }

}
