<?php

namespace App\models\ATSFlight;

class ArrayOfRoutingResponsePeriod implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RoutingResponsePeriod[] $RoutingResponsePeriod
     */
    protected $RoutingResponsePeriod = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RoutingResponsePeriod[]
     */
    public function getRoutingResponsePeriod()
    {
      return $this->RoutingResponsePeriod;
    }

    /**
     * @param RoutingResponsePeriod[] $RoutingResponsePeriod
     * @return \App\models\ATSFlight\ArrayOfRoutingResponsePeriod
     */
    public function setRoutingResponsePeriod(array $RoutingResponsePeriod = null)
    {
      $this->RoutingResponsePeriod = $RoutingResponsePeriod;
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
      return isset($this->RoutingResponsePeriod[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RoutingResponsePeriod
     */
    public function offsetGet($offset)
    {
      return $this->RoutingResponsePeriod[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RoutingResponsePeriod $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RoutingResponsePeriod[] = $value;
      } else {
        $this->RoutingResponsePeriod[$offset] = $value;
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
      unset($this->RoutingResponsePeriod[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RoutingResponsePeriod Return the current element
     */
    public function current()
    {
      return current($this->RoutingResponsePeriod);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RoutingResponsePeriod);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RoutingResponsePeriod);
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
      reset($this->RoutingResponsePeriod);
    }

    /**
     * Countable implementation
     *
     * @return RoutingResponsePeriod Return count of elements
     */
    public function count()
    {
      return count($this->RoutingResponsePeriod);
    }

}
