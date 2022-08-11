<?php

namespace App\models\ATSFlight;

class ArrayOfTicketResponseInformation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TicketResponseInformation[] $TicketResponseInformation
     */
    protected $TicketResponseInformation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TicketResponseInformation[]
     */
    public function getTicketResponseInformation()
    {
      return $this->TicketResponseInformation;
    }

    /**
     * @param TicketResponseInformation[] $TicketResponseInformation
     * @return \App\models\ATSFlight\ArrayOfTicketResponseInformation
     */
    public function setTicketResponseInformation(array $TicketResponseInformation = null)
    {
      $this->TicketResponseInformation = $TicketResponseInformation;
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
      return isset($this->TicketResponseInformation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TicketResponseInformation
     */
    public function offsetGet($offset)
    {
      return $this->TicketResponseInformation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TicketResponseInformation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TicketResponseInformation[] = $value;
      } else {
        $this->TicketResponseInformation[$offset] = $value;
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
      unset($this->TicketResponseInformation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TicketResponseInformation Return the current element
     */
    public function current()
    {
      return current($this->TicketResponseInformation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TicketResponseInformation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TicketResponseInformation);
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
      reset($this->TicketResponseInformation);
    }

    /**
     * Countable implementation
     *
     * @return TicketResponseInformation Return count of elements
     */
    public function count()
    {
      return count($this->TicketResponseInformation);
    }

}
