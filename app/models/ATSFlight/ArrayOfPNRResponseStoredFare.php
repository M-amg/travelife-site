<?php

namespace App\models\ATSFlight;

class ArrayOfPNRResponseStoredFare implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PNRResponseStoredFare[] $PNRResponseStoredFare
     */
    protected $PNRResponseStoredFare = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PNRResponseStoredFare[]
     */
    public function getPNRResponseStoredFare()
    {
      return $this->PNRResponseStoredFare;
    }

    /**
     * @param PNRResponseStoredFare[] $PNRResponseStoredFare
     * @return \App\models\ATSFlight\ArrayOfPNRResponseStoredFare
     */
    public function setPNRResponseStoredFare(array $PNRResponseStoredFare = null)
    {
      $this->PNRResponseStoredFare = $PNRResponseStoredFare;
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
      return isset($this->PNRResponseStoredFare[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PNRResponseStoredFare
     */
    public function offsetGet($offset)
    {
      return $this->PNRResponseStoredFare[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PNRResponseStoredFare $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PNRResponseStoredFare[] = $value;
      } else {
        $this->PNRResponseStoredFare[$offset] = $value;
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
      unset($this->PNRResponseStoredFare[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PNRResponseStoredFare Return the current element
     */
    public function current()
    {
      return current($this->PNRResponseStoredFare);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PNRResponseStoredFare);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PNRResponseStoredFare);
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
      reset($this->PNRResponseStoredFare);
    }

    /**
     * Countable implementation
     *
     * @return PNRResponseStoredFare Return count of elements
     */
    public function count()
    {
      return count($this->PNRResponseStoredFare);
    }

}
