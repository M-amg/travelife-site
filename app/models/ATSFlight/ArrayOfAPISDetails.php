<?php

namespace App\models\ATSFlight;

class ArrayOfAPISDetails implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var APISDetails[] $APISDetails
     */
    protected $APISDetails = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return APISDetails[]
     */
    public function getAPISDetails()
    {
      return $this->APISDetails;
    }

    /**
     * @param APISDetails[] $APISDetails
     * @return \App\models\ATSFlight\ArrayOfAPISDetails
     */
    public function setAPISDetails(array $APISDetails = null)
    {
      $this->APISDetails = $APISDetails;
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
      return isset($this->APISDetails[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return APISDetails
     */
    public function offsetGet($offset)
    {
      return $this->APISDetails[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param APISDetails $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->APISDetails[] = $value;
      } else {
        $this->APISDetails[$offset] = $value;
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
      unset($this->APISDetails[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return APISDetails Return the current element
     */
    public function current()
    {
      return current($this->APISDetails);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->APISDetails);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->APISDetails);
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
      reset($this->APISDetails);
    }

    /**
     * Countable implementation
     *
     * @return APISDetails Return count of elements
     */
    public function count()
    {
      return count($this->APISDetails);
    }

}
