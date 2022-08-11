<?php

namespace App\models\ATSFlight;

class ArrayOfTaxRequestLeg implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TaxRequestLeg[] $TaxRequestLeg
     */
    protected $TaxRequestLeg = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TaxRequestLeg[]
     */
    public function getTaxRequestLeg()
    {
      return $this->TaxRequestLeg;
    }

    /**
     * @param TaxRequestLeg[] $TaxRequestLeg
     * @return \App\models\ATSFlight\ArrayOfTaxRequestLeg
     */
    public function setTaxRequestLeg(array $TaxRequestLeg = null)
    {
      $this->TaxRequestLeg = $TaxRequestLeg;
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
      return isset($this->TaxRequestLeg[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TaxRequestLeg
     */
    public function offsetGet($offset)
    {
      return $this->TaxRequestLeg[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TaxRequestLeg $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TaxRequestLeg[] = $value;
      } else {
        $this->TaxRequestLeg[$offset] = $value;
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
      unset($this->TaxRequestLeg[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TaxRequestLeg Return the current element
     */
    public function current()
    {
      return current($this->TaxRequestLeg);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TaxRequestLeg);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TaxRequestLeg);
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
      reset($this->TaxRequestLeg);
    }

    /**
     * Countable implementation
     *
     * @return TaxRequestLeg Return count of elements
     */
    public function count()
    {
      return count($this->TaxRequestLeg);
    }

}
