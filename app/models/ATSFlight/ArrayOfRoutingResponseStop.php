<?php

namespace App\models\ATSFlight;

class ArrayOfRoutingResponseStop implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RoutingResponseStop[] $RoutingResponseStop
     */
    protected $RoutingResponseStop = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RoutingResponseStop[]
     */
    public function getRoutingResponseStop()
    {
      return $this->RoutingResponseStop;
    }

    /**
     * @param RoutingResponseStop[] $RoutingResponseStop
     * @return \App\models\ATSFlight\ArrayOfRoutingResponseStop
     */
    public function setRoutingResponseStop(array $RoutingResponseStop = null)
    {
      $this->RoutingResponseStop = $RoutingResponseStop;
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
      return isset($this->RoutingResponseStop[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RoutingResponseStop
     */
    public function offsetGet($offset)
    {
      return $this->RoutingResponseStop[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RoutingResponseStop $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RoutingResponseStop[] = $value;
      } else {
        $this->RoutingResponseStop[$offset] = $value;
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
      unset($this->RoutingResponseStop[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RoutingResponseStop Return the current element
     */
    public function current()
    {
      return current($this->RoutingResponseStop);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RoutingResponseStop);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RoutingResponseStop);
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
      reset($this->RoutingResponseStop);
    }

    /**
     * Countable implementation
     *
     * @return RoutingResponseStop Return count of elements
     */
    public function count()
    {
      return count($this->RoutingResponseStop);
    }

}
