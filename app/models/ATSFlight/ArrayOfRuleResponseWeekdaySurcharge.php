<?php

namespace App\models\ATSFlight;

class ArrayOfRuleResponseWeekdaySurcharge implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RuleResponseWeekdaySurcharge[] $RuleResponseWeekdaySurcharge
     */
    protected $RuleResponseWeekdaySurcharge = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RuleResponseWeekdaySurcharge[]
     */
    public function getRuleResponseWeekdaySurcharge()
    {
      return $this->RuleResponseWeekdaySurcharge;
    }

    /**
     * @param RuleResponseWeekdaySurcharge[] $RuleResponseWeekdaySurcharge
     * @return \App\models\ATSFlight\ArrayOfRuleResponseWeekdaySurcharge
     */
    public function setRuleResponseWeekdaySurcharge(array $RuleResponseWeekdaySurcharge = null)
    {
      $this->RuleResponseWeekdaySurcharge = $RuleResponseWeekdaySurcharge;
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
      return isset($this->RuleResponseWeekdaySurcharge[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RuleResponseWeekdaySurcharge
     */
    public function offsetGet($offset)
    {
      return $this->RuleResponseWeekdaySurcharge[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RuleResponseWeekdaySurcharge $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RuleResponseWeekdaySurcharge[] = $value;
      } else {
        $this->RuleResponseWeekdaySurcharge[$offset] = $value;
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
      unset($this->RuleResponseWeekdaySurcharge[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RuleResponseWeekdaySurcharge Return the current element
     */
    public function current()
    {
      return current($this->RuleResponseWeekdaySurcharge);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RuleResponseWeekdaySurcharge);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RuleResponseWeekdaySurcharge);
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
      reset($this->RuleResponseWeekdaySurcharge);
    }

    /**
     * Countable implementation
     *
     * @return RuleResponseWeekdaySurcharge Return count of elements
     */
    public function count()
    {
      return count($this->RuleResponseWeekdaySurcharge);
    }

}
