<?php

namespace App\models\ATSFlight;

class ArrayOfCRSData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CRSData[] $CRSData
     */
    protected $CRSData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CRSData[]
     */
    public function getCRSData()
    {
      return $this->CRSData;
    }

    /**
     * @param CRSData[] $CRSData
     * @return \App\models\ATSFlight\ArrayOfCRSData
     */
    public function setCRSData(array $CRSData = null)
    {
      $this->CRSData = $CRSData;
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
      return isset($this->CRSData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CRSData
     */
    public function offsetGet($offset)
    {
      return $this->CRSData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CRSData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CRSData[] = $value;
      } else {
        $this->CRSData[$offset] = $value;
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
      unset($this->CRSData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CRSData Return the current element
     */
    public function current()
    {
      return current($this->CRSData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CRSData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CRSData);
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
      reset($this->CRSData);
    }

    /**
     * Countable implementation
     *
     * @return CRSData Return count of elements
     */
    public function count()
    {
      return count($this->CRSData);
    }

}
