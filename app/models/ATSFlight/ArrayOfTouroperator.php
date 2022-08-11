<?php

namespace App\models\ATSFlight;

class ArrayOfTouroperator implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Touroperator[] $Touroperator
     */
    protected $Touroperator = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Touroperator[]
     */
    public function getTouroperator()
    {
      return $this->Touroperator;
    }

    /**
     * @param Touroperator[] $Touroperator
     * @return \App\models\ATSFlight\ArrayOfTouroperator
     */
    public function setTouroperator(array $Touroperator = null)
    {
      $this->Touroperator = $Touroperator;
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
      return isset($this->Touroperator[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Touroperator
     */
    public function offsetGet($offset)
    {
      return $this->Touroperator[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Touroperator $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Touroperator[] = $value;
      } else {
        $this->Touroperator[$offset] = $value;
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
      unset($this->Touroperator[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Touroperator Return the current element
     */
    public function current()
    {
      return current($this->Touroperator);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Touroperator);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Touroperator);
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
      reset($this->Touroperator);
    }

    /**
     * Countable implementation
     *
     * @return Touroperator Return count of elements
     */
    public function count()
    {
      return count($this->Touroperator);
    }

}
