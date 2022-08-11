<?php

namespace App\models\ATSFlight;

class ArrayOfRuleResponsePassengerType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RuleResponsePassengerType[] $RuleResponsePassengerType
     */
    protected $RuleResponsePassengerType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RuleResponsePassengerType[]
     */
    public function getRuleResponsePassengerType()
    {
      return $this->RuleResponsePassengerType;
    }

    /**
     * @param RuleResponsePassengerType[] $RuleResponsePassengerType
     * @return \App\models\ATSFlight\ArrayOfRuleResponsePassengerType
     */
    public function setRuleResponsePassengerType(array $RuleResponsePassengerType = null)
    {
      $this->RuleResponsePassengerType = $RuleResponsePassengerType;
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
      return isset($this->RuleResponsePassengerType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RuleResponsePassengerType
     */
    public function offsetGet($offset)
    {
      return $this->RuleResponsePassengerType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RuleResponsePassengerType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RuleResponsePassengerType[] = $value;
      } else {
        $this->RuleResponsePassengerType[$offset] = $value;
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
      unset($this->RuleResponsePassengerType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RuleResponsePassengerType Return the current element
     */
    public function current()
    {
      return current($this->RuleResponsePassengerType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RuleResponsePassengerType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RuleResponsePassengerType);
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
      reset($this->RuleResponsePassengerType);
    }

    /**
     * Countable implementation
     *
     * @return RuleResponsePassengerType Return count of elements
     */
    public function count()
    {
      return count($this->RuleResponsePassengerType);
    }

}
