<?php

namespace App\models\ATSFlight;

class ArrayOfModifyResponseOSI implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ModifyResponseOSI[] $ModifyResponseOSI
     */
    protected $ModifyResponseOSI = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ModifyResponseOSI[]
     */
    public function getModifyResponseOSI()
    {
      return $this->ModifyResponseOSI;
    }

    /**
     * @param ModifyResponseOSI[] $ModifyResponseOSI
     * @return \App\models\ATSFlight\ArrayOfModifyResponseOSI
     */
    public function setModifyResponseOSI(array $ModifyResponseOSI = null)
    {
      $this->ModifyResponseOSI = $ModifyResponseOSI;
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
      return isset($this->ModifyResponseOSI[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ModifyResponseOSI
     */
    public function offsetGet($offset)
    {
      return $this->ModifyResponseOSI[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ModifyResponseOSI $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ModifyResponseOSI[] = $value;
      } else {
        $this->ModifyResponseOSI[$offset] = $value;
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
      unset($this->ModifyResponseOSI[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ModifyResponseOSI Return the current element
     */
    public function current()
    {
      return current($this->ModifyResponseOSI);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ModifyResponseOSI);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ModifyResponseOSI);
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
      reset($this->ModifyResponseOSI);
    }

    /**
     * Countable implementation
     *
     * @return ModifyResponseOSI Return count of elements
     */
    public function count()
    {
      return count($this->ModifyResponseOSI);
    }

}
