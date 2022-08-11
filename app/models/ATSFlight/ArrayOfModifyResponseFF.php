<?php

namespace App\models\ATSFlight;

class ArrayOfModifyResponseFF implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ModifyResponseFF[] $ModifyResponseFF
     */
    protected $ModifyResponseFF = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ModifyResponseFF[]
     */
    public function getModifyResponseFF()
    {
      return $this->ModifyResponseFF;
    }

    /**
     * @param ModifyResponseFF[] $ModifyResponseFF
     * @return \App\models\ATSFlight\ArrayOfModifyResponseFF
     */
    public function setModifyResponseFF(array $ModifyResponseFF = null)
    {
      $this->ModifyResponseFF = $ModifyResponseFF;
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
      return isset($this->ModifyResponseFF[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ModifyResponseFF
     */
    public function offsetGet($offset)
    {
      return $this->ModifyResponseFF[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ModifyResponseFF $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ModifyResponseFF[] = $value;
      } else {
        $this->ModifyResponseFF[$offset] = $value;
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
      unset($this->ModifyResponseFF[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ModifyResponseFF Return the current element
     */
    public function current()
    {
      return current($this->ModifyResponseFF);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ModifyResponseFF);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ModifyResponseFF);
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
      reset($this->ModifyResponseFF);
    }

    /**
     * Countable implementation
     *
     * @return ModifyResponseFF Return count of elements
     */
    public function count()
    {
      return count($this->ModifyResponseFF);
    }

}
