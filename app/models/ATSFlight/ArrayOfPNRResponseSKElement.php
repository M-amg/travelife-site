<?php

namespace App\models\ATSFlight;

class ArrayOfPNRResponseSKElement implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PNRResponseSKElement[] $PNRResponseSKElement
     */
    protected $PNRResponseSKElement = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PNRResponseSKElement[]
     */
    public function getPNRResponseSKElement()
    {
      return $this->PNRResponseSKElement;
    }

    /**
     * @param PNRResponseSKElement[] $PNRResponseSKElement
     * @return \App\models\ATSFlight\ArrayOfPNRResponseSKElement
     */
    public function setPNRResponseSKElement(array $PNRResponseSKElement = null)
    {
      $this->PNRResponseSKElement = $PNRResponseSKElement;
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
      return isset($this->PNRResponseSKElement[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PNRResponseSKElement
     */
    public function offsetGet($offset)
    {
      return $this->PNRResponseSKElement[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PNRResponseSKElement $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PNRResponseSKElement[] = $value;
      } else {
        $this->PNRResponseSKElement[$offset] = $value;
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
      unset($this->PNRResponseSKElement[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PNRResponseSKElement Return the current element
     */
    public function current()
    {
      return current($this->PNRResponseSKElement);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PNRResponseSKElement);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PNRResponseSKElement);
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
      reset($this->PNRResponseSKElement);
    }

    /**
     * Countable implementation
     *
     * @return PNRResponseSKElement Return count of elements
     */
    public function count()
    {
      return count($this->PNRResponseSKElement);
    }

}
