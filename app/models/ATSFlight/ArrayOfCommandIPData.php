<?php

namespace App\models\ATSFlight;

class ArrayOfCommandIPData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CommandIPData[] $CommandIPData
     */
    protected $CommandIPData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CommandIPData[]
     */
    public function getCommandIPData()
    {
      return $this->CommandIPData;
    }

    /**
     * @param CommandIPData[] $CommandIPData
     * @return \App\models\ATSFlight\ArrayOfCommandIPData
     */
    public function setCommandIPData(array $CommandIPData = null)
    {
      $this->CommandIPData = $CommandIPData;
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
      return isset($this->CommandIPData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CommandIPData
     */
    public function offsetGet($offset)
    {
      return $this->CommandIPData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CommandIPData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CommandIPData[] = $value;
      } else {
        $this->CommandIPData[$offset] = $value;
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
      unset($this->CommandIPData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CommandIPData Return the current element
     */
    public function current()
    {
      return current($this->CommandIPData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CommandIPData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CommandIPData);
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
      reset($this->CommandIPData);
    }

    /**
     * Countable implementation
     *
     * @return CommandIPData Return count of elements
     */
    public function count()
    {
      return count($this->CommandIPData);
    }

}
