<?php

namespace App\models\ATSFlight;

class ArrayOfPNRServiceFareCouponData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PNRServiceFareCouponData[] $PNRServiceFareCouponData
     */
    protected $PNRServiceFareCouponData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PNRServiceFareCouponData[]
     */
    public function getPNRServiceFareCouponData()
    {
      return $this->PNRServiceFareCouponData;
    }

    /**
     * @param PNRServiceFareCouponData[] $PNRServiceFareCouponData
     * @return \App\models\ATSFlight\ArrayOfPNRServiceFareCouponData
     */
    public function setPNRServiceFareCouponData(array $PNRServiceFareCouponData = null)
    {
      $this->PNRServiceFareCouponData = $PNRServiceFareCouponData;
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
      return isset($this->PNRServiceFareCouponData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PNRServiceFareCouponData
     */
    public function offsetGet($offset)
    {
      return $this->PNRServiceFareCouponData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PNRServiceFareCouponData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PNRServiceFareCouponData[] = $value;
      } else {
        $this->PNRServiceFareCouponData[$offset] = $value;
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
      unset($this->PNRServiceFareCouponData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PNRServiceFareCouponData Return the current element
     */
    public function current()
    {
      return current($this->PNRServiceFareCouponData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PNRServiceFareCouponData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PNRServiceFareCouponData);
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
      reset($this->PNRServiceFareCouponData);
    }

    /**
     * Countable implementation
     *
     * @return PNRServiceFareCouponData Return count of elements
     */
    public function count()
    {
      return count($this->PNRServiceFareCouponData);
    }

}
