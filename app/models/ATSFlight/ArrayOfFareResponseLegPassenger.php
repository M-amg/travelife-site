<?php

namespace App\models\ATSFlight;

class ArrayOfFareResponseLegPassenger implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var FareResponseLegPassenger[] $FareResponseLegPassenger
     */
    protected $FareResponseLegPassenger = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FareResponseLegPassenger[]
     */
    public function getFareResponseLegPassenger()
    {
      return $this->FareResponseLegPassenger;
    }

    /**
     * @param FareResponseLegPassenger[] $FareResponseLegPassenger
     * @return \App\models\ATSFlight\ArrayOfFareResponseLegPassenger
     */
    public function setFareResponseLegPassenger(array $FareResponseLegPassenger = null)
    {
      $this->FareResponseLegPassenger = $FareResponseLegPassenger;
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
      return isset($this->FareResponseLegPassenger[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return FareResponseLegPassenger
     */
    public function offsetGet($offset)
    {
      return $this->FareResponseLegPassenger[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param FareResponseLegPassenger $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->FareResponseLegPassenger[] = $value;
      } else {
        $this->FareResponseLegPassenger[$offset] = $value;
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
      unset($this->FareResponseLegPassenger[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return FareResponseLegPassenger Return the current element
     */
    public function current()
    {
      return current($this->FareResponseLegPassenger);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->FareResponseLegPassenger);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->FareResponseLegPassenger);
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
      reset($this->FareResponseLegPassenger);
    }

    /**
     * Countable implementation
     *
     * @return FareResponseLegPassenger Return count of elements
     */
    public function count()
    {
      return count($this->FareResponseLegPassenger);
    }

}
