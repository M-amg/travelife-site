<?php

namespace App\models\ATSFlight;

class ArrayOfRoutingResponseInformation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RoutingResponseInformation[] $RoutingResponseInformation
     */
    protected $RoutingResponseInformation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RoutingResponseInformation[]
     */
    public function getRoutingResponseInformation()
    {
      return $this->RoutingResponseInformation;
    }

    /**
     * @param RoutingResponseInformation[] $RoutingResponseInformation
     * @return \App\models\ATSFlight\ArrayOfRoutingResponseInformation
     */
    public function setRoutingResponseInformation(array $RoutingResponseInformation = null)
    {
      $this->RoutingResponseInformation = $RoutingResponseInformation;
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
      return isset($this->RoutingResponseInformation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RoutingResponseInformation
     */
    public function offsetGet($offset)
    {
      return $this->RoutingResponseInformation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RoutingResponseInformation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RoutingResponseInformation[] = $value;
      } else {
        $this->RoutingResponseInformation[$offset] = $value;
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
      unset($this->RoutingResponseInformation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RoutingResponseInformation Return the current element
     */
    public function current()
    {
      return current($this->RoutingResponseInformation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RoutingResponseInformation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RoutingResponseInformation);
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
      reset($this->RoutingResponseInformation);
    }

    /**
     * Countable implementation
     *
     * @return RoutingResponseInformation Return count of elements
     */
    public function count()
    {
      return count($this->RoutingResponseInformation);
    }

}
