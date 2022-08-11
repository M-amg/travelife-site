<?php

namespace App\models\ATSFlight;

class ArrayOfQuoteRequestSegment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var QuoteRequestSegment[] $QuoteRequestSegment
     */
    protected $QuoteRequestSegment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return QuoteRequestSegment[]
     */
    public function getQuoteRequestSegment()
    {
      return $this->QuoteRequestSegment;
    }

    /**
     * @param QuoteRequestSegment[] $QuoteRequestSegment
     * @return \App\models\ATSFlight\ArrayOfQuoteRequestSegment
     */
    public function setQuoteRequestSegment(array $QuoteRequestSegment = null)
    {
      $this->QuoteRequestSegment = $QuoteRequestSegment;
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
      return isset($this->QuoteRequestSegment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return QuoteRequestSegment
     */
    public function offsetGet($offset)
    {
      return $this->QuoteRequestSegment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param QuoteRequestSegment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->QuoteRequestSegment[] = $value;
      } else {
        $this->QuoteRequestSegment[$offset] = $value;
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
      unset($this->QuoteRequestSegment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return QuoteRequestSegment Return the current element
     */
    public function current()
    {
      return current($this->QuoteRequestSegment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->QuoteRequestSegment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->QuoteRequestSegment);
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
      reset($this->QuoteRequestSegment);
    }

    /**
     * Countable implementation
     *
     * @return QuoteRequestSegment Return count of elements
     */
    public function count()
    {
      return count($this->QuoteRequestSegment);
    }

}
