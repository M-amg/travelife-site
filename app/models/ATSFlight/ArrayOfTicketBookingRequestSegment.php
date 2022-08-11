<?php

namespace App\models\ATSFlight;

class ArrayOfTicketBookingRequestSegment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TicketBookingRequestSegment[] $TicketBookingRequestSegment
     */
    protected $TicketBookingRequestSegment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TicketBookingRequestSegment[]
     */
    public function getTicketBookingRequestSegment()
    {
      return $this->TicketBookingRequestSegment;
    }

    /**
     * @param TicketBookingRequestSegment[] $TicketBookingRequestSegment
     * @return \App\models\ATSFlight\ArrayOfTicketBookingRequestSegment
     */
    public function setTicketBookingRequestSegment(array $TicketBookingRequestSegment = null)
    {
      $this->TicketBookingRequestSegment = $TicketBookingRequestSegment;
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
      return isset($this->TicketBookingRequestSegment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TicketBookingRequestSegment
     */
    public function offsetGet($offset)
    {
      return $this->TicketBookingRequestSegment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TicketBookingRequestSegment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TicketBookingRequestSegment[] = $value;
      } else {
        $this->TicketBookingRequestSegment[$offset] = $value;
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
      unset($this->TicketBookingRequestSegment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TicketBookingRequestSegment Return the current element
     */
    public function current()
    {
      return current($this->TicketBookingRequestSegment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TicketBookingRequestSegment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TicketBookingRequestSegment);
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
      reset($this->TicketBookingRequestSegment);
    }

    /**
     * Countable implementation
     *
     * @return TicketBookingRequestSegment Return count of elements
     */
    public function count()
    {
      return count($this->TicketBookingRequestSegment);
    }

}
