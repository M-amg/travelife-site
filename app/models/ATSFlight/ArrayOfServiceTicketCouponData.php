<?php

namespace App\models\ATSFlight;

class ArrayOfServiceTicketCouponData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ServiceTicketCouponData[] $ServiceTicketCouponData
     */
    protected $ServiceTicketCouponData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ServiceTicketCouponData[]
     */
    public function getServiceTicketCouponData()
    {
      return $this->ServiceTicketCouponData;
    }

    /**
     * @param ServiceTicketCouponData[] $ServiceTicketCouponData
     * @return \App\models\ATSFlight\ArrayOfServiceTicketCouponData
     */
    public function setServiceTicketCouponData(array $ServiceTicketCouponData = null)
    {
      $this->ServiceTicketCouponData = $ServiceTicketCouponData;
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
      return isset($this->ServiceTicketCouponData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ServiceTicketCouponData
     */
    public function offsetGet($offset)
    {
      return $this->ServiceTicketCouponData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ServiceTicketCouponData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ServiceTicketCouponData[] = $value;
      } else {
        $this->ServiceTicketCouponData[$offset] = $value;
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
      unset($this->ServiceTicketCouponData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ServiceTicketCouponData Return the current element
     */
    public function current()
    {
      return current($this->ServiceTicketCouponData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ServiceTicketCouponData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ServiceTicketCouponData);
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
      reset($this->ServiceTicketCouponData);
    }

    /**
     * Countable implementation
     *
     * @return ServiceTicketCouponData Return count of elements
     */
    public function count()
    {
      return count($this->ServiceTicketCouponData);
    }

}
