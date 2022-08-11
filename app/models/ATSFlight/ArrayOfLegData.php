<?php

namespace App\models\ATSFlight;

class ArrayOfLegData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var LegData[] $LegData
     */
    protected $LegData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return LegData[]
     */
    public function getLegData()
    {
      return $this->LegData;
    }

    /**
     * @param LegData[] $LegData
     * @return \App\models\ATSFlight\ArrayOfLegData
     */
    public function setLegData(array $LegData = null)
    {
      $this->LegData = $LegData;
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
      return isset($this->LegData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return LegData
     */
    public function offsetGet($offset)
    {
      return $this->LegData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param LegData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->LegData[] = $value;
      } else {
        $this->LegData[$offset] = $value;
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
      unset($this->LegData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return LegData Return the current element
     */
    public function current()
    {
      return current($this->LegData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->LegData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->LegData);
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
      reset($this->LegData);
    }

    /**
     * Countable implementation
     *
     * @return LegData Return count of elements
     */
    public function count()
    {
      return count($this->LegData);
    }

}
