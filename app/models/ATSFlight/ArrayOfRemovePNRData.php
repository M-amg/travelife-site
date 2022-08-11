<?php

namespace App\models\ATSFlight;

class ArrayOfRemovePNRData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RemovePNRData[] $RemovePNRData
     */
    protected $RemovePNRData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RemovePNRData[]
     */
    public function getRemovePNRData()
    {
      return $this->RemovePNRData;
    }

    /**
     * @param RemovePNRData[] $RemovePNRData
     * @return \App\models\ATSFlight\ArrayOfRemovePNRData
     */
    public function setRemovePNRData(array $RemovePNRData = null)
    {
      $this->RemovePNRData = $RemovePNRData;
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
      return isset($this->RemovePNRData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RemovePNRData
     */
    public function offsetGet($offset)
    {
      return $this->RemovePNRData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RemovePNRData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RemovePNRData[] = $value;
      } else {
        $this->RemovePNRData[$offset] = $value;
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
      unset($this->RemovePNRData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RemovePNRData Return the current element
     */
    public function current()
    {
      return current($this->RemovePNRData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RemovePNRData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RemovePNRData);
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
      reset($this->RemovePNRData);
    }

    /**
     * Countable implementation
     *
     * @return RemovePNRData Return count of elements
     */
    public function count()
    {
      return count($this->RemovePNRData);
    }

}
