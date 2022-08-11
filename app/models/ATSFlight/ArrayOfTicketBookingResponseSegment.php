<?php

namespace App\models\ATSFlight;

class ArrayOfTicketBookingResponseSegment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TicketBookingResponseSegment[] $TicketBookingResponseSegment
     */
    protected $TicketBookingResponseSegment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TicketBookingResponseSegment[]
     */
    public function getTicketBookingResponseSegment()
    {
      return $this->TicketBookingResponseSegment;
    }

    /**
     * @param TicketBookingResponseSegment[] $TicketBookingResponseSegment
     * @return \App\models\ATSFlight\ArrayOfTicketBookingResponseSegment
     */
    public function setTicketBookingResponseSegment(array $TicketBookingResponseSegment = null)
    {
      $this->TicketBookingResponseSegment = $TicketBookingResponseSegment;
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
      return isset($this->TicketBookingResponseSegment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TicketBookingResponseSegment
     */
    public function offsetGet($offset)
    {
      return $this->TicketBookingResponseSegment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TicketBookingResponseSegment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TicketBookingResponseSegment[] = $value;
      } else {
        $this->TicketBookingResponseSegment[$offset] = $value;
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
      unset($this->TicketBookingResponseSegment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TicketBookingResponseSegment Return the current element
     */
    public function current()
    {
      return current($this->TicketBookingResponseSegment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TicketBookingResponseSegment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TicketBookingResponseSegment);
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
      reset($this->TicketBookingResponseSegment);
    }

    /**
     * Countable implementation
     *
     * @return TicketBookingResponseSegment Return count of elements
     */
    public function count()
    {
      return count($this->TicketBookingResponseSegment);
    }

}
