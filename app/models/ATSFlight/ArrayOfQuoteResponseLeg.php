<?php

namespace App\models\ATSFlight;

class ArrayOfQuoteResponseLeg implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var QuoteResponseLeg[] $QuoteResponseLeg
     */
    protected $QuoteResponseLeg = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return QuoteResponseLeg[]
     */
    public function getQuoteResponseLeg()
    {
      return $this->QuoteResponseLeg;
    }

    /**
     * @param QuoteResponseLeg[] $QuoteResponseLeg
     * @return \App\models\ATSFlight\ArrayOfQuoteResponseLeg
     */
    public function setQuoteResponseLeg(array $QuoteResponseLeg = null)
    {
      $this->QuoteResponseLeg = $QuoteResponseLeg;
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
      return isset($this->QuoteResponseLeg[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return QuoteResponseLeg
     */
    public function offsetGet($offset)
    {
      return $this->QuoteResponseLeg[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param QuoteResponseLeg $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->QuoteResponseLeg[] = $value;
      } else {
        $this->QuoteResponseLeg[$offset] = $value;
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
      unset($this->QuoteResponseLeg[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return QuoteResponseLeg Return the current element
     */
    public function current()
    {
      return current($this->QuoteResponseLeg);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->QuoteResponseLeg);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->QuoteResponseLeg);
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
      reset($this->QuoteResponseLeg);
    }

    /**
     * Countable implementation
     *
     * @return QuoteResponseLeg Return count of elements
     */
    public function count()
    {
      return count($this->QuoteResponseLeg);
    }

}
