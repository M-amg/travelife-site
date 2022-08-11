<?php

namespace App\models\ATSFlight;

class ArrayOfServicePriceData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ServicePriceData[] $ServicePriceData
     */
    protected $ServicePriceData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ServicePriceData[]
     */
    public function getServicePriceData()
    {
      return $this->ServicePriceData;
    }

    /**
     * @param ServicePriceData[] $ServicePriceData
     * @return \App\models\ATSFlight\ArrayOfServicePriceData
     */
    public function setServicePriceData(array $ServicePriceData = null)
    {
      $this->ServicePriceData = $ServicePriceData;
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
      return isset($this->ServicePriceData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ServicePriceData
     */
    public function offsetGet($offset)
    {
      return $this->ServicePriceData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ServicePriceData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ServicePriceData[] = $value;
      } else {
        $this->ServicePriceData[$offset] = $value;
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
      unset($this->ServicePriceData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ServicePriceData Return the current element
     */
    public function current()
    {
      return current($this->ServicePriceData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ServicePriceData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ServicePriceData);
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
      reset($this->ServicePriceData);
    }

    /**
     * Countable implementation
     *
     * @return ServicePriceData Return count of elements
     */
    public function count()
    {
      return count($this->ServicePriceData);
    }

}
