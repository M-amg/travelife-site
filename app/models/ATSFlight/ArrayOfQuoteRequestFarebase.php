<?php

namespace App\models\ATSFlight;

class ArrayOfQuoteRequestFarebase implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var QuoteRequestFarebase[] $QuoteRequestFarebase
     */
    protected $QuoteRequestFarebase = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return QuoteRequestFarebase[]
     */
    public function getQuoteRequestFarebase()
    {
      return $this->QuoteRequestFarebase;
    }

    /**
     * @param QuoteRequestFarebase[] $QuoteRequestFarebase
     * @return \App\models\ATSFlight\ArrayOfQuoteRequestFarebase
     */
    public function setQuoteRequestFarebase(array $QuoteRequestFarebase = null)
    {
      $this->QuoteRequestFarebase = $QuoteRequestFarebase;
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
      return isset($this->QuoteRequestFarebase[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return QuoteRequestFarebase
     */
    public function offsetGet($offset)
    {
      return $this->QuoteRequestFarebase[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param QuoteRequestFarebase $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->QuoteRequestFarebase[] = $value;
      } else {
        $this->QuoteRequestFarebase[$offset] = $value;
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
      unset($this->QuoteRequestFarebase[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return QuoteRequestFarebase Return the current element
     */
    public function current()
    {
      return current($this->QuoteRequestFarebase);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->QuoteRequestFarebase);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->QuoteRequestFarebase);
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
      reset($this->QuoteRequestFarebase);
    }

    /**
     * Countable implementation
     *
     * @return QuoteRequestFarebase Return count of elements
     */
    public function count()
    {
      return count($this->QuoteRequestFarebase);
    }

}
