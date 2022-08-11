<?php

namespace App\models\ATSFlight;

class ArrayOfBookResponseTicketData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BookResponseTicketData[] $BookResponseTicketData
     */
    protected $BookResponseTicketData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BookResponseTicketData[]
     */
    public function getBookResponseTicketData()
    {
      return $this->BookResponseTicketData;
    }

    /**
     * @param BookResponseTicketData[] $BookResponseTicketData
     * @return \App\models\ATSFlight\ArrayOfBookResponseTicketData
     */
    public function setBookResponseTicketData(array $BookResponseTicketData = null)
    {
      $this->BookResponseTicketData = $BookResponseTicketData;
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
      return isset($this->BookResponseTicketData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BookResponseTicketData
     */
    public function offsetGet($offset)
    {
      return $this->BookResponseTicketData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BookResponseTicketData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BookResponseTicketData[] = $value;
      } else {
        $this->BookResponseTicketData[$offset] = $value;
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
      unset($this->BookResponseTicketData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BookResponseTicketData Return the current element
     */
    public function current()
    {
      return current($this->BookResponseTicketData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BookResponseTicketData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BookResponseTicketData);
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
      reset($this->BookResponseTicketData);
    }

    /**
     * Countable implementation
     *
     * @return BookResponseTicketData Return count of elements
     */
    public function count()
    {
      return count($this->BookResponseTicketData);
    }

}
