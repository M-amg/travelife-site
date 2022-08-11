<?php

namespace App\models\ATSFlight;

class ArrayOfSupplierData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SupplierData[] $SupplierData
     */
    protected $SupplierData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SupplierData[]
     */
    public function getSupplierData()
    {
      return $this->SupplierData;
    }

    /**
     * @param SupplierData[] $SupplierData
     * @return \App\models\ATSFlight\ArrayOfSupplierData
     */
    public function setSupplierData(array $SupplierData = null)
    {
      $this->SupplierData = $SupplierData;
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
      return isset($this->SupplierData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SupplierData
     */
    public function offsetGet($offset)
    {
      return $this->SupplierData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SupplierData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SupplierData[] = $value;
      } else {
        $this->SupplierData[$offset] = $value;
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
      unset($this->SupplierData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SupplierData Return the current element
     */
    public function current()
    {
      return current($this->SupplierData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SupplierData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SupplierData);
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
      reset($this->SupplierData);
    }

    /**
     * Countable implementation
     *
     * @return SupplierData Return count of elements
     */
    public function count()
    {
      return count($this->SupplierData);
    }

}
