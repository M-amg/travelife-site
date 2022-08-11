<?php

namespace App\models\ATSFlight;

class ArrayOfPaymentFilter implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PaymentFilter[] $PaymentFilter
     */
    protected $PaymentFilter = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PaymentFilter[]
     */
    public function getPaymentFilter()
    {
      return $this->PaymentFilter;
    }

    /**
     * @param PaymentFilter[] $PaymentFilter
     * @return \App\models\ATSFlight\ArrayOfPaymentFilter
     */
    public function setPaymentFilter(array $PaymentFilter = null)
    {
      $this->PaymentFilter = $PaymentFilter;
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
      return isset($this->PaymentFilter[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PaymentFilter
     */
    public function offsetGet($offset)
    {
      return $this->PaymentFilter[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PaymentFilter $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PaymentFilter[] = $value;
      } else {
        $this->PaymentFilter[$offset] = $value;
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
      unset($this->PaymentFilter[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PaymentFilter Return the current element
     */
    public function current()
    {
      return current($this->PaymentFilter);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PaymentFilter);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PaymentFilter);
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
      reset($this->PaymentFilter);
    }

    /**
     * Countable implementation
     *
     * @return PaymentFilter Return count of elements
     */
    public function count()
    {
      return count($this->PaymentFilter);
    }

}
