<?php

namespace App\models\ATSFlight;

class ArrayOfPNRResponsePhone implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PNRResponsePhone[] $PNRResponsePhone
     */
    protected $PNRResponsePhone = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PNRResponsePhone[]
     */
    public function getPNRResponsePhone()
    {
      return $this->PNRResponsePhone;
    }

    /**
     * @param PNRResponsePhone[] $PNRResponsePhone
     * @return \App\models\ATSFlight\ArrayOfPNRResponsePhone
     */
    public function setPNRResponsePhone(array $PNRResponsePhone = null)
    {
      $this->PNRResponsePhone = $PNRResponsePhone;
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
      return isset($this->PNRResponsePhone[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PNRResponsePhone
     */
    public function offsetGet($offset)
    {
      return $this->PNRResponsePhone[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PNRResponsePhone $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PNRResponsePhone[] = $value;
      } else {
        $this->PNRResponsePhone[$offset] = $value;
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
      unset($this->PNRResponsePhone[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PNRResponsePhone Return the current element
     */
    public function current()
    {
      return current($this->PNRResponsePhone);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PNRResponsePhone);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PNRResponsePhone);
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
      reset($this->PNRResponsePhone);
    }

    /**
     * Countable implementation
     *
     * @return PNRResponsePhone Return count of elements
     */
    public function count()
    {
      return count($this->PNRResponsePhone);
    }

}
