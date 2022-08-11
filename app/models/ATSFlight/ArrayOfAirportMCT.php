<?php

namespace App\models\ATSFlight;

class ArrayOfAirportMCT implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AirportMCT[] $AirportMCT
     */
    protected $AirportMCT = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AirportMCT[]
     */
    public function getAirportMCT()
    {
      return $this->AirportMCT;
    }

    /**
     * @param AirportMCT[] $AirportMCT
     * @return \App\models\ATSFlight\ArrayOfAirportMCT
     */
    public function setAirportMCT(array $AirportMCT = null)
    {
      $this->AirportMCT = $AirportMCT;
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
      return isset($this->AirportMCT[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AirportMCT
     */
    public function offsetGet($offset)
    {
      return $this->AirportMCT[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AirportMCT $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AirportMCT[] = $value;
      } else {
        $this->AirportMCT[$offset] = $value;
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
      unset($this->AirportMCT[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AirportMCT Return the current element
     */
    public function current()
    {
      return current($this->AirportMCT);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AirportMCT);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AirportMCT);
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
      reset($this->AirportMCT);
    }

    /**
     * Countable implementation
     *
     * @return AirportMCT Return count of elements
     */
    public function count()
    {
      return count($this->AirportMCT);
    }

}
