<?php

namespace App\models\ATSFlight;

class ArrayOfPreferenceTravelDates implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PreferenceTravelDates[] $PreferenceTravelDates
     */
    protected $PreferenceTravelDates = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PreferenceTravelDates[]
     */
    public function getPreferenceTravelDates()
    {
      return $this->PreferenceTravelDates;
    }

    /**
     * @param PreferenceTravelDates[] $PreferenceTravelDates
     * @return \App\models\ATSFlight\ArrayOfPreferenceTravelDates
     */
    public function setPreferenceTravelDates(array $PreferenceTravelDates = null)
    {
      $this->PreferenceTravelDates = $PreferenceTravelDates;
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
      return isset($this->PreferenceTravelDates[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PreferenceTravelDates
     */
    public function offsetGet($offset)
    {
      return $this->PreferenceTravelDates[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PreferenceTravelDates $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PreferenceTravelDates[] = $value;
      } else {
        $this->PreferenceTravelDates[$offset] = $value;
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
      unset($this->PreferenceTravelDates[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PreferenceTravelDates Return the current element
     */
    public function current()
    {
      return current($this->PreferenceTravelDates);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PreferenceTravelDates);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PreferenceTravelDates);
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
      reset($this->PreferenceTravelDates);
    }

    /**
     * Countable implementation
     *
     * @return PreferenceTravelDates Return count of elements
     */
    public function count()
    {
      return count($this->PreferenceTravelDates);
    }

}
