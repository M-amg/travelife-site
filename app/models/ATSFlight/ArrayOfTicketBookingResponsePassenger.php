<?php

namespace App\models\ATSFlight;

class ArrayOfTicketBookingResponsePassenger implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TicketBookingResponsePassenger[] $TicketBookingResponsePassenger
     */
    protected $TicketBookingResponsePassenger = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TicketBookingResponsePassenger[]
     */
    public function getTicketBookingResponsePassenger()
    {
      return $this->TicketBookingResponsePassenger;
    }

    /**
     * @param TicketBookingResponsePassenger[] $TicketBookingResponsePassenger
     * @return \App\models\ATSFlight\ArrayOfTicketBookingResponsePassenger
     */
    public function setTicketBookingResponsePassenger(array $TicketBookingResponsePassenger = null)
    {
      $this->TicketBookingResponsePassenger = $TicketBookingResponsePassenger;
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
      return isset($this->TicketBookingResponsePassenger[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TicketBookingResponsePassenger
     */
    public function offsetGet($offset)
    {
      return $this->TicketBookingResponsePassenger[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TicketBookingResponsePassenger $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TicketBookingResponsePassenger[] = $value;
      } else {
        $this->TicketBookingResponsePassenger[$offset] = $value;
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
      unset($this->TicketBookingResponsePassenger[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TicketBookingResponsePassenger Return the current element
     */
    public function current()
    {
      return current($this->TicketBookingResponsePassenger);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TicketBookingResponsePassenger);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TicketBookingResponsePassenger);
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
      reset($this->TicketBookingResponsePassenger);
    }

    /**
     * Countable implementation
     *
     * @return TicketBookingResponsePassenger Return count of elements
     */
    public function count()
    {
      return count($this->TicketBookingResponsePassenger);
    }

}
