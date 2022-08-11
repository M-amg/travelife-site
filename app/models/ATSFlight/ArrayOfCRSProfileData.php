<?php

namespace App\models\ATSFlight;

class ArrayOfCRSProfileData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CRSProfileData[] $CRSProfileData
     */
    protected $CRSProfileData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CRSProfileData[]
     */
    public function getCRSProfileData()
    {
      return $this->CRSProfileData;
    }

    /**
     * @param CRSProfileData[] $CRSProfileData
     * @return \App\models\ATSFlight\ArrayOfCRSProfileData
     */
    public function setCRSProfileData(array $CRSProfileData = null)
    {
      $this->CRSProfileData = $CRSProfileData;
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
      return isset($this->CRSProfileData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CRSProfileData
     */
    public function offsetGet($offset)
    {
      return $this->CRSProfileData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CRSProfileData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CRSProfileData[] = $value;
      } else {
        $this->CRSProfileData[$offset] = $value;
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
      unset($this->CRSProfileData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CRSProfileData Return the current element
     */
    public function current()
    {
      return current($this->CRSProfileData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CRSProfileData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CRSProfileData);
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
      reset($this->CRSProfileData);
    }

    /**
     * Countable implementation
     *
     * @return CRSProfileData Return count of elements
     */
    public function count()
    {
      return count($this->CRSProfileData);
    }

}
