<?php

namespace App\models\ATSFlight;

class ArrayOfResponsePassengerPrices implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ResponsePassengerPrices[] $ResponsePassengerPrices
     */
    protected $ResponsePassengerPrices = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ResponsePassengerPrices[]
     */
    public function getResponsePassengerPrices()
    {
      return $this->ResponsePassengerPrices;
    }

    /**
     * @param ResponsePassengerPrices[] $ResponsePassengerPrices
     * @return \App\models\ATSFlight\ArrayOfResponsePassengerPrices
     */
    public function setResponsePassengerPrices(array $ResponsePassengerPrices = null)
    {
      $this->ResponsePassengerPrices = $ResponsePassengerPrices;
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
      return isset($this->ResponsePassengerPrices[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ResponsePassengerPrices
     */
    public function offsetGet($offset)
    {
      return $this->ResponsePassengerPrices[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ResponsePassengerPrices $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ResponsePassengerPrices[] = $value;
      } else {
        $this->ResponsePassengerPrices[$offset] = $value;
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
      unset($this->ResponsePassengerPrices[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ResponsePassengerPrices Return the current element
     */
    public function current()
    {
      return current($this->ResponsePassengerPrices);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ResponsePassengerPrices);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ResponsePassengerPrices);
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
      reset($this->ResponsePassengerPrices);
    }

    /**
     * Countable implementation
     *
     * @return ResponsePassengerPrices Return count of elements
     */
    public function count()
    {
      return count($this->ResponsePassengerPrices);
    }

}
