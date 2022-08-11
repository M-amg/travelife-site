<?php

namespace App\models\ATSFlight;

class ArrayOfWebCarrier implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var WebCarrier[] $WebCarrier
     */
    protected $WebCarrier = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return WebCarrier[]
     */
    public function getWebCarrier()
    {
      return $this->WebCarrier;
    }

    /**
     * @param WebCarrier[] $WebCarrier
     * @return \App\models\ATSFlight\ArrayOfWebCarrier
     */
    public function setWebCarrier(array $WebCarrier = null)
    {
      $this->WebCarrier = $WebCarrier;
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
      return isset($this->WebCarrier[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return WebCarrier
     */
    public function offsetGet($offset)
    {
      return $this->WebCarrier[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param WebCarrier $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->WebCarrier[] = $value;
      } else {
        $this->WebCarrier[$offset] = $value;
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
      unset($this->WebCarrier[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return WebCarrier Return the current element
     */
    public function current()
    {
      return current($this->WebCarrier);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->WebCarrier);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->WebCarrier);
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
      reset($this->WebCarrier);
    }

    /**
     * Countable implementation
     *
     * @return WebCarrier Return count of elements
     */
    public function count()
    {
      return count($this->WebCarrier);
    }

}
