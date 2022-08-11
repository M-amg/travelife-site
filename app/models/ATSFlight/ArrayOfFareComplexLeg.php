<?php

namespace App\models\ATSFlight;

class ArrayOfFareComplexLeg implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var FareComplexLeg[] $FareComplexLeg
     */
    protected $FareComplexLeg = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FareComplexLeg[]
     */
    public function getFareComplexLeg()
    {
      return $this->FareComplexLeg;
    }

    /**
     * @param FareComplexLeg[] $FareComplexLeg
     * @return \App\models\ATSFlight\ArrayOfFareComplexLeg
     */
    public function setFareComplexLeg(array $FareComplexLeg = null)
    {
      $this->FareComplexLeg = $FareComplexLeg;
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
      return isset($this->FareComplexLeg[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return FareComplexLeg
     */
    public function offsetGet($offset)
    {
      return $this->FareComplexLeg[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param FareComplexLeg $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->FareComplexLeg[] = $value;
      } else {
        $this->FareComplexLeg[$offset] = $value;
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
      unset($this->FareComplexLeg[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return FareComplexLeg Return the current element
     */
    public function current()
    {
      return current($this->FareComplexLeg);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->FareComplexLeg);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->FareComplexLeg);
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
      reset($this->FareComplexLeg);
    }

    /**
     * Countable implementation
     *
     * @return FareComplexLeg Return count of elements
     */
    public function count()
    {
      return count($this->FareComplexLeg);
    }

}
