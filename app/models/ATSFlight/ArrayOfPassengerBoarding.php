<?php

namespace App\models\ATSFlight;

class ArrayOfPassengerBoarding implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PassengerBoarding[] $PassengerBoarding
     */
    protected $PassengerBoarding = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PassengerBoarding[]
     */
    public function getPassengerBoarding()
    {
      return $this->PassengerBoarding;
    }

    /**
     * @param PassengerBoarding[] $PassengerBoarding
     * @return \App\models\ATSFlight\ArrayOfPassengerBoarding
     */
    public function setPassengerBoarding(array $PassengerBoarding = null)
    {
      $this->PassengerBoarding = $PassengerBoarding;
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
      return isset($this->PassengerBoarding[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PassengerBoarding
     */
    public function offsetGet($offset)
    {
      return $this->PassengerBoarding[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PassengerBoarding $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PassengerBoarding[] = $value;
      } else {
        $this->PassengerBoarding[$offset] = $value;
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
      unset($this->PassengerBoarding[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PassengerBoarding Return the current element
     */
    public function current()
    {
      return current($this->PassengerBoarding);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PassengerBoarding);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PassengerBoarding);
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
      reset($this->PassengerBoarding);
    }

    /**
     * Countable implementation
     *
     * @return PassengerBoarding Return count of elements
     */
    public function count()
    {
      return count($this->PassengerBoarding);
    }

}
