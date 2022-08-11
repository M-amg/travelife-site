<?php

namespace App\models\ATSFlight;

class ArrayOfQuoteResponseSurcharge implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var QuoteResponseSurcharge[] $QuoteResponseSurcharge
     */
    protected $QuoteResponseSurcharge = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return QuoteResponseSurcharge[]
     */
    public function getQuoteResponseSurcharge()
    {
      return $this->QuoteResponseSurcharge;
    }

    /**
     * @param QuoteResponseSurcharge[] $QuoteResponseSurcharge
     * @return \App\models\ATSFlight\ArrayOfQuoteResponseSurcharge
     */
    public function setQuoteResponseSurcharge(array $QuoteResponseSurcharge = null)
    {
      $this->QuoteResponseSurcharge = $QuoteResponseSurcharge;
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
      return isset($this->QuoteResponseSurcharge[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return QuoteResponseSurcharge
     */
    public function offsetGet($offset)
    {
      return $this->QuoteResponseSurcharge[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param QuoteResponseSurcharge $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->QuoteResponseSurcharge[] = $value;
      } else {
        $this->QuoteResponseSurcharge[$offset] = $value;
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
      unset($this->QuoteResponseSurcharge[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return QuoteResponseSurcharge Return the current element
     */
    public function current()
    {
      return current($this->QuoteResponseSurcharge);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->QuoteResponseSurcharge);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->QuoteResponseSurcharge);
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
      reset($this->QuoteResponseSurcharge);
    }

    /**
     * Countable implementation
     *
     * @return QuoteResponseSurcharge Return count of elements
     */
    public function count()
    {
      return count($this->QuoteResponseSurcharge);
    }

}
