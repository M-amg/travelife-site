<?php

namespace App\models\ATSFlight;

class ArrayOfPNRResponseTax implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PNRResponseTax[] $PNRResponseTax
     */
    protected $PNRResponseTax = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PNRResponseTax[]
     */
    public function getPNRResponseTax()
    {
      return $this->PNRResponseTax;
    }

    /**
     * @param PNRResponseTax[] $PNRResponseTax
     * @return \App\models\ATSFlight\ArrayOfPNRResponseTax
     */
    public function setPNRResponseTax(array $PNRResponseTax = null)
    {
      $this->PNRResponseTax = $PNRResponseTax;
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
      return isset($this->PNRResponseTax[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PNRResponseTax
     */
    public function offsetGet($offset)
    {
      return $this->PNRResponseTax[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PNRResponseTax $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PNRResponseTax[] = $value;
      } else {
        $this->PNRResponseTax[$offset] = $value;
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
      unset($this->PNRResponseTax[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PNRResponseTax Return the current element
     */
    public function current()
    {
      return current($this->PNRResponseTax);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PNRResponseTax);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PNRResponseTax);
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
      reset($this->PNRResponseTax);
    }

    /**
     * Countable implementation
     *
     * @return PNRResponseTax Return count of elements
     */
    public function count()
    {
      return count($this->PNRResponseTax);
    }

}
