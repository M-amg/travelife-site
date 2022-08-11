<?php

namespace App\models\ATSFlight;

class ArrayOfQuoteResponseSegment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var QuoteResponseSegment[] $QuoteResponseSegment
     */
    protected $QuoteResponseSegment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return QuoteResponseSegment[]
     */
    public function getQuoteResponseSegment()
    {
      return $this->QuoteResponseSegment;
    }

    /**
     * @param QuoteResponseSegment[] $QuoteResponseSegment
     * @return \App\models\ATSFlight\ArrayOfQuoteResponseSegment
     */
    public function setQuoteResponseSegment(array $QuoteResponseSegment = null)
    {
      $this->QuoteResponseSegment = $QuoteResponseSegment;
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
      return isset($this->QuoteResponseSegment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return QuoteResponseSegment
     */
    public function offsetGet($offset)
    {
      return $this->QuoteResponseSegment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param QuoteResponseSegment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->QuoteResponseSegment[] = $value;
      } else {
        $this->QuoteResponseSegment[$offset] = $value;
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
      unset($this->QuoteResponseSegment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return QuoteResponseSegment Return the current element
     */
    public function current()
    {
      return current($this->QuoteResponseSegment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->QuoteResponseSegment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->QuoteResponseSegment);
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
      reset($this->QuoteResponseSegment);
    }

    /**
     * Countable implementation
     *
     * @return QuoteResponseSegment Return count of elements
     */
    public function count()
    {
      return count($this->QuoteResponseSegment);
    }

}
