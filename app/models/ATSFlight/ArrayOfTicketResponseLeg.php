<?php

namespace App\models\ATSFlight;

class ArrayOfTicketResponseLeg implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TicketResponseLeg[] $TicketResponseLeg
     */
    protected $TicketResponseLeg = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TicketResponseLeg[]
     */
    public function getTicketResponseLeg()
    {
      return $this->TicketResponseLeg;
    }

    /**
     * @param TicketResponseLeg[] $TicketResponseLeg
     * @return \App\models\ATSFlight\ArrayOfTicketResponseLeg
     */
    public function setTicketResponseLeg(array $TicketResponseLeg = null)
    {
      $this->TicketResponseLeg = $TicketResponseLeg;
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
      return isset($this->TicketResponseLeg[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TicketResponseLeg
     */
    public function offsetGet($offset)
    {
      return $this->TicketResponseLeg[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TicketResponseLeg $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TicketResponseLeg[] = $value;
      } else {
        $this->TicketResponseLeg[$offset] = $value;
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
      unset($this->TicketResponseLeg[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TicketResponseLeg Return the current element
     */
    public function current()
    {
      return current($this->TicketResponseLeg);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TicketResponseLeg);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TicketResponseLeg);
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
      reset($this->TicketResponseLeg);
    }

    /**
     * Countable implementation
     *
     * @return TicketResponseLeg Return count of elements
     */
    public function count()
    {
      return count($this->TicketResponseLeg);
    }

}
