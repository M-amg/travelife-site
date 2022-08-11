<?php

namespace App\models\ATSFlight;

class ArrayOfFareComplexPassengeGroup implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var FareComplexPassengeGroup[] $FareComplexPassengeGroup
     */
    protected $FareComplexPassengeGroup = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FareComplexPassengeGroup[]
     */
    public function getFareComplexPassengeGroup()
    {
      return $this->FareComplexPassengeGroup;
    }

    /**
     * @param FareComplexPassengeGroup[] $FareComplexPassengeGroup
     * @return \App\models\ATSFlight\ArrayOfFareComplexPassengeGroup
     */
    public function setFareComplexPassengeGroup(array $FareComplexPassengeGroup = null)
    {
      $this->FareComplexPassengeGroup = $FareComplexPassengeGroup;
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
      return isset($this->FareComplexPassengeGroup[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return FareComplexPassengeGroup
     */
    public function offsetGet($offset)
    {
      return $this->FareComplexPassengeGroup[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param FareComplexPassengeGroup $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->FareComplexPassengeGroup[] = $value;
      } else {
        $this->FareComplexPassengeGroup[$offset] = $value;
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
      unset($this->FareComplexPassengeGroup[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return FareComplexPassengeGroup Return the current element
     */
    public function current()
    {
      return current($this->FareComplexPassengeGroup);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->FareComplexPassengeGroup);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->FareComplexPassengeGroup);
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
      reset($this->FareComplexPassengeGroup);
    }

    /**
     * Countable implementation
     *
     * @return FareComplexPassengeGroup Return count of elements
     */
    public function count()
    {
      return count($this->FareComplexPassengeGroup);
    }

}
