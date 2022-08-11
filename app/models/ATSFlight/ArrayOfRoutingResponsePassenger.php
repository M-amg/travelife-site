<?php

namespace App\models\ATSFlight;

class ArrayOfRoutingResponsePassenger implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RoutingResponsePassenger[] $RoutingResponsePassenger
     */
    protected $RoutingResponsePassenger = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RoutingResponsePassenger[]
     */
    public function getRoutingResponsePassenger()
    {
      return $this->RoutingResponsePassenger;
    }

    /**
     * @param RoutingResponsePassenger[] $RoutingResponsePassenger
     * @return \App\models\ATSFlight\ArrayOfRoutingResponsePassenger
     */
    public function setRoutingResponsePassenger(array $RoutingResponsePassenger = null)
    {
      $this->RoutingResponsePassenger = $RoutingResponsePassenger;
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
      return isset($this->RoutingResponsePassenger[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RoutingResponsePassenger
     */
    public function offsetGet($offset)
    {
      return $this->RoutingResponsePassenger[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RoutingResponsePassenger $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RoutingResponsePassenger[] = $value;
      } else {
        $this->RoutingResponsePassenger[$offset] = $value;
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
      unset($this->RoutingResponsePassenger[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RoutingResponsePassenger Return the current element
     */
    public function current()
    {
      return current($this->RoutingResponsePassenger);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RoutingResponsePassenger);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RoutingResponsePassenger);
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
      reset($this->RoutingResponsePassenger);
    }

    /**
     * Countable implementation
     *
     * @return RoutingResponsePassenger Return count of elements
     */
    public function count()
    {
      return count($this->RoutingResponsePassenger);
    }

}
