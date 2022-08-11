<?php

namespace App\models\ATSFlight;

class ArrayOfRuleTextResponsePassengerType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RuleTextResponsePassengerType[] $RuleTextResponsePassengerType
     */
    protected $RuleTextResponsePassengerType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RuleTextResponsePassengerType[]
     */
    public function getRuleTextResponsePassengerType()
    {
      return $this->RuleTextResponsePassengerType;
    }

    /**
     * @param RuleTextResponsePassengerType[] $RuleTextResponsePassengerType
     * @return \App\models\ATSFlight\ArrayOfRuleTextResponsePassengerType
     */
    public function setRuleTextResponsePassengerType(array $RuleTextResponsePassengerType = null)
    {
      $this->RuleTextResponsePassengerType = $RuleTextResponsePassengerType;
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
      return isset($this->RuleTextResponsePassengerType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RuleTextResponsePassengerType
     */
    public function offsetGet($offset)
    {
      return $this->RuleTextResponsePassengerType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RuleTextResponsePassengerType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RuleTextResponsePassengerType[] = $value;
      } else {
        $this->RuleTextResponsePassengerType[$offset] = $value;
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
      unset($this->RuleTextResponsePassengerType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RuleTextResponsePassengerType Return the current element
     */
    public function current()
    {
      return current($this->RuleTextResponsePassengerType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RuleTextResponsePassengerType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RuleTextResponsePassengerType);
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
      reset($this->RuleTextResponsePassengerType);
    }

    /**
     * Countable implementation
     *
     * @return RuleTextResponsePassengerType Return count of elements
     */
    public function count()
    {
      return count($this->RuleTextResponsePassengerType);
    }

}
