<?php

namespace App\models\ATSFlight;

class ArrayOfCommonResponsePassenger implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CommonResponsePassenger[] $CommonResponsePassenger
     */
    protected $CommonResponsePassenger = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CommonResponsePassenger[]
     */
    public function getCommonResponsePassenger()
    {
      return $this->CommonResponsePassenger;
    }

    /**
     * @param CommonResponsePassenger[] $CommonResponsePassenger
     * @return \App\models\ATSFlight\ArrayOfCommonResponsePassenger
     */
    public function setCommonResponsePassenger(array $CommonResponsePassenger = null)
    {
      $this->CommonResponsePassenger = $CommonResponsePassenger;
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
      return isset($this->CommonResponsePassenger[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CommonResponsePassenger
     */
    public function offsetGet($offset)
    {
      return $this->CommonResponsePassenger[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CommonResponsePassenger $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CommonResponsePassenger[] = $value;
      } else {
        $this->CommonResponsePassenger[$offset] = $value;
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
      unset($this->CommonResponsePassenger[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CommonResponsePassenger Return the current element
     */
    public function current()
    {
      return current($this->CommonResponsePassenger);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CommonResponsePassenger);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CommonResponsePassenger);
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
      reset($this->CommonResponsePassenger);
    }

    /**
     * Countable implementation
     *
     * @return CommonResponsePassenger Return count of elements
     */
    public function count()
    {
      return count($this->CommonResponsePassenger);
    }

}
