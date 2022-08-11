<?php

namespace App\models\ATSFlight;

class ArrayOfDetailedPaymentMethod implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DetailedPaymentMethod[] $DetailedPaymentMethod
     */
    protected $DetailedPaymentMethod = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DetailedPaymentMethod[]
     */
    public function getDetailedPaymentMethod()
    {
      return $this->DetailedPaymentMethod;
    }

    /**
     * @param DetailedPaymentMethod[] $DetailedPaymentMethod
     * @return \App\models\ATSFlight\ArrayOfDetailedPaymentMethod
     */
    public function setDetailedPaymentMethod(array $DetailedPaymentMethod = null)
    {
      $this->DetailedPaymentMethod = $DetailedPaymentMethod;
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
      return isset($this->DetailedPaymentMethod[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DetailedPaymentMethod
     */
    public function offsetGet($offset)
    {
      return $this->DetailedPaymentMethod[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DetailedPaymentMethod $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DetailedPaymentMethod[] = $value;
      } else {
        $this->DetailedPaymentMethod[$offset] = $value;
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
      unset($this->DetailedPaymentMethod[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DetailedPaymentMethod Return the current element
     */
    public function current()
    {
      return current($this->DetailedPaymentMethod);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DetailedPaymentMethod);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DetailedPaymentMethod);
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
      reset($this->DetailedPaymentMethod);
    }

    /**
     * Countable implementation
     *
     * @return DetailedPaymentMethod Return count of elements
     */
    public function count()
    {
      return count($this->DetailedPaymentMethod);
    }

}
