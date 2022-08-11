<?php

namespace App\models\ATSFlight;

class ArrayOfCancelRequestPassengerData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CancelRequestPassengerData[] $CancelRequestPassengerData
     */
    protected $CancelRequestPassengerData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CancelRequestPassengerData[]
     */
    public function getCancelRequestPassengerData()
    {
      return $this->CancelRequestPassengerData;
    }

    /**
     * @param CancelRequestPassengerData[] $CancelRequestPassengerData
     * @return \App\models\ATSFlight\ArrayOfCancelRequestPassengerData
     */
    public function setCancelRequestPassengerData(array $CancelRequestPassengerData = null)
    {
      $this->CancelRequestPassengerData = $CancelRequestPassengerData;
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
      return isset($this->CancelRequestPassengerData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CancelRequestPassengerData
     */
    public function offsetGet($offset)
    {
      return $this->CancelRequestPassengerData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CancelRequestPassengerData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CancelRequestPassengerData[] = $value;
      } else {
        $this->CancelRequestPassengerData[$offset] = $value;
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
      unset($this->CancelRequestPassengerData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CancelRequestPassengerData Return the current element
     */
    public function current()
    {
      return current($this->CancelRequestPassengerData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CancelRequestPassengerData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CancelRequestPassengerData);
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
      reset($this->CancelRequestPassengerData);
    }

    /**
     * Countable implementation
     *
     * @return CancelRequestPassengerData Return count of elements
     */
    public function count()
    {
      return count($this->CancelRequestPassengerData);
    }

}
