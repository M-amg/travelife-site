<?php

namespace App\models\ATSFlight;

class ArrayOfQuoteTicketResponseSeg implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var QuoteTicketResponseSeg[] $QuoteTicketResponseSeg
     */
    protected $QuoteTicketResponseSeg = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return QuoteTicketResponseSeg[]
     */
    public function getQuoteTicketResponseSeg()
    {
      return $this->QuoteTicketResponseSeg;
    }

    /**
     * @param QuoteTicketResponseSeg[] $QuoteTicketResponseSeg
     * @return \App\models\ATSFlight\ArrayOfQuoteTicketResponseSeg
     */
    public function setQuoteTicketResponseSeg(array $QuoteTicketResponseSeg = null)
    {
      $this->QuoteTicketResponseSeg = $QuoteTicketResponseSeg;
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
      return isset($this->QuoteTicketResponseSeg[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return QuoteTicketResponseSeg
     */
    public function offsetGet($offset)
    {
      return $this->QuoteTicketResponseSeg[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param QuoteTicketResponseSeg $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->QuoteTicketResponseSeg[] = $value;
      } else {
        $this->QuoteTicketResponseSeg[$offset] = $value;
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
      unset($this->QuoteTicketResponseSeg[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return QuoteTicketResponseSeg Return the current element
     */
    public function current()
    {
      return current($this->QuoteTicketResponseSeg);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->QuoteTicketResponseSeg);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->QuoteTicketResponseSeg);
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
      reset($this->QuoteTicketResponseSeg);
    }

    /**
     * Countable implementation
     *
     * @return QuoteTicketResponseSeg Return count of elements
     */
    public function count()
    {
      return count($this->QuoteTicketResponseSeg);
    }

}
