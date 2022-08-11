<?php

namespace App\models\ATSFlight;

class ArrayOfServiceData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ServiceData[] $ServiceData
     */
    protected $ServiceData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ServiceData[]
     */
    public function getServiceData()
    {
      return $this->ServiceData;
    }

    /**
     * @param ServiceData[] $ServiceData
     * @return \App\models\ATSFlight\ArrayOfServiceData
     */
    public function setServiceData(array $ServiceData = null)
    {
      $this->ServiceData = $ServiceData;
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
      return isset($this->ServiceData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ServiceData
     */
    public function offsetGet($offset)
    {
      return $this->ServiceData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ServiceData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ServiceData[] = $value;
      } else {
        $this->ServiceData[$offset] = $value;
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
      unset($this->ServiceData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ServiceData Return the current element
     */
    public function current()
    {
      return current($this->ServiceData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ServiceData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ServiceData);
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
      reset($this->ServiceData);
    }

    /**
     * Countable implementation
     *
     * @return ServiceData Return count of elements
     */
    public function count()
    {
      return count($this->ServiceData);
    }

}
