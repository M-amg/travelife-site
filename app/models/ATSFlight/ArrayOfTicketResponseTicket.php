<?php

namespace App\models\ATSFlight;

class ArrayOfTicketResponseTicket implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TicketResponseTicket[] $TicketResponseTicket
     */
    protected $TicketResponseTicket = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TicketResponseTicket[]
     */
    public function getTicketResponseTicket()
    {
      return $this->TicketResponseTicket;
    }

    /**
     * @param TicketResponseTicket[] $TicketResponseTicket
     * @return \App\models\ATSFlight\ArrayOfTicketResponseTicket
     */
    public function setTicketResponseTicket(array $TicketResponseTicket = null)
    {
      $this->TicketResponseTicket = $TicketResponseTicket;
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
      return isset($this->TicketResponseTicket[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TicketResponseTicket
     */
    public function offsetGet($offset)
    {
      return $this->TicketResponseTicket[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TicketResponseTicket $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TicketResponseTicket[] = $value;
      } else {
        $this->TicketResponseTicket[$offset] = $value;
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
      unset($this->TicketResponseTicket[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TicketResponseTicket Return the current element
     */
    public function current()
    {
      return current($this->TicketResponseTicket);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TicketResponseTicket);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TicketResponseTicket);
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
      reset($this->TicketResponseTicket);
    }

    /**
     * Countable implementation
     *
     * @return TicketResponseTicket Return count of elements
     */
    public function count()
    {
      return count($this->TicketResponseTicket);
    }

}
