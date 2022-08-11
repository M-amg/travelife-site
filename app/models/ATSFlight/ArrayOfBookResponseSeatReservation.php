<?php

namespace App\models\ATSFlight;

class ArrayOfBookResponseSeatReservation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BookResponseSeatReservation[] $BookResponseSeatReservation
     */
    protected $BookResponseSeatReservation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BookResponseSeatReservation[]
     */
    public function getBookResponseSeatReservation()
    {
      return $this->BookResponseSeatReservation;
    }

    /**
     * @param BookResponseSeatReservation[] $BookResponseSeatReservation
     * @return \App\models\ATSFlight\ArrayOfBookResponseSeatReservation
     */
    public function setBookResponseSeatReservation(array $BookResponseSeatReservation = null)
    {
      $this->BookResponseSeatReservation = $BookResponseSeatReservation;
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
      return isset($this->BookResponseSeatReservation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BookResponseSeatReservation
     */
    public function offsetGet($offset)
    {
      return $this->BookResponseSeatReservation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BookResponseSeatReservation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BookResponseSeatReservation[] = $value;
      } else {
        $this->BookResponseSeatReservation[$offset] = $value;
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
      unset($this->BookResponseSeatReservation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BookResponseSeatReservation Return the current element
     */
    public function current()
    {
      return current($this->BookResponseSeatReservation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BookResponseSeatReservation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BookResponseSeatReservation);
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
      reset($this->BookResponseSeatReservation);
    }

    /**
     * Countable implementation
     *
     * @return BookResponseSeatReservation Return count of elements
     */
    public function count()
    {
      return count($this->BookResponseSeatReservation);
    }

}
