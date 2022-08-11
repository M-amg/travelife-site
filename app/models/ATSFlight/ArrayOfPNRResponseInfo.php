<?php

namespace App\models\ATSFlight;

class ArrayOfPNRResponseInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PNRResponseInfo[] $PNRResponseInfo
     */
    protected $PNRResponseInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PNRResponseInfo[]
     */
    public function getPNRResponseInfo()
    {
      return $this->PNRResponseInfo;
    }

    /**
     * @param PNRResponseInfo[] $PNRResponseInfo
     * @return \App\models\ATSFlight\ArrayOfPNRResponseInfo
     */
    public function setPNRResponseInfo(array $PNRResponseInfo = null)
    {
      $this->PNRResponseInfo = $PNRResponseInfo;
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
      return isset($this->PNRResponseInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PNRResponseInfo
     */
    public function offsetGet($offset)
    {
      return $this->PNRResponseInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PNRResponseInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PNRResponseInfo[] = $value;
      } else {
        $this->PNRResponseInfo[$offset] = $value;
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
      unset($this->PNRResponseInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PNRResponseInfo Return the current element
     */
    public function current()
    {
      return current($this->PNRResponseInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PNRResponseInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PNRResponseInfo);
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
      reset($this->PNRResponseInfo);
    }

    /**
     * Countable implementation
     *
     * @return PNRResponseInfo Return count of elements
     */
    public function count()
    {
      return count($this->PNRResponseInfo);
    }

}
