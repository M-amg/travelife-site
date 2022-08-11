<?php

namespace App\models\ATSFlight;

class ArrayOfPNRResponseLocation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PNRResponseLocation[] $PNRResponseLocation
     */
    protected $PNRResponseLocation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PNRResponseLocation[]
     */
    public function getPNRResponseLocation()
    {
      return $this->PNRResponseLocation;
    }

    /**
     * @param PNRResponseLocation[] $PNRResponseLocation
     * @return \App\models\ATSFlight\ArrayOfPNRResponseLocation
     */
    public function setPNRResponseLocation(array $PNRResponseLocation = null)
    {
      $this->PNRResponseLocation = $PNRResponseLocation;
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
      return isset($this->PNRResponseLocation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PNRResponseLocation
     */
    public function offsetGet($offset)
    {
      return $this->PNRResponseLocation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PNRResponseLocation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PNRResponseLocation[] = $value;
      } else {
        $this->PNRResponseLocation[$offset] = $value;
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
      unset($this->PNRResponseLocation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PNRResponseLocation Return the current element
     */
    public function current()
    {
      return current($this->PNRResponseLocation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PNRResponseLocation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PNRResponseLocation);
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
      reset($this->PNRResponseLocation);
    }

    /**
     * Countable implementation
     *
     * @return PNRResponseLocation Return count of elements
     */
    public function count()
    {
      return count($this->PNRResponseLocation);
    }

}
