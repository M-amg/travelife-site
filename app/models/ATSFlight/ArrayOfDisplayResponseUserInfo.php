<?php

namespace App\models\ATSFlight;

class ArrayOfDisplayResponseUserInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DisplayResponseUserInfo[] $DisplayResponseUserInfo
     */
    protected $DisplayResponseUserInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DisplayResponseUserInfo[]
     */
    public function getDisplayResponseUserInfo()
    {
      return $this->DisplayResponseUserInfo;
    }

    /**
     * @param DisplayResponseUserInfo[] $DisplayResponseUserInfo
     * @return \App\models\ATSFlight\ArrayOfDisplayResponseUserInfo
     */
    public function setDisplayResponseUserInfo(array $DisplayResponseUserInfo = null)
    {
      $this->DisplayResponseUserInfo = $DisplayResponseUserInfo;
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
      return isset($this->DisplayResponseUserInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DisplayResponseUserInfo
     */
    public function offsetGet($offset)
    {
      return $this->DisplayResponseUserInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DisplayResponseUserInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DisplayResponseUserInfo[] = $value;
      } else {
        $this->DisplayResponseUserInfo[$offset] = $value;
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
      unset($this->DisplayResponseUserInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DisplayResponseUserInfo Return the current element
     */
    public function current()
    {
      return current($this->DisplayResponseUserInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DisplayResponseUserInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DisplayResponseUserInfo);
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
      reset($this->DisplayResponseUserInfo);
    }

    /**
     * Countable implementation
     *
     * @return DisplayResponseUserInfo Return count of elements
     */
    public function count()
    {
      return count($this->DisplayResponseUserInfo);
    }

}
