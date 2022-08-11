<?php

namespace App\models\ATSFlight;

class ArrayOfVersionData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var VersionData[] $VersionData
     */
    protected $VersionData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return VersionData[]
     */
    public function getVersionData()
    {
      return $this->VersionData;
    }

    /**
     * @param VersionData[] $VersionData
     * @return \App\models\ATSFlight\ArrayOfVersionData
     */
    public function setVersionData(array $VersionData = null)
    {
      $this->VersionData = $VersionData;
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
      return isset($this->VersionData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return VersionData
     */
    public function offsetGet($offset)
    {
      return $this->VersionData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param VersionData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->VersionData[] = $value;
      } else {
        $this->VersionData[$offset] = $value;
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
      unset($this->VersionData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return VersionData Return the current element
     */
    public function current()
    {
      return current($this->VersionData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->VersionData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->VersionData);
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
      reset($this->VersionData);
    }

    /**
     * Countable implementation
     *
     * @return VersionData Return count of elements
     */
    public function count()
    {
      return count($this->VersionData);
    }

}
