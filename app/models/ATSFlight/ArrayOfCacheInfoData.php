<?php

namespace App\models\ATSFlight;

class ArrayOfCacheInfoData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CacheInfoData[] $CacheInfoData
     */
    protected $CacheInfoData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CacheInfoData[]
     */
    public function getCacheInfoData()
    {
      return $this->CacheInfoData;
    }

    /**
     * @param CacheInfoData[] $CacheInfoData
     * @return \App\models\ATSFlight\ArrayOfCacheInfoData
     */
    public function setCacheInfoData(array $CacheInfoData = null)
    {
      $this->CacheInfoData = $CacheInfoData;
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
      return isset($this->CacheInfoData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CacheInfoData
     */
    public function offsetGet($offset)
    {
      return $this->CacheInfoData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CacheInfoData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CacheInfoData[] = $value;
      } else {
        $this->CacheInfoData[$offset] = $value;
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
      unset($this->CacheInfoData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CacheInfoData Return the current element
     */
    public function current()
    {
      return current($this->CacheInfoData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CacheInfoData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CacheInfoData);
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
      reset($this->CacheInfoData);
    }

    /**
     * Countable implementation
     *
     * @return CacheInfoData Return count of elements
     */
    public function count()
    {
      return count($this->CacheInfoData);
    }

}
