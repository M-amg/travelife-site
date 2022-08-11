<?php

namespace App\models\ATSFlight;

class ArrayOfModifyResponseAPIS implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ModifyResponseAPIS[] $ModifyResponseAPIS
     */
    protected $ModifyResponseAPIS = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ModifyResponseAPIS[]
     */
    public function getModifyResponseAPIS()
    {
      return $this->ModifyResponseAPIS;
    }

    /**
     * @param ModifyResponseAPIS[] $ModifyResponseAPIS
     * @return \App\models\ATSFlight\ArrayOfModifyResponseAPIS
     */
    public function setModifyResponseAPIS(array $ModifyResponseAPIS = null)
    {
      $this->ModifyResponseAPIS = $ModifyResponseAPIS;
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
      return isset($this->ModifyResponseAPIS[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ModifyResponseAPIS
     */
    public function offsetGet($offset)
    {
      return $this->ModifyResponseAPIS[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ModifyResponseAPIS $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ModifyResponseAPIS[] = $value;
      } else {
        $this->ModifyResponseAPIS[$offset] = $value;
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
      unset($this->ModifyResponseAPIS[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ModifyResponseAPIS Return the current element
     */
    public function current()
    {
      return current($this->ModifyResponseAPIS);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ModifyResponseAPIS);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ModifyResponseAPIS);
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
      reset($this->ModifyResponseAPIS);
    }

    /**
     * Countable implementation
     *
     * @return ModifyResponseAPIS Return count of elements
     */
    public function count()
    {
      return count($this->ModifyResponseAPIS);
    }

}
