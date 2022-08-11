<?php

namespace App\models\ATSFlight;

class ArrayOfPaymentFilterDetails implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PaymentFilterDetails[] $PaymentFilterDetails
     */
    protected $PaymentFilterDetails = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PaymentFilterDetails[]
     */
    public function getPaymentFilterDetails()
    {
      return $this->PaymentFilterDetails;
    }

    /**
     * @param PaymentFilterDetails[] $PaymentFilterDetails
     * @return \App\models\ATSFlight\ArrayOfPaymentFilterDetails
     */
    public function setPaymentFilterDetails(array $PaymentFilterDetails = null)
    {
      $this->PaymentFilterDetails = $PaymentFilterDetails;
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
      return isset($this->PaymentFilterDetails[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PaymentFilterDetails
     */
    public function offsetGet($offset)
    {
      return $this->PaymentFilterDetails[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PaymentFilterDetails $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PaymentFilterDetails[] = $value;
      } else {
        $this->PaymentFilterDetails[$offset] = $value;
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
      unset($this->PaymentFilterDetails[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PaymentFilterDetails Return the current element
     */
    public function current()
    {
      return current($this->PaymentFilterDetails);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PaymentFilterDetails);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PaymentFilterDetails);
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
      reset($this->PaymentFilterDetails);
    }

    /**
     * Countable implementation
     *
     * @return PaymentFilterDetails Return count of elements
     */
    public function count()
    {
      return count($this->PaymentFilterDetails);
    }

}
