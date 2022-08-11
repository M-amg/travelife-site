<?php

namespace App\models\ATSFlight;

class ArrayOfPNRResponseStoredFareTKTSement implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PNRResponseStoredFareTKTSement[] $PNRResponseStoredFareTKTSement
     */
    protected $PNRResponseStoredFareTKTSement = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PNRResponseStoredFareTKTSement[]
     */
    public function getPNRResponseStoredFareTKTSement()
    {
      return $this->PNRResponseStoredFareTKTSement;
    }

    /**
     * @param PNRResponseStoredFareTKTSement[] $PNRResponseStoredFareTKTSement
     * @return \App\models\ATSFlight\ArrayOfPNRResponseStoredFareTKTSement
     */
    public function setPNRResponseStoredFareTKTSement(array $PNRResponseStoredFareTKTSement = null)
    {
      $this->PNRResponseStoredFareTKTSement = $PNRResponseStoredFareTKTSement;
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
      return isset($this->PNRResponseStoredFareTKTSement[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PNRResponseStoredFareTKTSement
     */
    public function offsetGet($offset)
    {
      return $this->PNRResponseStoredFareTKTSement[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PNRResponseStoredFareTKTSement $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PNRResponseStoredFareTKTSement[] = $value;
      } else {
        $this->PNRResponseStoredFareTKTSement[$offset] = $value;
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
      unset($this->PNRResponseStoredFareTKTSement[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PNRResponseStoredFareTKTSement Return the current element
     */
    public function current()
    {
      return current($this->PNRResponseStoredFareTKTSement);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PNRResponseStoredFareTKTSement);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PNRResponseStoredFareTKTSement);
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
      reset($this->PNRResponseStoredFareTKTSement);
    }

    /**
     * Countable implementation
     *
     * @return PNRResponseStoredFareTKTSement Return count of elements
     */
    public function count()
    {
      return count($this->PNRResponseStoredFareTKTSement);
    }

}
