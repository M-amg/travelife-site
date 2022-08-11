<?php

namespace App\models\ATSFlight;

class ArrayOfResponseService implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ResponseService[] $ResponseService
     */
    protected $ResponseService = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ResponseService[]
     */
    public function getResponseService()
    {
      return $this->ResponseService;
    }

    /**
     * @param ResponseService[] $ResponseService
     * @return \App\models\ATSFlight\ArrayOfResponseService
     */
    public function setResponseService(array $ResponseService = null)
    {
      $this->ResponseService = $ResponseService;
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
      return isset($this->ResponseService[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ResponseService
     */
    public function offsetGet($offset)
    {
      return $this->ResponseService[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ResponseService $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ResponseService[] = $value;
      } else {
        $this->ResponseService[$offset] = $value;
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
      unset($this->ResponseService[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ResponseService Return the current element
     */
    public function current()
    {
      return current($this->ResponseService);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ResponseService);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ResponseService);
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
      reset($this->ResponseService);
    }

    /**
     * Countable implementation
     *
     * @return ResponseService Return count of elements
     */
    public function count()
    {
      return count($this->ResponseService);
    }

}
