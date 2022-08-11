<?php

namespace App\models\ATSFlight;

class ArrayOfPhoneDetails implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PhoneDetails[] $PhoneDetails
     */
    protected $PhoneDetails = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PhoneDetails[]
     */
    public function getPhoneDetails()
    {
      return $this->PhoneDetails;
    }

    /**
     * @param PhoneDetails[] $PhoneDetails
     * @return \App\models\ATSFlight\ArrayOfPhoneDetails
     */
    public function setPhoneDetails(array $PhoneDetails = null)
    {
      $this->PhoneDetails = $PhoneDetails;
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
      return isset($this->PhoneDetails[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PhoneDetails
     */
    public function offsetGet($offset)
    {
      return $this->PhoneDetails[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PhoneDetails $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PhoneDetails[] = $value;
      } else {
        $this->PhoneDetails[$offset] = $value;
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
      unset($this->PhoneDetails[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PhoneDetails Return the current element
     */
    public function current()
    {
      return current($this->PhoneDetails);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PhoneDetails);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PhoneDetails);
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
      reset($this->PhoneDetails);
    }

    /**
     * Countable implementation
     *
     * @return PhoneDetails Return count of elements
     */
    public function count()
    {
      return count($this->PhoneDetails);
    }

}
