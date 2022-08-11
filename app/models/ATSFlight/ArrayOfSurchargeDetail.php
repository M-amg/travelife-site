<?php

namespace App\models\ATSFlight;

class ArrayOfSurchargeDetail implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SurchargeDetail[] $SurchargeDetail
     */
    protected $SurchargeDetail = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SurchargeDetail[]
     */
    public function getSurchargeDetail()
    {
      return $this->SurchargeDetail;
    }

    /**
     * @param SurchargeDetail[] $SurchargeDetail
     * @return \App\models\ATSFlight\ArrayOfSurchargeDetail
     */
    public function setSurchargeDetail(array $SurchargeDetail = null)
    {
      $this->SurchargeDetail = $SurchargeDetail;
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
      return isset($this->SurchargeDetail[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SurchargeDetail
     */
    public function offsetGet($offset)
    {
      return $this->SurchargeDetail[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SurchargeDetail $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SurchargeDetail[] = $value;
      } else {
        $this->SurchargeDetail[$offset] = $value;
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
      unset($this->SurchargeDetail[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SurchargeDetail Return the current element
     */
    public function current()
    {
      return current($this->SurchargeDetail);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SurchargeDetail);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SurchargeDetail);
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
      reset($this->SurchargeDetail);
    }

    /**
     * Countable implementation
     *
     * @return SurchargeDetail Return count of elements
     */
    public function count()
    {
      return count($this->SurchargeDetail);
    }

}
