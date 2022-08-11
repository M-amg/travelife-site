<?php

namespace App\models\ATSFlight;

class ArrayOfPaymentDefinitionData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PaymentDefinitionData[] $PaymentDefinitionData
     */
    protected $PaymentDefinitionData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PaymentDefinitionData[]
     */
    public function getPaymentDefinitionData()
    {
      return $this->PaymentDefinitionData;
    }

    /**
     * @param PaymentDefinitionData[] $PaymentDefinitionData
     * @return \App\models\ATSFlight\ArrayOfPaymentDefinitionData
     */
    public function setPaymentDefinitionData(array $PaymentDefinitionData = null)
    {
      $this->PaymentDefinitionData = $PaymentDefinitionData;
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
      return isset($this->PaymentDefinitionData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PaymentDefinitionData
     */
    public function offsetGet($offset)
    {
      return $this->PaymentDefinitionData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PaymentDefinitionData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PaymentDefinitionData[] = $value;
      } else {
        $this->PaymentDefinitionData[$offset] = $value;
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
      unset($this->PaymentDefinitionData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PaymentDefinitionData Return the current element
     */
    public function current()
    {
      return current($this->PaymentDefinitionData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PaymentDefinitionData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PaymentDefinitionData);
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
      reset($this->PaymentDefinitionData);
    }

    /**
     * Countable implementation
     *
     * @return PaymentDefinitionData Return count of elements
     */
    public function count()
    {
      return count($this->PaymentDefinitionData);
    }

}
