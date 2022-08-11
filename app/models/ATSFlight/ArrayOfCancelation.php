<?php

namespace App\models\ATSFlight;

class ArrayOfCancelation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Cancelation[] $Cancelation
     */
    protected $Cancelation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Cancelation[]
     */
    public function getCancelation()
    {
      return $this->Cancelation;
    }

    /**
     * @param Cancelation[] $Cancelation
     * @return \App\models\ATSFlight\ArrayOfCancelation
     */
    public function setCancelation(array $Cancelation = null)
    {
      $this->Cancelation = $Cancelation;
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
      return isset($this->Cancelation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Cancelation
     */
    public function offsetGet($offset)
    {
      return $this->Cancelation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Cancelation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Cancelation[] = $value;
      } else {
        $this->Cancelation[$offset] = $value;
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
      unset($this->Cancelation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Cancelation Return the current element
     */
    public function current()
    {
      return current($this->Cancelation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Cancelation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Cancelation);
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
      reset($this->Cancelation);
    }

    /**
     * Countable implementation
     *
     * @return Cancelation Return count of elements
     */
    public function count()
    {
      return count($this->Cancelation);
    }

}
