<?php

namespace App\models\ATSFlight;

class ArrayOfRoutingsResponseRouting implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RoutingsResponseRouting[] $RoutingsResponseRouting
     */
    protected $RoutingsResponseRouting = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RoutingsResponseRouting[]
     */
    public function getRoutingsResponseRouting()
    {
      return $this->RoutingsResponseRouting;
    }

    /**
     * @param RoutingsResponseRouting[] $RoutingsResponseRouting
     * @return \App\models\ATSFlight\ArrayOfRoutingsResponseRouting
     */
    public function setRoutingsResponseRouting(array $RoutingsResponseRouting = null)
    {
      $this->RoutingsResponseRouting = $RoutingsResponseRouting;
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
      return isset($this->RoutingsResponseRouting[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RoutingsResponseRouting
     */
    public function offsetGet($offset)
    {
      return $this->RoutingsResponseRouting[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RoutingsResponseRouting $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RoutingsResponseRouting[] = $value;
      } else {
        $this->RoutingsResponseRouting[$offset] = $value;
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
      unset($this->RoutingsResponseRouting[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RoutingsResponseRouting Return the current element
     */
    public function current()
    {
      return current($this->RoutingsResponseRouting);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RoutingsResponseRouting);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RoutingsResponseRouting);
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
      reset($this->RoutingsResponseRouting);
    }

    /**
     * Countable implementation
     *
     * @return RoutingsResponseRouting Return count of elements
     */
    public function count()
    {
      return count($this->RoutingsResponseRouting);
    }

}
