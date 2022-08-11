<?php

namespace App\models\ATSFlight;

class ArrayOfRoutingResponseRouting implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RoutingResponseRouting[] $RoutingResponseRouting
     */
    protected $RoutingResponseRouting = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RoutingResponseRouting[]
     */
    public function getRoutingResponseRouting()
    {
      return $this->RoutingResponseRouting;
    }

    /**
     * @param RoutingResponseRouting[] $RoutingResponseRouting
     * @return \App\models\ATSFlight\ArrayOfRoutingResponseRouting
     */
    public function setRoutingResponseRouting(array $RoutingResponseRouting = null)
    {
      $this->RoutingResponseRouting = $RoutingResponseRouting;
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
      return isset($this->RoutingResponseRouting[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RoutingResponseRouting
     */
    public function offsetGet($offset)
    {
      return $this->RoutingResponseRouting[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RoutingResponseRouting $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RoutingResponseRouting[] = $value;
      } else {
        $this->RoutingResponseRouting[$offset] = $value;
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
      unset($this->RoutingResponseRouting[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RoutingResponseRouting Return the current element
     */
    public function current()
    {
      return current($this->RoutingResponseRouting);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RoutingResponseRouting);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RoutingResponseRouting);
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
      reset($this->RoutingResponseRouting);
    }

    /**
     * Countable implementation
     *
     * @return RoutingResponseRouting Return count of elements
     */
    public function count()
    {
      return count($this->RoutingResponseRouting);
    }

}
