<?php

namespace App\models\ATSFlight;

class ArrayOfCommonSegmentData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CommonSegmentData[] $CommonSegmentData
     */
    protected $CommonSegmentData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CommonSegmentData[]
     */
    public function getCommonSegmentData()
    {
      return $this->CommonSegmentData;
    }

    /**
     * @param CommonSegmentData[] $CommonSegmentData
     * @return \App\models\ATSFlight\ArrayOfCommonSegmentData
     */
    public function setCommonSegmentData(array $CommonSegmentData = null)
    {
      $this->CommonSegmentData = $CommonSegmentData;
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
      return isset($this->CommonSegmentData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CommonSegmentData
     */
    public function offsetGet($offset)
    {
      return $this->CommonSegmentData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CommonSegmentData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CommonSegmentData[] = $value;
      } else {
        $this->CommonSegmentData[$offset] = $value;
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
      unset($this->CommonSegmentData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CommonSegmentData Return the current element
     */
    public function current()
    {
      return current($this->CommonSegmentData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CommonSegmentData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CommonSegmentData);
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
      reset($this->CommonSegmentData);
    }

    /**
     * Countable implementation
     *
     * @return CommonSegmentData Return count of elements
     */
    public function count()
    {
      return count($this->CommonSegmentData);
    }

}
