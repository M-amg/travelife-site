<?php

namespace App\models\ATSFlight;

class ArrayOfQuoteResponsePassenger implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var QuoteResponsePassenger[] $QuoteResponsePassenger
     */
    protected $QuoteResponsePassenger = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return QuoteResponsePassenger[]
     */
    public function getQuoteResponsePassenger()
    {
      return $this->QuoteResponsePassenger;
    }

    /**
     * @param QuoteResponsePassenger[] $QuoteResponsePassenger
     * @return \App\models\ATSFlight\ArrayOfQuoteResponsePassenger
     */
    public function setQuoteResponsePassenger(array $QuoteResponsePassenger = null)
    {
      $this->QuoteResponsePassenger = $QuoteResponsePassenger;
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
      return isset($this->QuoteResponsePassenger[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return QuoteResponsePassenger
     */
    public function offsetGet($offset)
    {
      return $this->QuoteResponsePassenger[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param QuoteResponsePassenger $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->QuoteResponsePassenger[] = $value;
      } else {
        $this->QuoteResponsePassenger[$offset] = $value;
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
      unset($this->QuoteResponsePassenger[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return QuoteResponsePassenger Return the current element
     */
    public function current()
    {
      return current($this->QuoteResponsePassenger);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->QuoteResponsePassenger);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->QuoteResponsePassenger);
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
      reset($this->QuoteResponsePassenger);
    }

    /**
     * Countable implementation
     *
     * @return QuoteResponsePassenger Return count of elements
     */
    public function count()
    {
      return count($this->QuoteResponsePassenger);
    }

}
