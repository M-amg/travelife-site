<?php

namespace App\models\ATSFlight;

class ArrayOfQuoteTicketResponseLeg implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var QuoteTicketResponseLeg[] $QuoteTicketResponseLeg
     */
    protected $QuoteTicketResponseLeg = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return QuoteTicketResponseLeg[]
     */
    public function getQuoteTicketResponseLeg()
    {
      return $this->QuoteTicketResponseLeg;
    }

    /**
     * @param QuoteTicketResponseLeg[] $QuoteTicketResponseLeg
     * @return \App\models\ATSFlight\ArrayOfQuoteTicketResponseLeg
     */
    public function setQuoteTicketResponseLeg(array $QuoteTicketResponseLeg = null)
    {
      $this->QuoteTicketResponseLeg = $QuoteTicketResponseLeg;
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
      return isset($this->QuoteTicketResponseLeg[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return QuoteTicketResponseLeg
     */
    public function offsetGet($offset)
    {
      return $this->QuoteTicketResponseLeg[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param QuoteTicketResponseLeg $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->QuoteTicketResponseLeg[] = $value;
      } else {
        $this->QuoteTicketResponseLeg[$offset] = $value;
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
      unset($this->QuoteTicketResponseLeg[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return QuoteTicketResponseLeg Return the current element
     */
    public function current()
    {
      return current($this->QuoteTicketResponseLeg);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->QuoteTicketResponseLeg);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->QuoteTicketResponseLeg);
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
      reset($this->QuoteTicketResponseLeg);
    }

    /**
     * Countable implementation
     *
     * @return QuoteTicketResponseLeg Return count of elements
     */
    public function count()
    {
      return count($this->QuoteTicketResponseLeg);
    }

}
