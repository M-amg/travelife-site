<?php

namespace App\models\ATSFlight;

class ArrayOfRoutingResponseSegment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RoutingResponseSegment[] $RoutingResponseSegment
     */
    protected $RoutingResponseSegment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RoutingResponseSegment[]
     */
    public function getRoutingResponseSegment()
    {
      return $this->RoutingResponseSegment;
    }

    /**
     * @param RoutingResponseSegment[] $RoutingResponseSegment
     * @return \App\models\ATSFlight\ArrayOfRoutingResponseSegment
     */
    public function setRoutingResponseSegment(array $RoutingResponseSegment = null)
    {
      $this->RoutingResponseSegment = $RoutingResponseSegment;
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
      return isset($this->RoutingResponseSegment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RoutingResponseSegment
     */
    public function offsetGet($offset)
    {
      return $this->RoutingResponseSegment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RoutingResponseSegment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RoutingResponseSegment[] = $value;
      } else {
        $this->RoutingResponseSegment[$offset] = $value;
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
      unset($this->RoutingResponseSegment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RoutingResponseSegment Return the current element
     */
    public function current()
    {
      return current($this->RoutingResponseSegment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RoutingResponseSegment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RoutingResponseSegment);
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
      reset($this->RoutingResponseSegment);
    }

    /**
     * Countable implementation
     *
     * @return RoutingResponseSegment Return count of elements
     */
    public function count()
    {
      return count($this->RoutingResponseSegment);
    }

}
