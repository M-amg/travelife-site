<?php

namespace App\models\ATSFlight;

class ArrayOfLegConnectionData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var LegConnectionData[] $LegConnectionData
     */
    protected $LegConnectionData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return LegConnectionData[]
     */
    public function getLegConnectionData()
    {
      return $this->LegConnectionData;
    }

    /**
     * @param LegConnectionData[] $LegConnectionData
     * @return \App\models\ATSFlight\ArrayOfLegConnectionData
     */
    public function setLegConnectionData(array $LegConnectionData = null)
    {
      $this->LegConnectionData = $LegConnectionData;
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
      return isset($this->LegConnectionData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return LegConnectionData
     */
    public function offsetGet($offset)
    {
      return $this->LegConnectionData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param LegConnectionData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->LegConnectionData[] = $value;
      } else {
        $this->LegConnectionData[$offset] = $value;
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
      unset($this->LegConnectionData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return LegConnectionData Return the current element
     */
    public function current()
    {
      return current($this->LegConnectionData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->LegConnectionData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->LegConnectionData);
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
      reset($this->LegConnectionData);
    }

    /**
     * Countable implementation
     *
     * @return LegConnectionData Return count of elements
     */
    public function count()
    {
      return count($this->LegConnectionData);
    }

}
