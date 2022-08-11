<?php

namespace App\models\ATSFlight;

class ArrayOfFareResponseUserData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var FareResponseUserData[] $FareResponseUserData
     */
    protected $FareResponseUserData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FareResponseUserData[]
     */
    public function getFareResponseUserData()
    {
      return $this->FareResponseUserData;
    }

    /**
     * @param FareResponseUserData[] $FareResponseUserData
     * @return \App\models\ATSFlight\ArrayOfFareResponseUserData
     */
    public function setFareResponseUserData(array $FareResponseUserData = null)
    {
      $this->FareResponseUserData = $FareResponseUserData;
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
      return isset($this->FareResponseUserData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return FareResponseUserData
     */
    public function offsetGet($offset)
    {
      return $this->FareResponseUserData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param FareResponseUserData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->FareResponseUserData[] = $value;
      } else {
        $this->FareResponseUserData[$offset] = $value;
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
      unset($this->FareResponseUserData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return FareResponseUserData Return the current element
     */
    public function current()
    {
      return current($this->FareResponseUserData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->FareResponseUserData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->FareResponseUserData);
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
      reset($this->FareResponseUserData);
    }

    /**
     * Countable implementation
     *
     * @return FareResponseUserData Return count of elements
     */
    public function count()
    {
      return count($this->FareResponseUserData);
    }

}
