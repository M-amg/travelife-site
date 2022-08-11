<?php

namespace App\models\ATSFlight;

class ArrayOfCancelResponsePNR implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CancelResponsePNR[] $CancelResponsePNR
     */
    protected $CancelResponsePNR = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CancelResponsePNR[]
     */
    public function getCancelResponsePNR()
    {
      return $this->CancelResponsePNR;
    }

    /**
     * @param CancelResponsePNR[] $CancelResponsePNR
     * @return \App\models\ATSFlight\ArrayOfCancelResponsePNR
     */
    public function setCancelResponsePNR(array $CancelResponsePNR = null)
    {
      $this->CancelResponsePNR = $CancelResponsePNR;
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
      return isset($this->CancelResponsePNR[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CancelResponsePNR
     */
    public function offsetGet($offset)
    {
      return $this->CancelResponsePNR[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CancelResponsePNR $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CancelResponsePNR[] = $value;
      } else {
        $this->CancelResponsePNR[$offset] = $value;
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
      unset($this->CancelResponsePNR[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CancelResponsePNR Return the current element
     */
    public function current()
    {
      return current($this->CancelResponsePNR);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CancelResponsePNR);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CancelResponsePNR);
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
      reset($this->CancelResponsePNR);
    }

    /**
     * Countable implementation
     *
     * @return CancelResponsePNR Return count of elements
     */
    public function count()
    {
      return count($this->CancelResponsePNR);
    }

}
