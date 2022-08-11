<?php

namespace App\models\ATSFlight;

class ArrayOfQuoteResponseExchangeRate implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var QuoteResponseExchangeRate[] $QuoteResponseExchangeRate
     */
    protected $QuoteResponseExchangeRate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return QuoteResponseExchangeRate[]
     */
    public function getQuoteResponseExchangeRate()
    {
      return $this->QuoteResponseExchangeRate;
    }

    /**
     * @param QuoteResponseExchangeRate[] $QuoteResponseExchangeRate
     * @return \App\models\ATSFlight\ArrayOfQuoteResponseExchangeRate
     */
    public function setQuoteResponseExchangeRate(array $QuoteResponseExchangeRate = null)
    {
      $this->QuoteResponseExchangeRate = $QuoteResponseExchangeRate;
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
      return isset($this->QuoteResponseExchangeRate[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return QuoteResponseExchangeRate
     */
    public function offsetGet($offset)
    {
      return $this->QuoteResponseExchangeRate[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param QuoteResponseExchangeRate $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->QuoteResponseExchangeRate[] = $value;
      } else {
        $this->QuoteResponseExchangeRate[$offset] = $value;
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
      unset($this->QuoteResponseExchangeRate[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return QuoteResponseExchangeRate Return the current element
     */
    public function current()
    {
      return current($this->QuoteResponseExchangeRate);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->QuoteResponseExchangeRate);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->QuoteResponseExchangeRate);
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
      reset($this->QuoteResponseExchangeRate);
    }

    /**
     * Countable implementation
     *
     * @return QuoteResponseExchangeRate Return count of elements
     */
    public function count()
    {
      return count($this->QuoteResponseExchangeRate);
    }

}
