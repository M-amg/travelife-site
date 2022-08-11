<?php

namespace App\models\ATSFlight;

class ArrayOfPNRResponsePayment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PNRResponsePayment[] $PNRResponsePayment
     */
    protected $PNRResponsePayment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PNRResponsePayment[]
     */
    public function getPNRResponsePayment()
    {
      return $this->PNRResponsePayment;
    }

    /**
     * @param PNRResponsePayment[] $PNRResponsePayment
     * @return \App\models\ATSFlight\ArrayOfPNRResponsePayment
     */
    public function setPNRResponsePayment(array $PNRResponsePayment = null)
    {
      $this->PNRResponsePayment = $PNRResponsePayment;
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
      return isset($this->PNRResponsePayment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PNRResponsePayment
     */
    public function offsetGet($offset)
    {
      return $this->PNRResponsePayment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PNRResponsePayment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PNRResponsePayment[] = $value;
      } else {
        $this->PNRResponsePayment[$offset] = $value;
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
      unset($this->PNRResponsePayment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PNRResponsePayment Return the current element
     */
    public function current()
    {
      return current($this->PNRResponsePayment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PNRResponsePayment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PNRResponsePayment);
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
      reset($this->PNRResponsePayment);
    }

    /**
     * Countable implementation
     *
     * @return PNRResponsePayment Return count of elements
     */
    public function count()
    {
      return count($this->PNRResponsePayment);
    }

}
