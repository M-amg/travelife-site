<?php

namespace App\models\ATSFlight;

class ArrayOfTicketBookingRequestAdvanced implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TicketBookingRequestAdvanced[] $TicketBookingRequestAdvanced
     */
    protected $TicketBookingRequestAdvanced = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TicketBookingRequestAdvanced[]
     */
    public function getTicketBookingRequestAdvanced()
    {
      return $this->TicketBookingRequestAdvanced;
    }

    /**
     * @param TicketBookingRequestAdvanced[] $TicketBookingRequestAdvanced
     * @return \App\models\ATSFlight\ArrayOfTicketBookingRequestAdvanced
     */
    public function setTicketBookingRequestAdvanced(array $TicketBookingRequestAdvanced = null)
    {
      $this->TicketBookingRequestAdvanced = $TicketBookingRequestAdvanced;
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
      return isset($this->TicketBookingRequestAdvanced[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TicketBookingRequestAdvanced
     */
    public function offsetGet($offset)
    {
      return $this->TicketBookingRequestAdvanced[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TicketBookingRequestAdvanced $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TicketBookingRequestAdvanced[] = $value;
      } else {
        $this->TicketBookingRequestAdvanced[$offset] = $value;
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
      unset($this->TicketBookingRequestAdvanced[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TicketBookingRequestAdvanced Return the current element
     */
    public function current()
    {
      return current($this->TicketBookingRequestAdvanced);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TicketBookingRequestAdvanced);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TicketBookingRequestAdvanced);
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
      reset($this->TicketBookingRequestAdvanced);
    }

    /**
     * Countable implementation
     *
     * @return TicketBookingRequestAdvanced Return count of elements
     */
    public function count()
    {
      return count($this->TicketBookingRequestAdvanced);
    }

}
