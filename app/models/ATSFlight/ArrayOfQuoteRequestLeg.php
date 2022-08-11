<?php

namespace App\models\ATSFlight;

class ArrayOfQuoteRequestLeg implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var QuoteRequestLeg[] $QuoteRequestLeg
     */
    protected $QuoteRequestLeg = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return QuoteRequestLeg[]
     */
    public function getQuoteRequestLeg()
    {
      return $this->QuoteRequestLeg;
    }

    /**
     * @param QuoteRequestLeg[] $QuoteRequestLeg
     * @return \App\models\ATSFlight\ArrayOfQuoteRequestLeg
     */
    public function setQuoteRequestLeg(array $QuoteRequestLeg = null)
    {
      $this->QuoteRequestLeg = $QuoteRequestLeg;
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
      return isset($this->QuoteRequestLeg[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return QuoteRequestLeg
     */
    public function offsetGet($offset)
    {
      return $this->QuoteRequestLeg[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param QuoteRequestLeg $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->QuoteRequestLeg[] = $value;
      } else {
        $this->QuoteRequestLeg[$offset] = $value;
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
      unset($this->QuoteRequestLeg[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return QuoteRequestLeg Return the current element
     */
    public function current()
    {
      return current($this->QuoteRequestLeg);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->QuoteRequestLeg);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->QuoteRequestLeg);
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
      reset($this->QuoteRequestLeg);
    }

    /**
     * Countable implementation
     *
     * @return QuoteRequestLeg Return count of elements
     */
    public function count()
    {
      return count($this->QuoteRequestLeg);
    }

}
