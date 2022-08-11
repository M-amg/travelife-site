<?php

namespace App\models\ATSFlight;

class ArrayOfModifyResponseSSR implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ModifyResponseSSR[] $ModifyResponseSSR
     */
    protected $ModifyResponseSSR = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ModifyResponseSSR[]
     */
    public function getModifyResponseSSR()
    {
      return $this->ModifyResponseSSR;
    }

    /**
     * @param ModifyResponseSSR[] $ModifyResponseSSR
     * @return \App\models\ATSFlight\ArrayOfModifyResponseSSR
     */
    public function setModifyResponseSSR(array $ModifyResponseSSR = null)
    {
      $this->ModifyResponseSSR = $ModifyResponseSSR;
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
      return isset($this->ModifyResponseSSR[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ModifyResponseSSR
     */
    public function offsetGet($offset)
    {
      return $this->ModifyResponseSSR[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ModifyResponseSSR $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ModifyResponseSSR[] = $value;
      } else {
        $this->ModifyResponseSSR[$offset] = $value;
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
      unset($this->ModifyResponseSSR[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ModifyResponseSSR Return the current element
     */
    public function current()
    {
      return current($this->ModifyResponseSSR);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ModifyResponseSSR);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ModifyResponseSSR);
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
      reset($this->ModifyResponseSSR);
    }

    /**
     * Countable implementation
     *
     * @return ModifyResponseSSR Return count of elements
     */
    public function count()
    {
      return count($this->ModifyResponseSSR);
    }

}
