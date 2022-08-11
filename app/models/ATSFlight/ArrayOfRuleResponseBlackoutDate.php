<?php

namespace App\models\ATSFlight;

class ArrayOfRuleResponseBlackoutDate implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RuleResponseBlackoutDate[] $RuleResponseBlackoutDate
     */
    protected $RuleResponseBlackoutDate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RuleResponseBlackoutDate[]
     */
    public function getRuleResponseBlackoutDate()
    {
      return $this->RuleResponseBlackoutDate;
    }

    /**
     * @param RuleResponseBlackoutDate[] $RuleResponseBlackoutDate
     * @return \App\models\ATSFlight\ArrayOfRuleResponseBlackoutDate
     */
    public function setRuleResponseBlackoutDate(array $RuleResponseBlackoutDate = null)
    {
      $this->RuleResponseBlackoutDate = $RuleResponseBlackoutDate;
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
      return isset($this->RuleResponseBlackoutDate[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RuleResponseBlackoutDate
     */
    public function offsetGet($offset)
    {
      return $this->RuleResponseBlackoutDate[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RuleResponseBlackoutDate $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RuleResponseBlackoutDate[] = $value;
      } else {
        $this->RuleResponseBlackoutDate[$offset] = $value;
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
      unset($this->RuleResponseBlackoutDate[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RuleResponseBlackoutDate Return the current element
     */
    public function current()
    {
      return current($this->RuleResponseBlackoutDate);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RuleResponseBlackoutDate);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RuleResponseBlackoutDate);
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
      reset($this->RuleResponseBlackoutDate);
    }

    /**
     * Countable implementation
     *
     * @return RuleResponseBlackoutDate Return count of elements
     */
    public function count()
    {
      return count($this->RuleResponseBlackoutDate);
    }

}
