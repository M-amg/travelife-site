<?php

namespace App\models\ATSFlight;

class ArrayOfBookResponseLeg implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BookResponseLeg[] $BookResponseLeg
     */
    protected $BookResponseLeg = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BookResponseLeg[]
     */
    public function getBookResponseLeg()
    {
      return $this->BookResponseLeg;
    }

    /**
     * @param BookResponseLeg[] $BookResponseLeg
     * @return \App\models\ATSFlight\ArrayOfBookResponseLeg
     */
    public function setBookResponseLeg(array $BookResponseLeg = null)
    {
      $this->BookResponseLeg = $BookResponseLeg;
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
      return isset($this->BookResponseLeg[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BookResponseLeg
     */
    public function offsetGet($offset)
    {
      return $this->BookResponseLeg[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BookResponseLeg $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BookResponseLeg[] = $value;
      } else {
        $this->BookResponseLeg[$offset] = $value;
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
      unset($this->BookResponseLeg[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BookResponseLeg Return the current element
     */
    public function current()
    {
      return current($this->BookResponseLeg);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BookResponseLeg);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BookResponseLeg);
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
      reset($this->BookResponseLeg);
    }

    /**
     * Countable implementation
     *
     * @return BookResponseLeg Return count of elements
     */
    public function count()
    {
      return count($this->BookResponseLeg);
    }

}
