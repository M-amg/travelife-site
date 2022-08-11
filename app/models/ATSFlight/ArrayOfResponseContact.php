<?php

namespace App\models\ATSFlight;

class ArrayOfResponseContact implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ResponseContact[] $ResponseContact
     */
    protected $ResponseContact = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ResponseContact[]
     */
    public function getResponseContact()
    {
      return $this->ResponseContact;
    }

    /**
     * @param ResponseContact[] $ResponseContact
     * @return \App\models\ATSFlight\ArrayOfResponseContact
     */
    public function setResponseContact(array $ResponseContact = null)
    {
      $this->ResponseContact = $ResponseContact;
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
      return isset($this->ResponseContact[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ResponseContact
     */
    public function offsetGet($offset)
    {
      return $this->ResponseContact[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ResponseContact $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ResponseContact[] = $value;
      } else {
        $this->ResponseContact[$offset] = $value;
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
      unset($this->ResponseContact[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ResponseContact Return the current element
     */
    public function current()
    {
      return current($this->ResponseContact);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ResponseContact);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ResponseContact);
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
      reset($this->ResponseContact);
    }

    /**
     * Countable implementation
     *
     * @return ResponseContact Return count of elements
     */
    public function count()
    {
      return count($this->ResponseContact);
    }

}
