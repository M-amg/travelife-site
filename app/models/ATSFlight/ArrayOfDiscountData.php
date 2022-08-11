<?php

namespace App\models\ATSFlight;

class ArrayOfDiscountData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DiscountData[] $DiscountData
     */
    protected $DiscountData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DiscountData[]
     */
    public function getDiscountData()
    {
      return $this->DiscountData;
    }

    /**
     * @param DiscountData[] $DiscountData
     * @return \App\models\ATSFlight\ArrayOfDiscountData
     */
    public function setDiscountData(array $DiscountData = null)
    {
      $this->DiscountData = $DiscountData;
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
      return isset($this->DiscountData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DiscountData
     */
    public function offsetGet($offset)
    {
      return $this->DiscountData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DiscountData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DiscountData[] = $value;
      } else {
        $this->DiscountData[$offset] = $value;
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
      unset($this->DiscountData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DiscountData Return the current element
     */
    public function current()
    {
      return current($this->DiscountData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DiscountData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DiscountData);
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
      reset($this->DiscountData);
    }

    /**
     * Countable implementation
     *
     * @return DiscountData Return count of elements
     */
    public function count()
    {
      return count($this->DiscountData);
    }

}
