<?php

namespace App\models\ATSFlight;

class ArrayOfRoutingResponseVia implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RoutingResponseVia[] $RoutingResponseVia
     */
    protected $RoutingResponseVia = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RoutingResponseVia[]
     */
    public function getRoutingResponseVia()
    {
      return $this->RoutingResponseVia;
    }

    /**
     * @param RoutingResponseVia[] $RoutingResponseVia
     * @return \App\models\ATSFlight\ArrayOfRoutingResponseVia
     */
    public function setRoutingResponseVia(array $RoutingResponseVia = null)
    {
      $this->RoutingResponseVia = $RoutingResponseVia;
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
      return isset($this->RoutingResponseVia[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RoutingResponseVia
     */
    public function offsetGet($offset)
    {
      return $this->RoutingResponseVia[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RoutingResponseVia $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RoutingResponseVia[] = $value;
      } else {
        $this->RoutingResponseVia[$offset] = $value;
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
      unset($this->RoutingResponseVia[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RoutingResponseVia Return the current element
     */
    public function current()
    {
      return current($this->RoutingResponseVia);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RoutingResponseVia);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RoutingResponseVia);
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
      reset($this->RoutingResponseVia);
    }

    /**
     * Countable implementation
     *
     * @return RoutingResponseVia Return count of elements
     */
    public function count()
    {
      return count($this->RoutingResponseVia);
    }

}
