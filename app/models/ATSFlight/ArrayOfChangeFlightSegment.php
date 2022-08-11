<?php

namespace App\models\ATSFlight;

class ArrayOfChangeFlightSegment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ChangeFlightSegment[] $ChangeFlightSegment
     */
    protected $ChangeFlightSegment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ChangeFlightSegment[]
     */
    public function getChangeFlightSegment()
    {
      return $this->ChangeFlightSegment;
    }

    /**
     * @param ChangeFlightSegment[] $ChangeFlightSegment
     * @return \App\models\ATSFlight\ArrayOfChangeFlightSegment
     */
    public function setChangeFlightSegment(array $ChangeFlightSegment = null)
    {
      $this->ChangeFlightSegment = $ChangeFlightSegment;
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
      return isset($this->ChangeFlightSegment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ChangeFlightSegment
     */
    public function offsetGet($offset)
    {
      return $this->ChangeFlightSegment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ChangeFlightSegment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ChangeFlightSegment[] = $value;
      } else {
        $this->ChangeFlightSegment[$offset] = $value;
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
      unset($this->ChangeFlightSegment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ChangeFlightSegment Return the current element
     */
    public function current()
    {
      return current($this->ChangeFlightSegment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ChangeFlightSegment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ChangeFlightSegment);
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
      reset($this->ChangeFlightSegment);
    }

    /**
     * Countable implementation
     *
     * @return ChangeFlightSegment Return count of elements
     */
    public function count()
    {
      return count($this->ChangeFlightSegment);
    }

}
