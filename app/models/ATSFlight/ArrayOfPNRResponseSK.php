<?php

namespace App\models\ATSFlight;

class ArrayOfPNRResponseSK implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PNRResponseSK[] $PNRResponseSK
     */
    protected $PNRResponseSK = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PNRResponseSK[]
     */
    public function getPNRResponseSK()
    {
      return $this->PNRResponseSK;
    }

    /**
     * @param PNRResponseSK[] $PNRResponseSK
     * @return \App\models\ATSFlight\ArrayOfPNRResponseSK
     */
    public function setPNRResponseSK(array $PNRResponseSK = null)
    {
      $this->PNRResponseSK = $PNRResponseSK;
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
      return isset($this->PNRResponseSK[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PNRResponseSK
     */
    public function offsetGet($offset)
    {
      return $this->PNRResponseSK[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PNRResponseSK $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PNRResponseSK[] = $value;
      } else {
        $this->PNRResponseSK[$offset] = $value;
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
      unset($this->PNRResponseSK[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PNRResponseSK Return the current element
     */
    public function current()
    {
      return current($this->PNRResponseSK);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PNRResponseSK);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PNRResponseSK);
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
      reset($this->PNRResponseSK);
    }

    /**
     * Countable implementation
     *
     * @return PNRResponseSK Return count of elements
     */
    public function count()
    {
      return count($this->PNRResponseSK);
    }

}
