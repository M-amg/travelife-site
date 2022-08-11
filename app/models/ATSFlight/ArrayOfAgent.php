<?php

namespace App\models\ATSFlight;

class ArrayOfAgent implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Agent[] $Agent
     */
    protected $Agent = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Agent[]
     */
    public function getAgent()
    {
      return $this->Agent;
    }

    /**
     * @param Agent[] $Agent
     * @return \App\models\ATSFlight\ArrayOfAgent
     */
    public function setAgent(array $Agent = null)
    {
      $this->Agent = $Agent;
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
      return isset($this->Agent[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Agent
     */
    public function offsetGet($offset)
    {
      return $this->Agent[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Agent $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Agent[] = $value;
      } else {
        $this->Agent[$offset] = $value;
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
      unset($this->Agent[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Agent Return the current element
     */
    public function current()
    {
      return current($this->Agent);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Agent);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Agent);
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
      reset($this->Agent);
    }

    /**
     * Countable implementation
     *
     * @return Agent Return count of elements
     */
    public function count()
    {
      return count($this->Agent);
    }

}
