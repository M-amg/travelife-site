<?php

namespace App\models\ATSFlight;

class ArrayOfCancelRequestContactData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CancelRequestContactData[] $CancelRequestContactData
     */
    protected $CancelRequestContactData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CancelRequestContactData[]
     */
    public function getCancelRequestContactData()
    {
      return $this->CancelRequestContactData;
    }

    /**
     * @param CancelRequestContactData[] $CancelRequestContactData
     * @return \App\models\ATSFlight\ArrayOfCancelRequestContactData
     */
    public function setCancelRequestContactData(array $CancelRequestContactData = null)
    {
      $this->CancelRequestContactData = $CancelRequestContactData;
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
      return isset($this->CancelRequestContactData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CancelRequestContactData
     */
    public function offsetGet($offset)
    {
      return $this->CancelRequestContactData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CancelRequestContactData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CancelRequestContactData[] = $value;
      } else {
        $this->CancelRequestContactData[$offset] = $value;
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
      unset($this->CancelRequestContactData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CancelRequestContactData Return the current element
     */
    public function current()
    {
      return current($this->CancelRequestContactData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CancelRequestContactData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CancelRequestContactData);
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
      reset($this->CancelRequestContactData);
    }

    /**
     * Countable implementation
     *
     * @return CancelRequestContactData Return count of elements
     */
    public function count()
    {
      return count($this->CancelRequestContactData);
    }

}
