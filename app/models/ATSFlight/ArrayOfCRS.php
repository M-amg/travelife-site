<?php

namespace App\models\ATSFlight;

class ArrayOfCRS implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CRS[] $CRS
     */
    protected $CRS = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CRS[]
     */
    public function getCRS()
    {
      return $this->CRS;
    }

    /**
     * @param CRS[] $CRS
     * @return \App\models\ATSFlight\ArrayOfCRS
     */
    public function setCRS(array $CRS = null)
    {
      $this->CRS = $CRS;
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
      return isset($this->CRS[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CRS
     */
    public function offsetGet($offset)
    {
      return $this->CRS[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CRS $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CRS[] = $value;
      } else {
        $this->CRS[$offset] = $value;
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
      unset($this->CRS[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CRS Return the current element
     */
    public function current()
    {
      return current($this->CRS);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CRS);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CRS);
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
      reset($this->CRS);
    }

    /**
     * Countable implementation
     *
     * @return CRS Return count of elements
     */
    public function count()
    {
      return count($this->CRS);
    }

}
