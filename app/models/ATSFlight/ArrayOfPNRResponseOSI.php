<?php

namespace App\models\ATSFlight;

class ArrayOfPNRResponseOSI implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PNRResponseOSI[] $PNRResponseOSI
     */
    protected $PNRResponseOSI = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PNRResponseOSI[]
     */
    public function getPNRResponseOSI()
    {
      return $this->PNRResponseOSI;
    }

    /**
     * @param PNRResponseOSI[] $PNRResponseOSI
     * @return \App\models\ATSFlight\ArrayOfPNRResponseOSI
     */
    public function setPNRResponseOSI(array $PNRResponseOSI = null)
    {
      $this->PNRResponseOSI = $PNRResponseOSI;
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
      return isset($this->PNRResponseOSI[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PNRResponseOSI
     */
    public function offsetGet($offset)
    {
      return $this->PNRResponseOSI[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PNRResponseOSI $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PNRResponseOSI[] = $value;
      } else {
        $this->PNRResponseOSI[$offset] = $value;
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
      unset($this->PNRResponseOSI[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PNRResponseOSI Return the current element
     */
    public function current()
    {
      return current($this->PNRResponseOSI);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PNRResponseOSI);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PNRResponseOSI);
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
      reset($this->PNRResponseOSI);
    }

    /**
     * Countable implementation
     *
     * @return PNRResponseOSI Return count of elements
     */
    public function count()
    {
      return count($this->PNRResponseOSI);
    }

}
