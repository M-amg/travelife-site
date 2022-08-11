<?php

namespace App\models\ATSFlight;

class ArrayOfFareRequestLeg implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var FareRequestLeg[] $FareRequestLeg
     */
    protected $FareRequestLeg = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FareRequestLeg[]
     */
    public function getFareRequestLeg()
    {
      return $this->FareRequestLeg;
    }

    /**
     * @param FareRequestLeg[] $FareRequestLeg
     * @return \App\models\ATSFlight\ArrayOfFareRequestLeg
     */
    public function setFareRequestLeg(array $FareRequestLeg = null)
    {
      $this->FareRequestLeg = $FareRequestLeg;
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
      return isset($this->FareRequestLeg[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return FareRequestLeg
     */
    public function offsetGet($offset)
    {
      return $this->FareRequestLeg[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param FareRequestLeg $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->FareRequestLeg[] = $value;
      } else {
        $this->FareRequestLeg[$offset] = $value;
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
      unset($this->FareRequestLeg[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return FareRequestLeg Return the current element
     */
    public function current()
    {
      return current($this->FareRequestLeg);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->FareRequestLeg);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->FareRequestLeg);
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
      reset($this->FareRequestLeg);
    }

    /**
     * Countable implementation
     *
     * @return FareRequestLeg Return count of elements
     */
    public function count()
    {
      return count($this->FareRequestLeg);
    }

}
