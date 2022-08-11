<?php

namespace App\models\ATSFlight;

class ArrayOfDiscountResponseData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DiscountResponseData[] $DiscountResponseData
     */
    protected $DiscountResponseData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DiscountResponseData[]
     */
    public function getDiscountResponseData()
    {
      return $this->DiscountResponseData;
    }

    /**
     * @param DiscountResponseData[] $DiscountResponseData
     * @return \App\models\ATSFlight\ArrayOfDiscountResponseData
     */
    public function setDiscountResponseData(array $DiscountResponseData = null)
    {
      $this->DiscountResponseData = $DiscountResponseData;
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
      return isset($this->DiscountResponseData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DiscountResponseData
     */
    public function offsetGet($offset)
    {
      return $this->DiscountResponseData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DiscountResponseData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DiscountResponseData[] = $value;
      } else {
        $this->DiscountResponseData[$offset] = $value;
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
      unset($this->DiscountResponseData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DiscountResponseData Return the current element
     */
    public function current()
    {
      return current($this->DiscountResponseData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DiscountResponseData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DiscountResponseData);
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
      reset($this->DiscountResponseData);
    }

    /**
     * Countable implementation
     *
     * @return DiscountResponseData Return count of elements
     */
    public function count()
    {
      return count($this->DiscountResponseData);
    }

}
