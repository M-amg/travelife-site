<?php

namespace App\models\ATSFlight;

class ArrayOfTicketResponsePassenger implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TicketResponsePassenger[] $TicketResponsePassenger
     */
    protected $TicketResponsePassenger = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TicketResponsePassenger[]
     */
    public function getTicketResponsePassenger()
    {
      return $this->TicketResponsePassenger;
    }

    /**
     * @param TicketResponsePassenger[] $TicketResponsePassenger
     * @return \App\models\ATSFlight\ArrayOfTicketResponsePassenger
     */
    public function setTicketResponsePassenger(array $TicketResponsePassenger = null)
    {
      $this->TicketResponsePassenger = $TicketResponsePassenger;
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
      return isset($this->TicketResponsePassenger[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TicketResponsePassenger
     */
    public function offsetGet($offset)
    {
      return $this->TicketResponsePassenger[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TicketResponsePassenger $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TicketResponsePassenger[] = $value;
      } else {
        $this->TicketResponsePassenger[$offset] = $value;
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
      unset($this->TicketResponsePassenger[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TicketResponsePassenger Return the current element
     */
    public function current()
    {
      return current($this->TicketResponsePassenger);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TicketResponsePassenger);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TicketResponsePassenger);
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
      reset($this->TicketResponsePassenger);
    }

    /**
     * Countable implementation
     *
     * @return TicketResponsePassenger Return count of elements
     */
    public function count()
    {
      return count($this->TicketResponsePassenger);
    }

}
