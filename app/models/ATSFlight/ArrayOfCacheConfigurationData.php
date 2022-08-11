<?php

namespace App\models\ATSFlight;

class ArrayOfCacheConfigurationData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CacheConfigurationData[] $CacheConfigurationData
     */
    protected $CacheConfigurationData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CacheConfigurationData[]
     */
    public function getCacheConfigurationData()
    {
      return $this->CacheConfigurationData;
    }

    /**
     * @param CacheConfigurationData[] $CacheConfigurationData
     * @return \App\models\ATSFlight\ArrayOfCacheConfigurationData
     */
    public function setCacheConfigurationData(array $CacheConfigurationData = null)
    {
      $this->CacheConfigurationData = $CacheConfigurationData;
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
      return isset($this->CacheConfigurationData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CacheConfigurationData
     */
    public function offsetGet($offset)
    {
      return $this->CacheConfigurationData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CacheConfigurationData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CacheConfigurationData[] = $value;
      } else {
        $this->CacheConfigurationData[$offset] = $value;
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
      unset($this->CacheConfigurationData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CacheConfigurationData Return the current element
     */
    public function current()
    {
      return current($this->CacheConfigurationData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CacheConfigurationData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CacheConfigurationData);
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
      reset($this->CacheConfigurationData);
    }

    /**
     * Countable implementation
     *
     * @return CacheConfigurationData Return count of elements
     */
    public function count()
    {
      return count($this->CacheConfigurationData);
    }

}
