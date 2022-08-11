<?php

namespace App\models\ATSFlight;

class ArrayOfRuleResponseBlackoutNumber implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RuleResponseBlackoutNumber[] $RuleResponseBlackoutNumber
     */
    protected $RuleResponseBlackoutNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RuleResponseBlackoutNumber[]
     */
    public function getRuleResponseBlackoutNumber()
    {
      return $this->RuleResponseBlackoutNumber;
    }

    /**
     * @param RuleResponseBlackoutNumber[] $RuleResponseBlackoutNumber
     * @return \App\models\ATSFlight\ArrayOfRuleResponseBlackoutNumber
     */
    public function setRuleResponseBlackoutNumber(array $RuleResponseBlackoutNumber = null)
    {
      $this->RuleResponseBlackoutNumber = $RuleResponseBlackoutNumber;
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
      return isset($this->RuleResponseBlackoutNumber[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RuleResponseBlackoutNumber
     */
    public function offsetGet($offset)
    {
      return $this->RuleResponseBlackoutNumber[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RuleResponseBlackoutNumber $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RuleResponseBlackoutNumber[] = $value;
      } else {
        $this->RuleResponseBlackoutNumber[$offset] = $value;
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
      unset($this->RuleResponseBlackoutNumber[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RuleResponseBlackoutNumber Return the current element
     */
    public function current()
    {
      return current($this->RuleResponseBlackoutNumber);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RuleResponseBlackoutNumber);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RuleResponseBlackoutNumber);
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
      reset($this->RuleResponseBlackoutNumber);
    }

    /**
     * Countable implementation
     *
     * @return RuleResponseBlackoutNumber Return count of elements
     */
    public function count()
    {
      return count($this->RuleResponseBlackoutNumber);
    }

}
