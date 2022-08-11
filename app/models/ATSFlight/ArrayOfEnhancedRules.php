<?php

namespace App\models\ATSFlight;

class ArrayOfEnhancedRules implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var EnhancedRules[] $EnhancedRules
     */
    protected $EnhancedRules = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EnhancedRules[]
     */
    public function getEnhancedRules()
    {
      return $this->EnhancedRules;
    }

    /**
     * @param EnhancedRules[] $EnhancedRules
     * @return \App\models\ATSFlight\ArrayOfEnhancedRules
     */
    public function setEnhancedRules(array $EnhancedRules = null)
    {
      $this->EnhancedRules = $EnhancedRules;
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
      return isset($this->EnhancedRules[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return EnhancedRules
     */
    public function offsetGet($offset)
    {
      return $this->EnhancedRules[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param EnhancedRules $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->EnhancedRules[] = $value;
      } else {
        $this->EnhancedRules[$offset] = $value;
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
      unset($this->EnhancedRules[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return EnhancedRules Return the current element
     */
    public function current()
    {
      return current($this->EnhancedRules);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->EnhancedRules);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->EnhancedRules);
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
      reset($this->EnhancedRules);
    }

    /**
     * Countable implementation
     *
     * @return EnhancedRules Return count of elements
     */
    public function count()
    {
      return count($this->EnhancedRules);
    }

}
