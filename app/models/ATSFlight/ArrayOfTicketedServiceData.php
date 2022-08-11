<?php

namespace App\models\ATSFlight;

class ArrayOfTicketedServiceData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TicketedServiceData[] $TicketedServiceData
     */
    protected $TicketedServiceData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TicketedServiceData[]
     */
    public function getTicketedServiceData()
    {
      return $this->TicketedServiceData;
    }

    /**
     * @param TicketedServiceData[] $TicketedServiceData
     * @return \App\models\ATSFlight\ArrayOfTicketedServiceData
     */
    public function setTicketedServiceData(array $TicketedServiceData = null)
    {
      $this->TicketedServiceData = $TicketedServiceData;
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
      return isset($this->TicketedServiceData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TicketedServiceData
     */
    public function offsetGet($offset)
    {
      return $this->TicketedServiceData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TicketedServiceData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TicketedServiceData[] = $value;
      } else {
        $this->TicketedServiceData[$offset] = $value;
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
      unset($this->TicketedServiceData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TicketedServiceData Return the current element
     */
    public function current()
    {
      return current($this->TicketedServiceData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TicketedServiceData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TicketedServiceData);
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
      reset($this->TicketedServiceData);
    }

    /**
     * Countable implementation
     *
     * @return TicketedServiceData Return count of elements
     */
    public function count()
    {
      return count($this->TicketedServiceData);
    }

}
