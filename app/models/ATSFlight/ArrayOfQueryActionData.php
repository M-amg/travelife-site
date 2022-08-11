<?php

namespace App\models\ATSFlight;

class ArrayOfQueryActionData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var QueryActionData[] $QueryActionData
     */
    protected $QueryActionData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return QueryActionData[]
     */
    public function getQueryActionData()
    {
      return $this->QueryActionData;
    }

    /**
     * @param QueryActionData[] $QueryActionData
     * @return \App\models\ATSFlight\ArrayOfQueryActionData
     */
    public function setQueryActionData(array $QueryActionData = null)
    {
      $this->QueryActionData = $QueryActionData;
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
      return isset($this->QueryActionData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return QueryActionData
     */
    public function offsetGet($offset)
    {
      return $this->QueryActionData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param QueryActionData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->QueryActionData[] = $value;
      } else {
        $this->QueryActionData[$offset] = $value;
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
      unset($this->QueryActionData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return QueryActionData Return the current element
     */
    public function current()
    {
      return current($this->QueryActionData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->QueryActionData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->QueryActionData);
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
      reset($this->QueryActionData);
    }

    /**
     * Countable implementation
     *
     * @return QueryActionData Return count of elements
     */
    public function count()
    {
      return count($this->QueryActionData);
    }

}
