<?php

namespace App\models\ATSFlight;

class ArrayOfTaxResponsePassenger implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TaxResponsePassenger[] $TaxResponsePassenger
     */
    protected $TaxResponsePassenger = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TaxResponsePassenger[]
     */
    public function getTaxResponsePassenger()
    {
      return $this->TaxResponsePassenger;
    }

    /**
     * @param TaxResponsePassenger[] $TaxResponsePassenger
     * @return \App\models\ATSFlight\ArrayOfTaxResponsePassenger
     */
    public function setTaxResponsePassenger(array $TaxResponsePassenger = null)
    {
      $this->TaxResponsePassenger = $TaxResponsePassenger;
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
      return isset($this->TaxResponsePassenger[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TaxResponsePassenger
     */
    public function offsetGet($offset)
    {
      return $this->TaxResponsePassenger[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TaxResponsePassenger $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TaxResponsePassenger[] = $value;
      } else {
        $this->TaxResponsePassenger[$offset] = $value;
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
      unset($this->TaxResponsePassenger[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TaxResponsePassenger Return the current element
     */
    public function current()
    {
      return current($this->TaxResponsePassenger);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TaxResponsePassenger);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TaxResponsePassenger);
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
      reset($this->TaxResponsePassenger);
    }

    /**
     * Countable implementation
     *
     * @return TaxResponsePassenger Return count of elements
     */
    public function count()
    {
      return count($this->TaxResponsePassenger);
    }

}
