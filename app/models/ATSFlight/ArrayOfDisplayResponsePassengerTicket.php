<?php

namespace App\models\ATSFlight;

class ArrayOfDisplayResponsePassengerTicket implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DisplayResponsePassengerTicket[] $DisplayResponsePassengerTicket
     */
    protected $DisplayResponsePassengerTicket = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DisplayResponsePassengerTicket[]
     */
    public function getDisplayResponsePassengerTicket()
    {
      return $this->DisplayResponsePassengerTicket;
    }

    /**
     * @param DisplayResponsePassengerTicket[] $DisplayResponsePassengerTicket
     * @return \App\models\ATSFlight\ArrayOfDisplayResponsePassengerTicket
     */
    public function setDisplayResponsePassengerTicket(array $DisplayResponsePassengerTicket = null)
    {
      $this->DisplayResponsePassengerTicket = $DisplayResponsePassengerTicket;
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
      return isset($this->DisplayResponsePassengerTicket[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DisplayResponsePassengerTicket
     */
    public function offsetGet($offset)
    {
      return $this->DisplayResponsePassengerTicket[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DisplayResponsePassengerTicket $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DisplayResponsePassengerTicket[] = $value;
      } else {
        $this->DisplayResponsePassengerTicket[$offset] = $value;
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
      unset($this->DisplayResponsePassengerTicket[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DisplayResponsePassengerTicket Return the current element
     */
    public function current()
    {
      return current($this->DisplayResponsePassengerTicket);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DisplayResponsePassengerTicket);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DisplayResponsePassengerTicket);
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
      reset($this->DisplayResponsePassengerTicket);
    }

    /**
     * Countable implementation
     *
     * @return DisplayResponsePassengerTicket Return count of elements
     */
    public function count()
    {
      return count($this->DisplayResponsePassengerTicket);
    }

}
