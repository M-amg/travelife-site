<?php

namespace App\models\ATSFlight;

class ArrayOfModifyRequestLeg implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ModifyRequestLeg[] $ModifyRequestLeg
     */
    protected $ModifyRequestLeg = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ModifyRequestLeg[]
     */
    public function getModifyRequestLeg()
    {
      return $this->ModifyRequestLeg;
    }

    /**
     * @param ModifyRequestLeg[] $ModifyRequestLeg
     * @return \App\models\ATSFlight\ArrayOfModifyRequestLeg
     */
    public function setModifyRequestLeg(array $ModifyRequestLeg = null)
    {
      $this->ModifyRequestLeg = $ModifyRequestLeg;
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
      return isset($this->ModifyRequestLeg[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ModifyRequestLeg
     */
    public function offsetGet($offset)
    {
      return $this->ModifyRequestLeg[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ModifyRequestLeg $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ModifyRequestLeg[] = $value;
      } else {
        $this->ModifyRequestLeg[$offset] = $value;
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
      unset($this->ModifyRequestLeg[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ModifyRequestLeg Return the current element
     */
    public function current()
    {
      return current($this->ModifyRequestLeg);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ModifyRequestLeg);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ModifyRequestLeg);
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
      reset($this->ModifyRequestLeg);
    }

    /**
     * Countable implementation
     *
     * @return ModifyRequestLeg Return count of elements
     */
    public function count()
    {
      return count($this->ModifyRequestLeg);
    }

}
