<?php

namespace App\models\ATSFlight;

class ArrayOfCacheDurationDefinition implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CacheDurationDefinition[] $CacheDurationDefinition
     */
    protected $CacheDurationDefinition = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CacheDurationDefinition[]
     */
    public function getCacheDurationDefinition()
    {
      return $this->CacheDurationDefinition;
    }

    /**
     * @param CacheDurationDefinition[] $CacheDurationDefinition
     * @return \App\models\ATSFlight\ArrayOfCacheDurationDefinition
     */
    public function setCacheDurationDefinition(array $CacheDurationDefinition = null)
    {
      $this->CacheDurationDefinition = $CacheDurationDefinition;
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
      return isset($this->CacheDurationDefinition[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CacheDurationDefinition
     */
    public function offsetGet($offset)
    {
      return $this->CacheDurationDefinition[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CacheDurationDefinition $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CacheDurationDefinition[] = $value;
      } else {
        $this->CacheDurationDefinition[$offset] = $value;
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
      unset($this->CacheDurationDefinition[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CacheDurationDefinition Return the current element
     */
    public function current()
    {
      return current($this->CacheDurationDefinition);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CacheDurationDefinition);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CacheDurationDefinition);
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
      reset($this->CacheDurationDefinition);
    }

    /**
     * Countable implementation
     *
     * @return CacheDurationDefinition Return count of elements
     */
    public function count()
    {
      return count($this->CacheDurationDefinition);
    }

}
