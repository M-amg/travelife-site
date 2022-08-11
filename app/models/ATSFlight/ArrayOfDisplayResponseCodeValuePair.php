<?php

namespace App\models\ATSFlight;

class ArrayOfDisplayResponseCodeValuePair implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DisplayResponseCodeValuePair[] $DisplayResponseCodeValuePair
     */
    protected $DisplayResponseCodeValuePair = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DisplayResponseCodeValuePair[]
     */
    public function getDisplayResponseCodeValuePair()
    {
      return $this->DisplayResponseCodeValuePair;
    }

    /**
     * @param DisplayResponseCodeValuePair[] $DisplayResponseCodeValuePair
     * @return \App\models\ATSFlight\ArrayOfDisplayResponseCodeValuePair
     */
    public function setDisplayResponseCodeValuePair(array $DisplayResponseCodeValuePair = null)
    {
      $this->DisplayResponseCodeValuePair = $DisplayResponseCodeValuePair;
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
      return isset($this->DisplayResponseCodeValuePair[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DisplayResponseCodeValuePair
     */
    public function offsetGet($offset)
    {
      return $this->DisplayResponseCodeValuePair[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DisplayResponseCodeValuePair $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DisplayResponseCodeValuePair[] = $value;
      } else {
        $this->DisplayResponseCodeValuePair[$offset] = $value;
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
      unset($this->DisplayResponseCodeValuePair[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DisplayResponseCodeValuePair Return the current element
     */
    public function current()
    {
      return current($this->DisplayResponseCodeValuePair);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DisplayResponseCodeValuePair);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DisplayResponseCodeValuePair);
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
      reset($this->DisplayResponseCodeValuePair);
    }

    /**
     * Countable implementation
     *
     * @return DisplayResponseCodeValuePair Return count of elements
     */
    public function count()
    {
      return count($this->DisplayResponseCodeValuePair);
    }

}
