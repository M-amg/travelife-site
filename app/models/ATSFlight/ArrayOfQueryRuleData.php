<?php

namespace App\models\ATSFlight;

class ArrayOfQueryRuleData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var QueryRuleData[] $QueryRuleData
     */
    protected $QueryRuleData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return QueryRuleData[]
     */
    public function getQueryRuleData()
    {
      return $this->QueryRuleData;
    }

    /**
     * @param QueryRuleData[] $QueryRuleData
     * @return \App\models\ATSFlight\ArrayOfQueryRuleData
     */
    public function setQueryRuleData(array $QueryRuleData = null)
    {
      $this->QueryRuleData = $QueryRuleData;
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
      return isset($this->QueryRuleData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return QueryRuleData
     */
    public function offsetGet($offset)
    {
      return $this->QueryRuleData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param QueryRuleData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->QueryRuleData[] = $value;
      } else {
        $this->QueryRuleData[$offset] = $value;
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
      unset($this->QueryRuleData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return QueryRuleData Return the current element
     */
    public function current()
    {
      return current($this->QueryRuleData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->QueryRuleData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->QueryRuleData);
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
      reset($this->QueryRuleData);
    }

    /**
     * Countable implementation
     *
     * @return QueryRuleData Return count of elements
     */
    public function count()
    {
      return count($this->QueryRuleData);
    }

}
