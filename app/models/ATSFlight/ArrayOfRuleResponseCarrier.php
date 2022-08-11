<?php

namespace App\models\ATSFlight;

class ArrayOfRuleResponseCarrier implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RuleResponseCarrier[] $RuleResponseCarrier
     */
    protected $RuleResponseCarrier = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RuleResponseCarrier[]
     */
    public function getRuleResponseCarrier()
    {
      return $this->RuleResponseCarrier;
    }

    /**
     * @param RuleResponseCarrier[] $RuleResponseCarrier
     * @return \App\models\ATSFlight\ArrayOfRuleResponseCarrier
     */
    public function setRuleResponseCarrier(array $RuleResponseCarrier = null)
    {
      $this->RuleResponseCarrier = $RuleResponseCarrier;
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
      return isset($this->RuleResponseCarrier[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RuleResponseCarrier
     */
    public function offsetGet($offset)
    {
      return $this->RuleResponseCarrier[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RuleResponseCarrier $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RuleResponseCarrier[] = $value;
      } else {
        $this->RuleResponseCarrier[$offset] = $value;
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
      unset($this->RuleResponseCarrier[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RuleResponseCarrier Return the current element
     */
    public function current()
    {
      return current($this->RuleResponseCarrier);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RuleResponseCarrier);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RuleResponseCarrier);
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
      reset($this->RuleResponseCarrier);
    }

    /**
     * Countable implementation
     *
     * @return RuleResponseCarrier Return count of elements
     */
    public function count()
    {
      return count($this->RuleResponseCarrier);
    }

}
