<?php

namespace App\models\ATSFlight;

class ArrayOfModifyRequestContact implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ModifyRequestContact[] $ModifyRequestContact
     */
    protected $ModifyRequestContact = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ModifyRequestContact[]
     */
    public function getModifyRequestContact()
    {
      return $this->ModifyRequestContact;
    }

    /**
     * @param ModifyRequestContact[] $ModifyRequestContact
     * @return \App\models\ATSFlight\ArrayOfModifyRequestContact
     */
    public function setModifyRequestContact(array $ModifyRequestContact = null)
    {
      $this->ModifyRequestContact = $ModifyRequestContact;
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
      return isset($this->ModifyRequestContact[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ModifyRequestContact
     */
    public function offsetGet($offset)
    {
      return $this->ModifyRequestContact[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ModifyRequestContact $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ModifyRequestContact[] = $value;
      } else {
        $this->ModifyRequestContact[$offset] = $value;
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
      unset($this->ModifyRequestContact[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ModifyRequestContact Return the current element
     */
    public function current()
    {
      return current($this->ModifyRequestContact);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ModifyRequestContact);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ModifyRequestContact);
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
      reset($this->ModifyRequestContact);
    }

    /**
     * Countable implementation
     *
     * @return ModifyRequestContact Return count of elements
     */
    public function count()
    {
      return count($this->ModifyRequestContact);
    }

}
