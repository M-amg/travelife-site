<?php

namespace App\models\ATSFlight;

class ArrayOfModifyRequestFormOfPayment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ModifyRequestFormOfPayment[] $ModifyRequestFormOfPayment
     */
    protected $ModifyRequestFormOfPayment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ModifyRequestFormOfPayment[]
     */
    public function getModifyRequestFormOfPayment()
    {
      return $this->ModifyRequestFormOfPayment;
    }

    /**
     * @param ModifyRequestFormOfPayment[] $ModifyRequestFormOfPayment
     * @return \App\models\ATSFlight\ArrayOfModifyRequestFormOfPayment
     */
    public function setModifyRequestFormOfPayment(array $ModifyRequestFormOfPayment = null)
    {
      $this->ModifyRequestFormOfPayment = $ModifyRequestFormOfPayment;
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
      return isset($this->ModifyRequestFormOfPayment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ModifyRequestFormOfPayment
     */
    public function offsetGet($offset)
    {
      return $this->ModifyRequestFormOfPayment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ModifyRequestFormOfPayment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ModifyRequestFormOfPayment[] = $value;
      } else {
        $this->ModifyRequestFormOfPayment[$offset] = $value;
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
      unset($this->ModifyRequestFormOfPayment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ModifyRequestFormOfPayment Return the current element
     */
    public function current()
    {
      return current($this->ModifyRequestFormOfPayment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ModifyRequestFormOfPayment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ModifyRequestFormOfPayment);
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
      reset($this->ModifyRequestFormOfPayment);
    }

    /**
     * Countable implementation
     *
     * @return ModifyRequestFormOfPayment Return count of elements
     */
    public function count()
    {
      return count($this->ModifyRequestFormOfPayment);
    }

}
