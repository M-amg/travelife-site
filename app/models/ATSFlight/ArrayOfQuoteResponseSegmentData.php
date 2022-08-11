<?php

namespace App\models\ATSFlight;

class ArrayOfQuoteResponseSegmentData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var QuoteResponseSegmentData[] $QuoteResponseSegmentData
     */
    protected $QuoteResponseSegmentData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return QuoteResponseSegmentData[]
     */
    public function getQuoteResponseSegmentData()
    {
      return $this->QuoteResponseSegmentData;
    }

    /**
     * @param QuoteResponseSegmentData[] $QuoteResponseSegmentData
     * @return \App\models\ATSFlight\ArrayOfQuoteResponseSegmentData
     */
    public function setQuoteResponseSegmentData(array $QuoteResponseSegmentData = null)
    {
      $this->QuoteResponseSegmentData = $QuoteResponseSegmentData;
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
      return isset($this->QuoteResponseSegmentData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return QuoteResponseSegmentData
     */
    public function offsetGet($offset)
    {
      return $this->QuoteResponseSegmentData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param QuoteResponseSegmentData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->QuoteResponseSegmentData[] = $value;
      } else {
        $this->QuoteResponseSegmentData[$offset] = $value;
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
      unset($this->QuoteResponseSegmentData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return QuoteResponseSegmentData Return the current element
     */
    public function current()
    {
      return current($this->QuoteResponseSegmentData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->QuoteResponseSegmentData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->QuoteResponseSegmentData);
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
      reset($this->QuoteResponseSegmentData);
    }

    /**
     * Countable implementation
     *
     * @return QuoteResponseSegmentData Return count of elements
     */
    public function count()
    {
      return count($this->QuoteResponseSegmentData);
    }

}
