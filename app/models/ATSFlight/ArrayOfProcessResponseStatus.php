<?php

namespace App\models\ATSFlight;

class ArrayOfProcessResponseStatus implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProcessResponseStatus[] $ProcessResponseStatus
     */
    protected $ProcessResponseStatus = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProcessResponseStatus[]
     */
    public function getProcessResponseStatus()
    {
      return $this->ProcessResponseStatus;
    }

    /**
     * @param ProcessResponseStatus[] $ProcessResponseStatus
     * @return \App\models\ATSFlight\ArrayOfProcessResponseStatus
     */
    public function setProcessResponseStatus(array $ProcessResponseStatus = null)
    {
      $this->ProcessResponseStatus = $ProcessResponseStatus;
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
      return isset($this->ProcessResponseStatus[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProcessResponseStatus
     */
    public function offsetGet($offset)
    {
      return $this->ProcessResponseStatus[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProcessResponseStatus $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ProcessResponseStatus[] = $value;
      } else {
        $this->ProcessResponseStatus[$offset] = $value;
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
      unset($this->ProcessResponseStatus[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProcessResponseStatus Return the current element
     */
    public function current()
    {
      return current($this->ProcessResponseStatus);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProcessResponseStatus);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProcessResponseStatus);
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
      reset($this->ProcessResponseStatus);
    }

    /**
     * Countable implementation
     *
     * @return ProcessResponseStatus Return count of elements
     */
    public function count()
    {
      return count($this->ProcessResponseStatus);
    }

}
