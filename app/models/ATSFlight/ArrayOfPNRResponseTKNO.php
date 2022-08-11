<?php

namespace App\models\ATSFlight;

class ArrayOfPNRResponseTKNO implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PNRResponseTKNO[] $PNRResponseTKNO
     */
    protected $PNRResponseTKNO = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PNRResponseTKNO[]
     */
    public function getPNRResponseTKNO()
    {
      return $this->PNRResponseTKNO;
    }

    /**
     * @param PNRResponseTKNO[] $PNRResponseTKNO
     * @return \App\models\ATSFlight\ArrayOfPNRResponseTKNO
     */
    public function setPNRResponseTKNO(array $PNRResponseTKNO = null)
    {
      $this->PNRResponseTKNO = $PNRResponseTKNO;
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
      return isset($this->PNRResponseTKNO[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PNRResponseTKNO
     */
    public function offsetGet($offset)
    {
      return $this->PNRResponseTKNO[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PNRResponseTKNO $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PNRResponseTKNO[] = $value;
      } else {
        $this->PNRResponseTKNO[$offset] = $value;
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
      unset($this->PNRResponseTKNO[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PNRResponseTKNO Return the current element
     */
    public function current()
    {
      return current($this->PNRResponseTKNO);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PNRResponseTKNO);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PNRResponseTKNO);
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
      reset($this->PNRResponseTKNO);
    }

    /**
     * Countable implementation
     *
     * @return PNRResponseTKNO Return count of elements
     */
    public function count()
    {
      return count($this->PNRResponseTKNO);
    }

}
