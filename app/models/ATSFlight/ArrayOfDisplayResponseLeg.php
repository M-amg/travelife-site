<?php

namespace App\models\ATSFlight;

class ArrayOfDisplayResponseLeg implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DisplayResponseLeg[] $DisplayResponseLeg
     */
    protected $DisplayResponseLeg = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DisplayResponseLeg[]
     */
    public function getDisplayResponseLeg()
    {
      return $this->DisplayResponseLeg;
    }

    /**
     * @param DisplayResponseLeg[] $DisplayResponseLeg
     * @return \App\models\ATSFlight\ArrayOfDisplayResponseLeg
     */
    public function setDisplayResponseLeg(array $DisplayResponseLeg = null)
    {
      $this->DisplayResponseLeg = $DisplayResponseLeg;
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
      return isset($this->DisplayResponseLeg[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DisplayResponseLeg
     */
    public function offsetGet($offset)
    {
      return $this->DisplayResponseLeg[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DisplayResponseLeg $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DisplayResponseLeg[] = $value;
      } else {
        $this->DisplayResponseLeg[$offset] = $value;
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
      unset($this->DisplayResponseLeg[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DisplayResponseLeg Return the current element
     */
    public function current()
    {
      return current($this->DisplayResponseLeg);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DisplayResponseLeg);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DisplayResponseLeg);
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
      reset($this->DisplayResponseLeg);
    }

    /**
     * Countable implementation
     *
     * @return DisplayResponseLeg Return count of elements
     */
    public function count()
    {
      return count($this->DisplayResponseLeg);
    }

}
