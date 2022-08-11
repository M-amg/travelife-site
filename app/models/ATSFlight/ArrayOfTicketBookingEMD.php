<?php

namespace App\models\ATSFlight;

class ArrayOfTicketBookingEMD implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TicketBookingEMD[] $TicketBookingEMD
     */
    protected $TicketBookingEMD = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TicketBookingEMD[]
     */
    public function getTicketBookingEMD()
    {
      return $this->TicketBookingEMD;
    }

    /**
     * @param TicketBookingEMD[] $TicketBookingEMD
     * @return \App\models\ATSFlight\ArrayOfTicketBookingEMD
     */
    public function setTicketBookingEMD(array $TicketBookingEMD = null)
    {
      $this->TicketBookingEMD = $TicketBookingEMD;
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
      return isset($this->TicketBookingEMD[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TicketBookingEMD
     */
    public function offsetGet($offset)
    {
      return $this->TicketBookingEMD[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TicketBookingEMD $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TicketBookingEMD[] = $value;
      } else {
        $this->TicketBookingEMD[$offset] = $value;
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
      unset($this->TicketBookingEMD[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TicketBookingEMD Return the current element
     */
    public function current()
    {
      return current($this->TicketBookingEMD);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TicketBookingEMD);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TicketBookingEMD);
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
      reset($this->TicketBookingEMD);
    }

    /**
     * Countable implementation
     *
     * @return TicketBookingEMD Return count of elements
     */
    public function count()
    {
      return count($this->TicketBookingEMD);
    }

}
