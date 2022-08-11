<?php

namespace App\models\ATSFlight;

class ArrayOfTaxDetail implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TaxDetail[] $TaxDetail
     */
    protected $TaxDetail = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TaxDetail[]
     */
    public function getTaxDetail()
    {
      return $this->TaxDetail;
    }

    /**
     * @param TaxDetail[] $TaxDetail
     * @return \App\models\ATSFlight\ArrayOfTaxDetail
     */
    public function setTaxDetail(array $TaxDetail = null)
    {
      $this->TaxDetail = $TaxDetail;
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
      return isset($this->TaxDetail[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TaxDetail
     */
    public function offsetGet($offset)
    {
      return $this->TaxDetail[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TaxDetail $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TaxDetail[] = $value;
      } else {
        $this->TaxDetail[$offset] = $value;
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
      unset($this->TaxDetail[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TaxDetail Return the current element
     */
    public function current()
    {
      return current($this->TaxDetail);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TaxDetail);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TaxDetail);
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
      reset($this->TaxDetail);
    }

    /**
     * Countable implementation
     *
     * @return TaxDetail Return count of elements
     */
    public function count()
    {
      return count($this->TaxDetail);
    }

}
