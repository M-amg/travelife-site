<?php

namespace App\models\ATSFlight;

class ArrayOfModifyResponseFormOfPayment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ModifyResponseFormOfPayment[] $ModifyResponseFormOfPayment
     */
    protected $ModifyResponseFormOfPayment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ModifyResponseFormOfPayment[]
     */
    public function getModifyResponseFormOfPayment()
    {
      return $this->ModifyResponseFormOfPayment;
    }

    /**
     * @param ModifyResponseFormOfPayment[] $ModifyResponseFormOfPayment
     * @return \App\models\ATSFlight\ArrayOfModifyResponseFormOfPayment
     */
    public function setModifyResponseFormOfPayment(array $ModifyResponseFormOfPayment = null)
    {
      $this->ModifyResponseFormOfPayment = $ModifyResponseFormOfPayment;
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
      return isset($this->ModifyResponseFormOfPayment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ModifyResponseFormOfPayment
     */
    public function offsetGet($offset)
    {
      return $this->ModifyResponseFormOfPayment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ModifyResponseFormOfPayment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ModifyResponseFormOfPayment[] = $value;
      } else {
        $this->ModifyResponseFormOfPayment[$offset] = $value;
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
      unset($this->ModifyResponseFormOfPayment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ModifyResponseFormOfPayment Return the current element
     */
    public function current()
    {
      return current($this->ModifyResponseFormOfPayment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ModifyResponseFormOfPayment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ModifyResponseFormOfPayment);
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
      reset($this->ModifyResponseFormOfPayment);
    }

    /**
     * Countable implementation
     *
     * @return ModifyResponseFormOfPayment Return count of elements
     */
    public function count()
    {
      return count($this->ModifyResponseFormOfPayment);
    }

}
