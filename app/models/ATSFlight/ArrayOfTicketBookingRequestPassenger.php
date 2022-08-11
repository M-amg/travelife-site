<?php

namespace App\models\ATSFlight;

class ArrayOfTicketBookingRequestPassenger implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TicketBookingRequestPassenger[] $TicketBookingRequestPassenger
     */
    protected $TicketBookingRequestPassenger = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TicketBookingRequestPassenger[]
     */
    public function getTicketBookingRequestPassenger()
    {
      return $this->TicketBookingRequestPassenger;
    }

    /**
     * @param TicketBookingRequestPassenger[] $TicketBookingRequestPassenger
     * @return \App\models\ATSFlight\ArrayOfTicketBookingRequestPassenger
     */
    public function setTicketBookingRequestPassenger(array $TicketBookingRequestPassenger = null)
    {
      $this->TicketBookingRequestPassenger = $TicketBookingRequestPassenger;
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
      return isset($this->TicketBookingRequestPassenger[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TicketBookingRequestPassenger
     */
    public function offsetGet($offset)
    {
      return $this->TicketBookingRequestPassenger[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TicketBookingRequestPassenger $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TicketBookingRequestPassenger[] = $value;
      } else {
        $this->TicketBookingRequestPassenger[$offset] = $value;
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
      unset($this->TicketBookingRequestPassenger[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TicketBookingRequestPassenger Return the current element
     */
    public function current()
    {
      return current($this->TicketBookingRequestPassenger);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TicketBookingRequestPassenger);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TicketBookingRequestPassenger);
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
      reset($this->TicketBookingRequestPassenger);
    }

    /**
     * Countable implementation
     *
     * @return TicketBookingRequestPassenger Return count of elements
     */
    public function count()
    {
      return count($this->TicketBookingRequestPassenger);
    }

}
