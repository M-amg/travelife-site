<?php

namespace App\models\ATSFlight;

class ArrayOfCorporateQuoteData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CorporateQuoteData[] $CorporateQuoteData
     */
    protected $CorporateQuoteData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CorporateQuoteData[]
     */
    public function getCorporateQuoteData()
    {
      return $this->CorporateQuoteData;
    }

    /**
     * @param CorporateQuoteData[] $CorporateQuoteData
     * @return \App\models\ATSFlight\ArrayOfCorporateQuoteData
     */
    public function setCorporateQuoteData(array $CorporateQuoteData = null)
    {
      $this->CorporateQuoteData = $CorporateQuoteData;
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
      return isset($this->CorporateQuoteData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CorporateQuoteData
     */
    public function offsetGet($offset)
    {
      return $this->CorporateQuoteData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CorporateQuoteData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CorporateQuoteData[] = $value;
      } else {
        $this->CorporateQuoteData[$offset] = $value;
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
      unset($this->CorporateQuoteData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CorporateQuoteData Return the current element
     */
    public function current()
    {
      return current($this->CorporateQuoteData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CorporateQuoteData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CorporateQuoteData);
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
      reset($this->CorporateQuoteData);
    }

    /**
     * Countable implementation
     *
     * @return CorporateQuoteData Return count of elements
     */
    public function count()
    {
      return count($this->CorporateQuoteData);
    }

}
