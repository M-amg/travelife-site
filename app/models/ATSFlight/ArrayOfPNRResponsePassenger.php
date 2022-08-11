<?php

namespace App\models\ATSFlight;

class ArrayOfPNRResponsePassenger implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PNRResponsePassenger[] $PNRResponsePassenger
     */
    protected $PNRResponsePassenger = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PNRResponsePassenger[]
     */
    public function getPNRResponsePassenger()
    {
      return $this->PNRResponsePassenger;
    }

    /**
     * @param PNRResponsePassenger[] $PNRResponsePassenger
     * @return \App\models\ATSFlight\ArrayOfPNRResponsePassenger
     */
    public function setPNRResponsePassenger(array $PNRResponsePassenger = null)
    {
      $this->PNRResponsePassenger = $PNRResponsePassenger;
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
      return isset($this->PNRResponsePassenger[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PNRResponsePassenger
     */
    public function offsetGet($offset)
    {
      return $this->PNRResponsePassenger[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PNRResponsePassenger $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PNRResponsePassenger[] = $value;
      } else {
        $this->PNRResponsePassenger[$offset] = $value;
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
      unset($this->PNRResponsePassenger[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PNRResponsePassenger Return the current element
     */
    public function current()
    {
      return current($this->PNRResponsePassenger);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PNRResponsePassenger);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PNRResponsePassenger);
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
      reset($this->PNRResponsePassenger);
    }

    /**
     * Countable implementation
     *
     * @return PNRResponsePassenger Return count of elements
     */
    public function count()
    {
      return count($this->PNRResponsePassenger);
    }

}
