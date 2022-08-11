<?php

namespace App\models\ATSFlight;

class ArrayOfStatusData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var StatusData[] $StatusData
     */
    protected $StatusData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return StatusData[]
     */
    public function getStatusData()
    {
      return $this->StatusData;
    }

    /**
     * @param StatusData[] $StatusData
     * @return \App\models\ATSFlight\ArrayOfStatusData
     */
    public function setStatusData(array $StatusData = null)
    {
      $this->StatusData = $StatusData;
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
      return isset($this->StatusData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return StatusData
     */
    public function offsetGet($offset)
    {
      return $this->StatusData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param StatusData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->StatusData[] = $value;
      } else {
        $this->StatusData[$offset] = $value;
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
      unset($this->StatusData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return StatusData Return the current element
     */
    public function current()
    {
      return current($this->StatusData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->StatusData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->StatusData);
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
      reset($this->StatusData);
    }

    /**
     * Countable implementation
     *
     * @return StatusData Return count of elements
     */
    public function count()
    {
      return count($this->StatusData);
    }

}
