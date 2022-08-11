<?php

namespace App\models\ATSFlight;

class ArrayOfEntryClient implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var EntryClient[] $EntryClient
     */
    protected $EntryClient = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EntryClient[]
     */
    public function getEntryClient()
    {
      return $this->EntryClient;
    }

    /**
     * @param EntryClient[] $EntryClient
     * @return \App\models\ATSFlight\ArrayOfEntryClient
     */
    public function setEntryClient(array $EntryClient = null)
    {
      $this->EntryClient = $EntryClient;
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
      return isset($this->EntryClient[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return EntryClient
     */
    public function offsetGet($offset)
    {
      return $this->EntryClient[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param EntryClient $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->EntryClient[] = $value;
      } else {
        $this->EntryClient[$offset] = $value;
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
      unset($this->EntryClient[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return EntryClient Return the current element
     */
    public function current()
    {
      return current($this->EntryClient);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->EntryClient);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->EntryClient);
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
      reset($this->EntryClient);
    }

    /**
     * Countable implementation
     *
     * @return EntryClient Return count of elements
     */
    public function count()
    {
      return count($this->EntryClient);
    }

}
