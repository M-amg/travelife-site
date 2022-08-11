<?php

namespace App\models\ATSFlight;

class ArrayOfCharterAccount implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CharterAccount[] $CharterAccount
     */
    protected $CharterAccount = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CharterAccount[]
     */
    public function getCharterAccount()
    {
      return $this->CharterAccount;
    }

    /**
     * @param CharterAccount[] $CharterAccount
     * @return \App\models\ATSFlight\ArrayOfCharterAccount
     */
    public function setCharterAccount(array $CharterAccount = null)
    {
      $this->CharterAccount = $CharterAccount;
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
      return isset($this->CharterAccount[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CharterAccount
     */
    public function offsetGet($offset)
    {
      return $this->CharterAccount[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CharterAccount $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CharterAccount[] = $value;
      } else {
        $this->CharterAccount[$offset] = $value;
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
      unset($this->CharterAccount[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CharterAccount Return the current element
     */
    public function current()
    {
      return current($this->CharterAccount);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CharterAccount);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CharterAccount);
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
      reset($this->CharterAccount);
    }

    /**
     * Countable implementation
     *
     * @return CharterAccount Return count of elements
     */
    public function count()
    {
      return count($this->CharterAccount);
    }

}
