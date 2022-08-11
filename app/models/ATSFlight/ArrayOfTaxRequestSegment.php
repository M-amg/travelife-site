<?php

namespace App\models\ATSFlight;

class ArrayOfTaxRequestSegment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TaxRequestSegment[] $TaxRequestSegment
     */
    protected $TaxRequestSegment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TaxRequestSegment[]
     */
    public function getTaxRequestSegment()
    {
      return $this->TaxRequestSegment;
    }

    /**
     * @param TaxRequestSegment[] $TaxRequestSegment
     * @return \App\models\ATSFlight\ArrayOfTaxRequestSegment
     */
    public function setTaxRequestSegment(array $TaxRequestSegment = null)
    {
      $this->TaxRequestSegment = $TaxRequestSegment;
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
      return isset($this->TaxRequestSegment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TaxRequestSegment
     */
    public function offsetGet($offset)
    {
      return $this->TaxRequestSegment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TaxRequestSegment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TaxRequestSegment[] = $value;
      } else {
        $this->TaxRequestSegment[$offset] = $value;
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
      unset($this->TaxRequestSegment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TaxRequestSegment Return the current element
     */
    public function current()
    {
      return current($this->TaxRequestSegment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TaxRequestSegment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TaxRequestSegment);
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
      reset($this->TaxRequestSegment);
    }

    /**
     * Countable implementation
     *
     * @return TaxRequestSegment Return count of elements
     */
    public function count()
    {
      return count($this->TaxRequestSegment);
    }

}
