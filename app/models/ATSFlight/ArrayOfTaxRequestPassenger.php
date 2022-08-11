<?php

namespace App\models\ATSFlight;

class ArrayOfTaxRequestPassenger implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TaxRequestPassenger[] $TaxRequestPassenger
     */
    protected $TaxRequestPassenger = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TaxRequestPassenger[]
     */
    public function getTaxRequestPassenger()
    {
      return $this->TaxRequestPassenger;
    }

    /**
     * @param TaxRequestPassenger[] $TaxRequestPassenger
     * @return \App\models\ATSFlight\ArrayOfTaxRequestPassenger
     */
    public function setTaxRequestPassenger(array $TaxRequestPassenger = null)
    {
      $this->TaxRequestPassenger = $TaxRequestPassenger;
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
      return isset($this->TaxRequestPassenger[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TaxRequestPassenger
     */
    public function offsetGet($offset)
    {
      return $this->TaxRequestPassenger[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TaxRequestPassenger $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TaxRequestPassenger[] = $value;
      } else {
        $this->TaxRequestPassenger[$offset] = $value;
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
      unset($this->TaxRequestPassenger[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TaxRequestPassenger Return the current element
     */
    public function current()
    {
      return current($this->TaxRequestPassenger);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TaxRequestPassenger);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TaxRequestPassenger);
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
      reset($this->TaxRequestPassenger);
    }

    /**
     * Countable implementation
     *
     * @return TaxRequestPassenger Return count of elements
     */
    public function count()
    {
      return count($this->TaxRequestPassenger);
    }

}
