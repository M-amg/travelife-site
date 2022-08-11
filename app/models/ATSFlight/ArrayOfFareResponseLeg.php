<?php

namespace App\models\ATSFlight;

class ArrayOfFareResponseLeg implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var FareResponseLeg[] $FareResponseLeg
     */
    protected $FareResponseLeg = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FareResponseLeg[]
     */
    public function getFareResponseLeg()
    {
      return $this->FareResponseLeg;
    }

    /**
     * @param FareResponseLeg[] $FareResponseLeg
     * @return \App\models\ATSFlight\ArrayOfFareResponseLeg
     */
    public function setFareResponseLeg(array $FareResponseLeg = null)
    {
      $this->FareResponseLeg = $FareResponseLeg;
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
      return isset($this->FareResponseLeg[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return FareResponseLeg
     */
    public function offsetGet($offset)
    {
      return $this->FareResponseLeg[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param FareResponseLeg $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->FareResponseLeg[] = $value;
      } else {
        $this->FareResponseLeg[$offset] = $value;
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
      unset($this->FareResponseLeg[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return FareResponseLeg Return the current element
     */
    public function current()
    {
      return current($this->FareResponseLeg);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->FareResponseLeg);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->FareResponseLeg);
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
      reset($this->FareResponseLeg);
    }

    /**
     * Countable implementation
     *
     * @return FareResponseLeg Return count of elements
     */
    public function count()
    {
      return count($this->FareResponseLeg);
    }

}
