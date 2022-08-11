<?php

namespace App\models\ATSFlight;

class ArrayOfDisplayRequestCarrier implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DisplayRequestCarrier[] $DisplayRequestCarrier
     */
    protected $DisplayRequestCarrier = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DisplayRequestCarrier[]
     */
    public function getDisplayRequestCarrier()
    {
      return $this->DisplayRequestCarrier;
    }

    /**
     * @param DisplayRequestCarrier[] $DisplayRequestCarrier
     * @return \App\models\ATSFlight\ArrayOfDisplayRequestCarrier
     */
    public function setDisplayRequestCarrier(array $DisplayRequestCarrier = null)
    {
      $this->DisplayRequestCarrier = $DisplayRequestCarrier;
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
      return isset($this->DisplayRequestCarrier[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DisplayRequestCarrier
     */
    public function offsetGet($offset)
    {
      return $this->DisplayRequestCarrier[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DisplayRequestCarrier $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DisplayRequestCarrier[] = $value;
      } else {
        $this->DisplayRequestCarrier[$offset] = $value;
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
      unset($this->DisplayRequestCarrier[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DisplayRequestCarrier Return the current element
     */
    public function current()
    {
      return current($this->DisplayRequestCarrier);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DisplayRequestCarrier);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DisplayRequestCarrier);
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
      reset($this->DisplayRequestCarrier);
    }

    /**
     * Countable implementation
     *
     * @return DisplayRequestCarrier Return count of elements
     */
    public function count()
    {
      return count($this->DisplayRequestCarrier);
    }

}
