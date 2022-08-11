<?php

namespace App\models\ATSFlight;

class ArrayOfPNRResponseSeatPreferrence implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PNRResponseSeatPreferrence[] $PNRResponseSeatPreferrence
     */
    protected $PNRResponseSeatPreferrence = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PNRResponseSeatPreferrence[]
     */
    public function getPNRResponseSeatPreferrence()
    {
      return $this->PNRResponseSeatPreferrence;
    }

    /**
     * @param PNRResponseSeatPreferrence[] $PNRResponseSeatPreferrence
     * @return \App\models\ATSFlight\ArrayOfPNRResponseSeatPreferrence
     */
    public function setPNRResponseSeatPreferrence(array $PNRResponseSeatPreferrence = null)
    {
      $this->PNRResponseSeatPreferrence = $PNRResponseSeatPreferrence;
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
      return isset($this->PNRResponseSeatPreferrence[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PNRResponseSeatPreferrence
     */
    public function offsetGet($offset)
    {
      return $this->PNRResponseSeatPreferrence[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PNRResponseSeatPreferrence $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PNRResponseSeatPreferrence[] = $value;
      } else {
        $this->PNRResponseSeatPreferrence[$offset] = $value;
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
      unset($this->PNRResponseSeatPreferrence[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PNRResponseSeatPreferrence Return the current element
     */
    public function current()
    {
      return current($this->PNRResponseSeatPreferrence);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PNRResponseSeatPreferrence);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PNRResponseSeatPreferrence);
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
      reset($this->PNRResponseSeatPreferrence);
    }

    /**
     * Countable implementation
     *
     * @return PNRResponseSeatPreferrence Return count of elements
     */
    public function count()
    {
      return count($this->PNRResponseSeatPreferrence);
    }

}
