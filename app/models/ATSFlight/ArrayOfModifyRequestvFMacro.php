<?php

namespace App\models\ATSFlight;

class ArrayOfModifyRequestvFMacro implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ModifyRequestvFMacro[] $ModifyRequestvFMacro
     */
    protected $ModifyRequestvFMacro = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ModifyRequestvFMacro[]
     */
    public function getModifyRequestvFMacro()
    {
      return $this->ModifyRequestvFMacro;
    }

    /**
     * @param ModifyRequestvFMacro[] $ModifyRequestvFMacro
     * @return \App\models\ATSFlight\ArrayOfModifyRequestvFMacro
     */
    public function setModifyRequestvFMacro(array $ModifyRequestvFMacro = null)
    {
      $this->ModifyRequestvFMacro = $ModifyRequestvFMacro;
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
      return isset($this->ModifyRequestvFMacro[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ModifyRequestvFMacro
     */
    public function offsetGet($offset)
    {
      return $this->ModifyRequestvFMacro[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ModifyRequestvFMacro $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ModifyRequestvFMacro[] = $value;
      } else {
        $this->ModifyRequestvFMacro[$offset] = $value;
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
      unset($this->ModifyRequestvFMacro[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ModifyRequestvFMacro Return the current element
     */
    public function current()
    {
      return current($this->ModifyRequestvFMacro);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ModifyRequestvFMacro);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ModifyRequestvFMacro);
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
      reset($this->ModifyRequestvFMacro);
    }

    /**
     * Countable implementation
     *
     * @return ModifyRequestvFMacro Return count of elements
     */
    public function count()
    {
      return count($this->ModifyRequestvFMacro);
    }

}
