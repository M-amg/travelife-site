<?php

namespace App\models\ATSFlight;

class ArrayOfCancelResponsePassenger implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CancelResponsePassenger[] $CancelResponsePassenger
     */
    protected $CancelResponsePassenger = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CancelResponsePassenger[]
     */
    public function getCancelResponsePassenger()
    {
      return $this->CancelResponsePassenger;
    }

    /**
     * @param CancelResponsePassenger[] $CancelResponsePassenger
     * @return \App\models\ATSFlight\ArrayOfCancelResponsePassenger
     */
    public function setCancelResponsePassenger(array $CancelResponsePassenger = null)
    {
      $this->CancelResponsePassenger = $CancelResponsePassenger;
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
      return isset($this->CancelResponsePassenger[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CancelResponsePassenger
     */
    public function offsetGet($offset)
    {
      return $this->CancelResponsePassenger[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CancelResponsePassenger $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CancelResponsePassenger[] = $value;
      } else {
        $this->CancelResponsePassenger[$offset] = $value;
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
      unset($this->CancelResponsePassenger[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CancelResponsePassenger Return the current element
     */
    public function current()
    {
      return current($this->CancelResponsePassenger);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CancelResponsePassenger);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CancelResponsePassenger);
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
      reset($this->CancelResponsePassenger);
    }

    /**
     * Countable implementation
     *
     * @return CancelResponsePassenger Return count of elements
     */
    public function count()
    {
      return count($this->CancelResponsePassenger);
    }

}
