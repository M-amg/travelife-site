<?php

namespace App\models\ATSFlight;

class ArrayOfModifyBookingClass implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ModifyBookingClass[] $ModifyBookingClass
     */
    protected $ModifyBookingClass = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ModifyBookingClass[]
     */
    public function getModifyBookingClass()
    {
      return $this->ModifyBookingClass;
    }

    /**
     * @param ModifyBookingClass[] $ModifyBookingClass
     * @return \App\models\ATSFlight\ArrayOfModifyBookingClass
     */
    public function setModifyBookingClass(array $ModifyBookingClass = null)
    {
      $this->ModifyBookingClass = $ModifyBookingClass;
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
      return isset($this->ModifyBookingClass[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ModifyBookingClass
     */
    public function offsetGet($offset)
    {
      return $this->ModifyBookingClass[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ModifyBookingClass $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ModifyBookingClass[] = $value;
      } else {
        $this->ModifyBookingClass[$offset] = $value;
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
      unset($this->ModifyBookingClass[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ModifyBookingClass Return the current element
     */
    public function current()
    {
      return current($this->ModifyBookingClass);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ModifyBookingClass);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ModifyBookingClass);
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
      reset($this->ModifyBookingClass);
    }

    /**
     * Countable implementation
     *
     * @return ModifyBookingClass Return count of elements
     */
    public function count()
    {
      return count($this->ModifyBookingClass);
    }

}
