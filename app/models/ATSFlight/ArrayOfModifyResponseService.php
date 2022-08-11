<?php

namespace App\models\ATSFlight;

class ArrayOfModifyResponseService implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ModifyResponseService[] $ModifyResponseService
     */
    protected $ModifyResponseService = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ModifyResponseService[]
     */
    public function getModifyResponseService()
    {
      return $this->ModifyResponseService;
    }

    /**
     * @param ModifyResponseService[] $ModifyResponseService
     * @return \App\models\ATSFlight\ArrayOfModifyResponseService
     */
    public function setModifyResponseService(array $ModifyResponseService = null)
    {
      $this->ModifyResponseService = $ModifyResponseService;
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
      return isset($this->ModifyResponseService[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ModifyResponseService
     */
    public function offsetGet($offset)
    {
      return $this->ModifyResponseService[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ModifyResponseService $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ModifyResponseService[] = $value;
      } else {
        $this->ModifyResponseService[$offset] = $value;
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
      unset($this->ModifyResponseService[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ModifyResponseService Return the current element
     */
    public function current()
    {
      return current($this->ModifyResponseService);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ModifyResponseService);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ModifyResponseService);
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
      reset($this->ModifyResponseService);
    }

    /**
     * Countable implementation
     *
     * @return ModifyResponseService Return count of elements
     */
    public function count()
    {
      return count($this->ModifyResponseService);
    }

}
