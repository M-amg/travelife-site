<?php

namespace App\models\ATSFlight;

class ArrayOfDetailsRequestLeg implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DetailsRequestLeg[] $DetailsRequestLeg
     */
    protected $DetailsRequestLeg = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DetailsRequestLeg[]
     */
    public function getDetailsRequestLeg()
    {
      return $this->DetailsRequestLeg;
    }

    /**
     * @param DetailsRequestLeg[] $DetailsRequestLeg
     * @return \App\models\ATSFlight\ArrayOfDetailsRequestLeg
     */
    public function setDetailsRequestLeg(array $DetailsRequestLeg = null)
    {
      $this->DetailsRequestLeg = $DetailsRequestLeg;
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
      return isset($this->DetailsRequestLeg[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DetailsRequestLeg
     */
    public function offsetGet($offset)
    {
      return $this->DetailsRequestLeg[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DetailsRequestLeg $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DetailsRequestLeg[] = $value;
      } else {
        $this->DetailsRequestLeg[$offset] = $value;
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
      unset($this->DetailsRequestLeg[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DetailsRequestLeg Return the current element
     */
    public function current()
    {
      return current($this->DetailsRequestLeg);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DetailsRequestLeg);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DetailsRequestLeg);
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
      reset($this->DetailsRequestLeg);
    }

    /**
     * Countable implementation
     *
     * @return DetailsRequestLeg Return count of elements
     */
    public function count()
    {
      return count($this->DetailsRequestLeg);
    }

}
