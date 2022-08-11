<?php

namespace App\models\ATSFlight;

class ArrayOfRoutingResponseLocation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RoutingResponseLocation[] $RoutingResponseLocation
     */
    protected $RoutingResponseLocation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RoutingResponseLocation[]
     */
    public function getRoutingResponseLocation()
    {
      return $this->RoutingResponseLocation;
    }

    /**
     * @param RoutingResponseLocation[] $RoutingResponseLocation
     * @return \App\models\ATSFlight\ArrayOfRoutingResponseLocation
     */
    public function setRoutingResponseLocation(array $RoutingResponseLocation = null)
    {
      $this->RoutingResponseLocation = $RoutingResponseLocation;
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
      return isset($this->RoutingResponseLocation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RoutingResponseLocation
     */
    public function offsetGet($offset)
    {
      return $this->RoutingResponseLocation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RoutingResponseLocation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RoutingResponseLocation[] = $value;
      } else {
        $this->RoutingResponseLocation[$offset] = $value;
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
      unset($this->RoutingResponseLocation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RoutingResponseLocation Return the current element
     */
    public function current()
    {
      return current($this->RoutingResponseLocation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RoutingResponseLocation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RoutingResponseLocation);
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
      reset($this->RoutingResponseLocation);
    }

    /**
     * Countable implementation
     *
     * @return RoutingResponseLocation Return count of elements
     */
    public function count()
    {
      return count($this->RoutingResponseLocation);
    }

}
