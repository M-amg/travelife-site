<?php

namespace App\models\ATSFlight;

class ArrayOfRuleTextResponseRule implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RuleTextResponseRule[] $RuleTextResponseRule
     */
    protected $RuleTextResponseRule = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RuleTextResponseRule[]
     */
    public function getRuleTextResponseRule()
    {
      return $this->RuleTextResponseRule;
    }

    /**
     * @param RuleTextResponseRule[] $RuleTextResponseRule
     * @return \App\models\ATSFlight\ArrayOfRuleTextResponseRule
     */
    public function setRuleTextResponseRule(array $RuleTextResponseRule = null)
    {
      $this->RuleTextResponseRule = $RuleTextResponseRule;
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
      return isset($this->RuleTextResponseRule[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RuleTextResponseRule
     */
    public function offsetGet($offset)
    {
      return $this->RuleTextResponseRule[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RuleTextResponseRule $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RuleTextResponseRule[] = $value;
      } else {
        $this->RuleTextResponseRule[$offset] = $value;
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
      unset($this->RuleTextResponseRule[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RuleTextResponseRule Return the current element
     */
    public function current()
    {
      return current($this->RuleTextResponseRule);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RuleTextResponseRule);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RuleTextResponseRule);
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
      reset($this->RuleTextResponseRule);
    }

    /**
     * Countable implementation
     *
     * @return RuleTextResponseRule Return count of elements
     */
    public function count()
    {
      return count($this->RuleTextResponseRule);
    }

}
