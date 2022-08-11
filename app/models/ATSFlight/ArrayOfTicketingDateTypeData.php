<?php

namespace App\models\ATSFlight;

class ArrayOfTicketingDateTypeData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TicketingDateTypeData[] $TicketingDateTypeData
     */
    protected $TicketingDateTypeData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TicketingDateTypeData[]
     */
    public function getTicketingDateTypeData()
    {
      return $this->TicketingDateTypeData;
    }

    /**
     * @param TicketingDateTypeData[] $TicketingDateTypeData
     * @return \App\models\ATSFlight\ArrayOfTicketingDateTypeData
     */
    public function setTicketingDateTypeData(array $TicketingDateTypeData = null)
    {
      $this->TicketingDateTypeData = $TicketingDateTypeData;
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
      return isset($this->TicketingDateTypeData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TicketingDateTypeData
     */
    public function offsetGet($offset)
    {
      return $this->TicketingDateTypeData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TicketingDateTypeData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TicketingDateTypeData[] = $value;
      } else {
        $this->TicketingDateTypeData[$offset] = $value;
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
      unset($this->TicketingDateTypeData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TicketingDateTypeData Return the current element
     */
    public function current()
    {
      return current($this->TicketingDateTypeData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TicketingDateTypeData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TicketingDateTypeData);
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
      reset($this->TicketingDateTypeData);
    }

    /**
     * Countable implementation
     *
     * @return TicketingDateTypeData Return count of elements
     */
    public function count()
    {
      return count($this->TicketingDateTypeData);
    }

}
