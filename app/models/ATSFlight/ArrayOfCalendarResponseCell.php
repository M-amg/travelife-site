<?php

namespace App\models\ATSFlight;

class ArrayOfCalendarResponseCell implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CalendarResponseCell[] $CalendarResponseCell
     */
    protected $CalendarResponseCell = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CalendarResponseCell[]
     */
    public function getCalendarResponseCell()
    {
      return $this->CalendarResponseCell;
    }

    /**
     * @param CalendarResponseCell[] $CalendarResponseCell
     * @return \App\models\ATSFlight\ArrayOfCalendarResponseCell
     */
    public function setCalendarResponseCell(array $CalendarResponseCell = null)
    {
      $this->CalendarResponseCell = $CalendarResponseCell;
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
      return isset($this->CalendarResponseCell[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CalendarResponseCell
     */
    public function offsetGet($offset)
    {
      return $this->CalendarResponseCell[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CalendarResponseCell $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CalendarResponseCell[] = $value;
      } else {
        $this->CalendarResponseCell[$offset] = $value;
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
      unset($this->CalendarResponseCell[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CalendarResponseCell Return the current element
     */
    public function current()
    {
      return current($this->CalendarResponseCell);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CalendarResponseCell);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CalendarResponseCell);
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
      reset($this->CalendarResponseCell);
    }

    /**
     * Countable implementation
     *
     * @return CalendarResponseCell Return count of elements
     */
    public function count()
    {
      return count($this->CalendarResponseCell);
    }

}
