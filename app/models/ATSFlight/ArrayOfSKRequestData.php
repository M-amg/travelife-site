<?php

namespace App\models\ATSFlight;

class ArrayOfSKRequestData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SKRequestData[] $SKRequestData
     */
    protected $SKRequestData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SKRequestData[]
     */
    public function getSKRequestData()
    {
      return $this->SKRequestData;
    }

    /**
     * @param SKRequestData[] $SKRequestData
     * @return \App\models\ATSFlight\ArrayOfSKRequestData
     */
    public function setSKRequestData(array $SKRequestData = null)
    {
      $this->SKRequestData = $SKRequestData;
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
      return isset($this->SKRequestData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SKRequestData
     */
    public function offsetGet($offset)
    {
      return $this->SKRequestData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SKRequestData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SKRequestData[] = $value;
      } else {
        $this->SKRequestData[$offset] = $value;
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
      unset($this->SKRequestData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SKRequestData Return the current element
     */
    public function current()
    {
      return current($this->SKRequestData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SKRequestData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SKRequestData);
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
      reset($this->SKRequestData);
    }

    /**
     * Countable implementation
     *
     * @return SKRequestData Return count of elements
     */
    public function count()
    {
      return count($this->SKRequestData);
    }

}
