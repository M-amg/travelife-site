<?php

namespace App\models\ATSFlight;

class ArrayOfModifyContact implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ModifyContact[] $ModifyContact
     */
    protected $ModifyContact = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ModifyContact[]
     */
    public function getModifyContact()
    {
      return $this->ModifyContact;
    }

    /**
     * @param ModifyContact[] $ModifyContact
     * @return \App\models\ATSFlight\ArrayOfModifyContact
     */
    public function setModifyContact(array $ModifyContact = null)
    {
      $this->ModifyContact = $ModifyContact;
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
      return isset($this->ModifyContact[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ModifyContact
     */
    public function offsetGet($offset)
    {
      return $this->ModifyContact[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ModifyContact $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ModifyContact[] = $value;
      } else {
        $this->ModifyContact[$offset] = $value;
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
      unset($this->ModifyContact[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ModifyContact Return the current element
     */
    public function current()
    {
      return current($this->ModifyContact);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ModifyContact);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ModifyContact);
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
      reset($this->ModifyContact);
    }

    /**
     * Countable implementation
     *
     * @return ModifyContact Return count of elements
     */
    public function count()
    {
      return count($this->ModifyContact);
    }

}
