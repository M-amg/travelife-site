<?php

namespace App\models\ATSFlight;

class ArrayOfBookRequestLeg implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BookRequestLeg[] $BookRequestLeg
     */
    protected $BookRequestLeg = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BookRequestLeg[]
     */
    public function getBookRequestLeg()
    {
      return $this->BookRequestLeg;
    }

    /**
     * @param BookRequestLeg[] $BookRequestLeg
     * @return \App\models\ATSFlight\ArrayOfBookRequestLeg
     */
    public function setBookRequestLeg(array $BookRequestLeg = null)
    {
      $this->BookRequestLeg = $BookRequestLeg;
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
      return isset($this->BookRequestLeg[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BookRequestLeg
     */
    public function offsetGet($offset)
    {
      return $this->BookRequestLeg[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BookRequestLeg $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BookRequestLeg[] = $value;
      } else {
        $this->BookRequestLeg[$offset] = $value;
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
      unset($this->BookRequestLeg[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BookRequestLeg Return the current element
     */
    public function current()
    {
      return current($this->BookRequestLeg);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BookRequestLeg);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BookRequestLeg);
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
      reset($this->BookRequestLeg);
    }

    /**
     * Countable implementation
     *
     * @return BookRequestLeg Return count of elements
     */
    public function count()
    {
      return count($this->BookRequestLeg);
    }

}
