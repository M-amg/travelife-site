<?php

namespace App\models\ATSFlight;

class ArrayOfPNRResponseSSR implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PNRResponseSSR[] $PNRResponseSSR
     */
    protected $PNRResponseSSR = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PNRResponseSSR[]
     */
    public function getPNRResponseSSR()
    {
      return $this->PNRResponseSSR;
    }

    /**
     * @param PNRResponseSSR[] $PNRResponseSSR
     * @return \App\models\ATSFlight\ArrayOfPNRResponseSSR
     */
    public function setPNRResponseSSR(array $PNRResponseSSR = null)
    {
      $this->PNRResponseSSR = $PNRResponseSSR;
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
      return isset($this->PNRResponseSSR[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PNRResponseSSR
     */
    public function offsetGet($offset)
    {
      return $this->PNRResponseSSR[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PNRResponseSSR $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PNRResponseSSR[] = $value;
      } else {
        $this->PNRResponseSSR[$offset] = $value;
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
      unset($this->PNRResponseSSR[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PNRResponseSSR Return the current element
     */
    public function current()
    {
      return current($this->PNRResponseSSR);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PNRResponseSSR);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PNRResponseSSR);
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
      reset($this->PNRResponseSSR);
    }

    /**
     * Countable implementation
     *
     * @return PNRResponseSSR Return count of elements
     */
    public function count()
    {
      return count($this->PNRResponseSSR);
    }

}
