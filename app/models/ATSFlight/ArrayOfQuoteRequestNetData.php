<?php

namespace App\models\ATSFlight;

class ArrayOfQuoteRequestNetData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var QuoteRequestNetData[] $QuoteRequestNetData
     */
    protected $QuoteRequestNetData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return QuoteRequestNetData[]
     */
    public function getQuoteRequestNetData()
    {
      return $this->QuoteRequestNetData;
    }

    /**
     * @param QuoteRequestNetData[] $QuoteRequestNetData
     * @return \App\models\ATSFlight\ArrayOfQuoteRequestNetData
     */
    public function setQuoteRequestNetData(array $QuoteRequestNetData = null)
    {
      $this->QuoteRequestNetData = $QuoteRequestNetData;
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
      return isset($this->QuoteRequestNetData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return QuoteRequestNetData
     */
    public function offsetGet($offset)
    {
      return $this->QuoteRequestNetData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param QuoteRequestNetData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->QuoteRequestNetData[] = $value;
      } else {
        $this->QuoteRequestNetData[$offset] = $value;
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
      unset($this->QuoteRequestNetData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return QuoteRequestNetData Return the current element
     */
    public function current()
    {
      return current($this->QuoteRequestNetData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->QuoteRequestNetData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->QuoteRequestNetData);
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
      reset($this->QuoteRequestNetData);
    }

    /**
     * Countable implementation
     *
     * @return QuoteRequestNetData Return count of elements
     */
    public function count()
    {
      return count($this->QuoteRequestNetData);
    }

}
