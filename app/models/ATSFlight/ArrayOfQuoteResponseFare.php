<?php

namespace App\models\ATSFlight;

class ArrayOfQuoteResponseFare implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var QuoteResponseFare[] $QuoteResponseFare
     */
    protected $QuoteResponseFare = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return QuoteResponseFare[]
     */
    public function getQuoteResponseFare()
    {
      return $this->QuoteResponseFare;
    }

    /**
     * @param QuoteResponseFare[] $QuoteResponseFare
     * @return \App\models\ATSFlight\ArrayOfQuoteResponseFare
     */
    public function setQuoteResponseFare(array $QuoteResponseFare = null)
    {
      $this->QuoteResponseFare = $QuoteResponseFare;
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
      return isset($this->QuoteResponseFare[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return QuoteResponseFare
     */
    public function offsetGet($offset)
    {
      return $this->QuoteResponseFare[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param QuoteResponseFare $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->QuoteResponseFare[] = $value;
      } else {
        $this->QuoteResponseFare[$offset] = $value;
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
      unset($this->QuoteResponseFare[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return QuoteResponseFare Return the current element
     */
    public function current()
    {
      return current($this->QuoteResponseFare);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->QuoteResponseFare);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->QuoteResponseFare);
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
      reset($this->QuoteResponseFare);
    }

    /**
     * Countable implementation
     *
     * @return QuoteResponseFare Return count of elements
     */
    public function count()
    {
      return count($this->QuoteResponseFare);
    }

}
