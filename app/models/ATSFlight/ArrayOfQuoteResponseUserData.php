<?php

namespace App\models\ATSFlight;

class ArrayOfQuoteResponseUserData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var QuoteResponseUserData[] $QuoteResponseUserData
     */
    protected $QuoteResponseUserData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return QuoteResponseUserData[]
     */
    public function getQuoteResponseUserData()
    {
      return $this->QuoteResponseUserData;
    }

    /**
     * @param QuoteResponseUserData[] $QuoteResponseUserData
     * @return \App\models\ATSFlight\ArrayOfQuoteResponseUserData
     */
    public function setQuoteResponseUserData(array $QuoteResponseUserData = null)
    {
      $this->QuoteResponseUserData = $QuoteResponseUserData;
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
      return isset($this->QuoteResponseUserData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return QuoteResponseUserData
     */
    public function offsetGet($offset)
    {
      return $this->QuoteResponseUserData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param QuoteResponseUserData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->QuoteResponseUserData[] = $value;
      } else {
        $this->QuoteResponseUserData[$offset] = $value;
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
      unset($this->QuoteResponseUserData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return QuoteResponseUserData Return the current element
     */
    public function current()
    {
      return current($this->QuoteResponseUserData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->QuoteResponseUserData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->QuoteResponseUserData);
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
      reset($this->QuoteResponseUserData);
    }

    /**
     * Countable implementation
     *
     * @return QuoteResponseUserData Return count of elements
     */
    public function count()
    {
      return count($this->QuoteResponseUserData);
    }

}
