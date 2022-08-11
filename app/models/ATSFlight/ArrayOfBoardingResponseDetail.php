<?php

namespace App\models\ATSFlight;

class ArrayOfBoardingResponseDetail implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BoardingResponseDetail[] $BoardingResponseDetail
     */
    protected $BoardingResponseDetail = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BoardingResponseDetail[]
     */
    public function getBoardingResponseDetail()
    {
      return $this->BoardingResponseDetail;
    }

    /**
     * @param BoardingResponseDetail[] $BoardingResponseDetail
     * @return \App\models\ATSFlight\ArrayOfBoardingResponseDetail
     */
    public function setBoardingResponseDetail(array $BoardingResponseDetail = null)
    {
      $this->BoardingResponseDetail = $BoardingResponseDetail;
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
      return isset($this->BoardingResponseDetail[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BoardingResponseDetail
     */
    public function offsetGet($offset)
    {
      return $this->BoardingResponseDetail[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BoardingResponseDetail $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BoardingResponseDetail[] = $value;
      } else {
        $this->BoardingResponseDetail[$offset] = $value;
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
      unset($this->BoardingResponseDetail[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BoardingResponseDetail Return the current element
     */
    public function current()
    {
      return current($this->BoardingResponseDetail);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BoardingResponseDetail);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BoardingResponseDetail);
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
      reset($this->BoardingResponseDetail);
    }

    /**
     * Countable implementation
     *
     * @return BoardingResponseDetail Return count of elements
     */
    public function count()
    {
      return count($this->BoardingResponseDetail);
    }

}
