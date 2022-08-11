<?php

namespace App\models\ATSFlight;

class ArrayOfPNRResponseDocumentInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PNRResponseDocumentInfo[] $PNRResponseDocumentInfo
     */
    protected $PNRResponseDocumentInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PNRResponseDocumentInfo[]
     */
    public function getPNRResponseDocumentInfo()
    {
      return $this->PNRResponseDocumentInfo;
    }

    /**
     * @param PNRResponseDocumentInfo[] $PNRResponseDocumentInfo
     * @return \App\models\ATSFlight\ArrayOfPNRResponseDocumentInfo
     */
    public function setPNRResponseDocumentInfo(array $PNRResponseDocumentInfo = null)
    {
      $this->PNRResponseDocumentInfo = $PNRResponseDocumentInfo;
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
      return isset($this->PNRResponseDocumentInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PNRResponseDocumentInfo
     */
    public function offsetGet($offset)
    {
      return $this->PNRResponseDocumentInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PNRResponseDocumentInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PNRResponseDocumentInfo[] = $value;
      } else {
        $this->PNRResponseDocumentInfo[$offset] = $value;
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
      unset($this->PNRResponseDocumentInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PNRResponseDocumentInfo Return the current element
     */
    public function current()
    {
      return current($this->PNRResponseDocumentInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PNRResponseDocumentInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PNRResponseDocumentInfo);
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
      reset($this->PNRResponseDocumentInfo);
    }

    /**
     * Countable implementation
     *
     * @return PNRResponseDocumentInfo Return count of elements
     */
    public function count()
    {
      return count($this->PNRResponseDocumentInfo);
    }

}
