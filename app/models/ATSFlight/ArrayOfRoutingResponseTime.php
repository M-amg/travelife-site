<?php

namespace App\models\ATSFlight;

class ArrayOfRoutingResponseTime implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RoutingResponseTime[] $RoutingResponseTime
     */
    protected $RoutingResponseTime = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RoutingResponseTime[]
     */
    public function getRoutingResponseTime()
    {
      return $this->RoutingResponseTime;
    }

    /**
     * @param RoutingResponseTime[] $RoutingResponseTime
     * @return \App\models\ATSFlight\ArrayOfRoutingResponseTime
     */
    public function setRoutingResponseTime(array $RoutingResponseTime = null)
    {
      $this->RoutingResponseTime = $RoutingResponseTime;
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
      return isset($this->RoutingResponseTime[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RoutingResponseTime
     */
    public function offsetGet($offset)
    {
      return $this->RoutingResponseTime[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RoutingResponseTime $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RoutingResponseTime[] = $value;
      } else {
        $this->RoutingResponseTime[$offset] = $value;
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
      unset($this->RoutingResponseTime[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RoutingResponseTime Return the current element
     */
    public function current()
    {
      return current($this->RoutingResponseTime);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RoutingResponseTime);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RoutingResponseTime);
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
      reset($this->RoutingResponseTime);
    }

    /**
     * Countable implementation
     *
     * @return RoutingResponseTime Return count of elements
     */
    public function count()
    {
      return count($this->RoutingResponseTime);
    }

}
