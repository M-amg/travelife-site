<?php

namespace App\models\ATSFlight;

class ArrayOfCancelTicketRequestTicket implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CancelTicketRequestTicket[] $CancelTicketRequestTicket
     */
    protected $CancelTicketRequestTicket = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CancelTicketRequestTicket[]
     */
    public function getCancelTicketRequestTicket()
    {
      return $this->CancelTicketRequestTicket;
    }

    /**
     * @param CancelTicketRequestTicket[] $CancelTicketRequestTicket
     * @return \App\models\ATSFlight\ArrayOfCancelTicketRequestTicket
     */
    public function setCancelTicketRequestTicket(array $CancelTicketRequestTicket = null)
    {
      $this->CancelTicketRequestTicket = $CancelTicketRequestTicket;
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
      return isset($this->CancelTicketRequestTicket[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CancelTicketRequestTicket
     */
    public function offsetGet($offset)
    {
      return $this->CancelTicketRequestTicket[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CancelTicketRequestTicket $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CancelTicketRequestTicket[] = $value;
      } else {
        $this->CancelTicketRequestTicket[$offset] = $value;
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
      unset($this->CancelTicketRequestTicket[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CancelTicketRequestTicket Return the current element
     */
    public function current()
    {
      return current($this->CancelTicketRequestTicket);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CancelTicketRequestTicket);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CancelTicketRequestTicket);
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
      reset($this->CancelTicketRequestTicket);
    }

    /**
     * Countable implementation
     *
     * @return CancelTicketRequestTicket Return count of elements
     */
    public function count()
    {
      return count($this->CancelTicketRequestTicket);
    }

}
