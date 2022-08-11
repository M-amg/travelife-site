<?php

namespace App\models\ATSFlight;

class ArrayOfModifyRequestFF implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ModifyRequestFF[] $ModifyRequestFF
     */
    protected $ModifyRequestFF = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ModifyRequestFF[]
     */
    public function getModifyRequestFF()
    {
      return $this->ModifyRequestFF;
    }

    /**
     * @param ModifyRequestFF[] $ModifyRequestFF
     * @return \App\models\ATSFlight\ArrayOfModifyRequestFF
     */
    public function setModifyRequestFF(array $ModifyRequestFF = null)
    {
      $this->ModifyRequestFF = $ModifyRequestFF;
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
      return isset($this->ModifyRequestFF[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ModifyRequestFF
     */
    public function offsetGet($offset)
    {
      return $this->ModifyRequestFF[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ModifyRequestFF $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ModifyRequestFF[] = $value;
      } else {
        $this->ModifyRequestFF[$offset] = $value;
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
      unset($this->ModifyRequestFF[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ModifyRequestFF Return the current element
     */
    public function current()
    {
      return current($this->ModifyRequestFF);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ModifyRequestFF);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ModifyRequestFF);
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
      reset($this->ModifyRequestFF);
    }

    /**
     * Countable implementation
     *
     * @return ModifyRequestFF Return count of elements
     */
    public function count()
    {
      return count($this->ModifyRequestFF);
    }

}
