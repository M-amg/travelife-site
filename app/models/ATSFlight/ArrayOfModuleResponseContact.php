<?php

namespace App\models\ATSFlight;

class ArrayOfModuleResponseContact implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ModuleResponseContact[] $ModuleResponseContact
     */
    protected $ModuleResponseContact = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ModuleResponseContact[]
     */
    public function getModuleResponseContact()
    {
      return $this->ModuleResponseContact;
    }

    /**
     * @param ModuleResponseContact[] $ModuleResponseContact
     * @return \App\models\ATSFlight\ArrayOfModuleResponseContact
     */
    public function setModuleResponseContact(array $ModuleResponseContact = null)
    {
      $this->ModuleResponseContact = $ModuleResponseContact;
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
      return isset($this->ModuleResponseContact[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ModuleResponseContact
     */
    public function offsetGet($offset)
    {
      return $this->ModuleResponseContact[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ModuleResponseContact $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ModuleResponseContact[] = $value;
      } else {
        $this->ModuleResponseContact[$offset] = $value;
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
      unset($this->ModuleResponseContact[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ModuleResponseContact Return the current element
     */
    public function current()
    {
      return current($this->ModuleResponseContact);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ModuleResponseContact);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ModuleResponseContact);
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
      reset($this->ModuleResponseContact);
    }

    /**
     * Countable implementation
     *
     * @return ModuleResponseContact Return count of elements
     */
    public function count()
    {
      return count($this->ModuleResponseContact);
    }

}
