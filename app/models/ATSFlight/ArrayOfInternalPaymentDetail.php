<?php

namespace App\models\ATSFlight;

class ArrayOfInternalPaymentDetail implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var InternalPaymentDetail[] $InternalPaymentDetail
     */
    protected $InternalPaymentDetail = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InternalPaymentDetail[]
     */
    public function getInternalPaymentDetail()
    {
      return $this->InternalPaymentDetail;
    }

    /**
     * @param InternalPaymentDetail[] $InternalPaymentDetail
     * @return \App\models\ATSFlight\ArrayOfInternalPaymentDetail
     */
    public function setInternalPaymentDetail(array $InternalPaymentDetail = null)
    {
      $this->InternalPaymentDetail = $InternalPaymentDetail;
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
      return isset($this->InternalPaymentDetail[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return InternalPaymentDetail
     */
    public function offsetGet($offset)
    {
      return $this->InternalPaymentDetail[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param InternalPaymentDetail $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->InternalPaymentDetail[] = $value;
      } else {
        $this->InternalPaymentDetail[$offset] = $value;
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
      unset($this->InternalPaymentDetail[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return InternalPaymentDetail Return the current element
     */
    public function current()
    {
      return current($this->InternalPaymentDetail);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->InternalPaymentDetail);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->InternalPaymentDetail);
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
      reset($this->InternalPaymentDetail);
    }

    /**
     * Countable implementation
     *
     * @return InternalPaymentDetail Return count of elements
     */
    public function count()
    {
      return count($this->InternalPaymentDetail);
    }

}
