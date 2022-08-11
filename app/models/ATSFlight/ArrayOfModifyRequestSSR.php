<?php

namespace App\models\ATSFlight;

class ArrayOfModifyRequestSSR implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ModifyRequestSSR[] $ModifyRequestSSR
     */
    protected $ModifyRequestSSR = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ModifyRequestSSR[]
     */
    public function getModifyRequestSSR()
    {
      return $this->ModifyRequestSSR;
    }

    /**
     * @param ModifyRequestSSR[] $ModifyRequestSSR
     * @return \App\models\ATSFlight\ArrayOfModifyRequestSSR
     */
    public function setModifyRequestSSR(array $ModifyRequestSSR = null)
    {
      $this->ModifyRequestSSR = $ModifyRequestSSR;
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
      return isset($this->ModifyRequestSSR[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ModifyRequestSSR
     */
    public function offsetGet($offset)
    {
      return $this->ModifyRequestSSR[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ModifyRequestSSR $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ModifyRequestSSR[] = $value;
      } else {
        $this->ModifyRequestSSR[$offset] = $value;
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
      unset($this->ModifyRequestSSR[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ModifyRequestSSR Return the current element
     */
    public function current()
    {
      return current($this->ModifyRequestSSR);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ModifyRequestSSR);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ModifyRequestSSR);
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
      reset($this->ModifyRequestSSR);
    }

    /**
     * Countable implementation
     *
     * @return ModifyRequestSSR Return count of elements
     */
    public function count()
    {
      return count($this->ModifyRequestSSR);
    }

}
