<?php

namespace App\models\ATSFlight;

class ArrayOfBoardingResponseBaggageDetail implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BoardingResponseBaggageDetail[] $BoardingResponseBaggageDetail
     */
    protected $BoardingResponseBaggageDetail = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BoardingResponseBaggageDetail[]
     */
    public function getBoardingResponseBaggageDetail()
    {
      return $this->BoardingResponseBaggageDetail;
    }

    /**
     * @param BoardingResponseBaggageDetail[] $BoardingResponseBaggageDetail
     * @return \App\models\ATSFlight\ArrayOfBoardingResponseBaggageDetail
     */
    public function setBoardingResponseBaggageDetail(array $BoardingResponseBaggageDetail = null)
    {
      $this->BoardingResponseBaggageDetail = $BoardingResponseBaggageDetail;
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
      return isset($this->BoardingResponseBaggageDetail[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BoardingResponseBaggageDetail
     */
    public function offsetGet($offset)
    {
      return $this->BoardingResponseBaggageDetail[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BoardingResponseBaggageDetail $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BoardingResponseBaggageDetail[] = $value;
      } else {
        $this->BoardingResponseBaggageDetail[$offset] = $value;
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
      unset($this->BoardingResponseBaggageDetail[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BoardingResponseBaggageDetail Return the current element
     */
    public function current()
    {
      return current($this->BoardingResponseBaggageDetail);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BoardingResponseBaggageDetail);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BoardingResponseBaggageDetail);
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
      reset($this->BoardingResponseBaggageDetail);
    }

    /**
     * Countable implementation
     *
     * @return BoardingResponseBaggageDetail Return count of elements
     */
    public function count()
    {
      return count($this->BoardingResponseBaggageDetail);
    }

}
