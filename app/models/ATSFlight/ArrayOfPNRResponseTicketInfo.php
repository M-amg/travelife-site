<?php

namespace App\models\ATSFlight;

class ArrayOfPNRResponseTicketInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PNRResponseTicketInfo[] $PNRResponseTicketInfo
     */
    protected $PNRResponseTicketInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PNRResponseTicketInfo[]
     */
    public function getPNRResponseTicketInfo()
    {
      return $this->PNRResponseTicketInfo;
    }

    /**
     * @param PNRResponseTicketInfo[] $PNRResponseTicketInfo
     * @return \App\models\ATSFlight\ArrayOfPNRResponseTicketInfo
     */
    public function setPNRResponseTicketInfo(array $PNRResponseTicketInfo = null)
    {
      $this->PNRResponseTicketInfo = $PNRResponseTicketInfo;
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
      return isset($this->PNRResponseTicketInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PNRResponseTicketInfo
     */
    public function offsetGet($offset)
    {
      return $this->PNRResponseTicketInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PNRResponseTicketInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PNRResponseTicketInfo[] = $value;
      } else {
        $this->PNRResponseTicketInfo[$offset] = $value;
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
      unset($this->PNRResponseTicketInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PNRResponseTicketInfo Return the current element
     */
    public function current()
    {
      return current($this->PNRResponseTicketInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PNRResponseTicketInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PNRResponseTicketInfo);
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
      reset($this->PNRResponseTicketInfo);
    }

    /**
     * Countable implementation
     *
     * @return PNRResponseTicketInfo Return count of elements
     */
    public function count()
    {
      return count($this->PNRResponseTicketInfo);
    }

}
