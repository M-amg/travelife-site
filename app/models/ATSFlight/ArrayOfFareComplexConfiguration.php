<?php

namespace App\models\ATSFlight;

class ArrayOfFareComplexConfiguration implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var FareComplexConfiguration[] $FareComplexConfiguration
     */
    protected $FareComplexConfiguration = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FareComplexConfiguration[]
     */
    public function getFareComplexConfiguration()
    {
      return $this->FareComplexConfiguration;
    }

    /**
     * @param FareComplexConfiguration[] $FareComplexConfiguration
     * @return \App\models\ATSFlight\ArrayOfFareComplexConfiguration
     */
    public function setFareComplexConfiguration(array $FareComplexConfiguration = null)
    {
      $this->FareComplexConfiguration = $FareComplexConfiguration;
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
      return isset($this->FareComplexConfiguration[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return FareComplexConfiguration
     */
    public function offsetGet($offset)
    {
      return $this->FareComplexConfiguration[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param FareComplexConfiguration $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->FareComplexConfiguration[] = $value;
      } else {
        $this->FareComplexConfiguration[$offset] = $value;
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
      unset($this->FareComplexConfiguration[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return FareComplexConfiguration Return the current element
     */
    public function current()
    {
      return current($this->FareComplexConfiguration);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->FareComplexConfiguration);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->FareComplexConfiguration);
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
      reset($this->FareComplexConfiguration);
    }

    /**
     * Countable implementation
     *
     * @return FareComplexConfiguration Return count of elements
     */
    public function count()
    {
      return count($this->FareComplexConfiguration);
    }

}
