<?php

namespace App\models\ATSFlight;

class ArrayOfPNRServiceData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PNRServiceData[] $PNRServiceData
     */
    protected $PNRServiceData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PNRServiceData[]
     */
    public function getPNRServiceData()
    {
      return $this->PNRServiceData;
    }

    /**
     * @param PNRServiceData[] $PNRServiceData
     * @return \App\models\ATSFlight\ArrayOfPNRServiceData
     */
    public function setPNRServiceData(array $PNRServiceData = null)
    {
      $this->PNRServiceData = $PNRServiceData;
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
      return isset($this->PNRServiceData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PNRServiceData
     */
    public function offsetGet($offset)
    {
      return $this->PNRServiceData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PNRServiceData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PNRServiceData[] = $value;
      } else {
        $this->PNRServiceData[$offset] = $value;
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
      unset($this->PNRServiceData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PNRServiceData Return the current element
     */
    public function current()
    {
      return current($this->PNRServiceData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PNRServiceData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PNRServiceData);
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
      reset($this->PNRServiceData);
    }

    /**
     * Countable implementation
     *
     * @return PNRServiceData Return count of elements
     */
    public function count()
    {
      return count($this->PNRServiceData);
    }

}
