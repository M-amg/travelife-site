<?php

namespace App\models\ATSFlight;

class ArrayOfCorporateCarrierData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CorporateCarrierData[] $CorporateCarrierData
     */
    protected $CorporateCarrierData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CorporateCarrierData[]
     */
    public function getCorporateCarrierData()
    {
      return $this->CorporateCarrierData;
    }

    /**
     * @param CorporateCarrierData[] $CorporateCarrierData
     * @return \App\models\ATSFlight\ArrayOfCorporateCarrierData
     */
    public function setCorporateCarrierData(array $CorporateCarrierData = null)
    {
      $this->CorporateCarrierData = $CorporateCarrierData;
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
      return isset($this->CorporateCarrierData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CorporateCarrierData
     */
    public function offsetGet($offset)
    {
      return $this->CorporateCarrierData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CorporateCarrierData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CorporateCarrierData[] = $value;
      } else {
        $this->CorporateCarrierData[$offset] = $value;
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
      unset($this->CorporateCarrierData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CorporateCarrierData Return the current element
     */
    public function current()
    {
      return current($this->CorporateCarrierData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CorporateCarrierData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CorporateCarrierData);
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
      reset($this->CorporateCarrierData);
    }

    /**
     * Countable implementation
     *
     * @return CorporateCarrierData Return count of elements
     */
    public function count()
    {
      return count($this->CorporateCarrierData);
    }

}
