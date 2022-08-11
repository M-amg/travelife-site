<?php

namespace App\models\ATSFlight;

class ArrayOfDisplayRequestLeg implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DisplayRequestLeg[] $DisplayRequestLeg
     */
    protected $DisplayRequestLeg = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DisplayRequestLeg[]
     */
    public function getDisplayRequestLeg()
    {
      return $this->DisplayRequestLeg;
    }

    /**
     * @param DisplayRequestLeg[] $DisplayRequestLeg
     * @return \App\models\ATSFlight\ArrayOfDisplayRequestLeg
     */
    public function setDisplayRequestLeg(array $DisplayRequestLeg = null)
    {
      $this->DisplayRequestLeg = $DisplayRequestLeg;
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
      return isset($this->DisplayRequestLeg[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DisplayRequestLeg
     */
    public function offsetGet($offset)
    {
      return $this->DisplayRequestLeg[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DisplayRequestLeg $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DisplayRequestLeg[] = $value;
      } else {
        $this->DisplayRequestLeg[$offset] = $value;
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
      unset($this->DisplayRequestLeg[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DisplayRequestLeg Return the current element
     */
    public function current()
    {
      return current($this->DisplayRequestLeg);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DisplayRequestLeg);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DisplayRequestLeg);
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
      reset($this->DisplayRequestLeg);
    }

    /**
     * Countable implementation
     *
     * @return DisplayRequestLeg Return count of elements
     */
    public function count()
    {
      return count($this->DisplayRequestLeg);
    }

}
