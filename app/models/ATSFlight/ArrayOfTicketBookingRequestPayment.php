<?php

namespace App\models\ATSFlight;

class ArrayOfTicketBookingRequestPayment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TicketBookingRequestPayment[] $TicketBookingRequestPayment
     */
    protected $TicketBookingRequestPayment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TicketBookingRequestPayment[]
     */
    public function getTicketBookingRequestPayment()
    {
      return $this->TicketBookingRequestPayment;
    }

    /**
     * @param TicketBookingRequestPayment[] $TicketBookingRequestPayment
     * @return \App\models\ATSFlight\ArrayOfTicketBookingRequestPayment
     */
    public function setTicketBookingRequestPayment(array $TicketBookingRequestPayment = null)
    {
      $this->TicketBookingRequestPayment = $TicketBookingRequestPayment;
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
      return isset($this->TicketBookingRequestPayment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TicketBookingRequestPayment
     */
    public function offsetGet($offset)
    {
      return $this->TicketBookingRequestPayment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TicketBookingRequestPayment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TicketBookingRequestPayment[] = $value;
      } else {
        $this->TicketBookingRequestPayment[$offset] = $value;
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
      unset($this->TicketBookingRequestPayment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TicketBookingRequestPayment Return the current element
     */
    public function current()
    {
      return current($this->TicketBookingRequestPayment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TicketBookingRequestPayment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TicketBookingRequestPayment);
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
      reset($this->TicketBookingRequestPayment);
    }

    /**
     * Countable implementation
     *
     * @return TicketBookingRequestPayment Return count of elements
     */
    public function count()
    {
      return count($this->TicketBookingRequestPayment);
    }

}
