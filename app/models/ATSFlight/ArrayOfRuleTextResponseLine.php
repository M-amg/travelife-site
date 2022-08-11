<?php

namespace App\models\ATSFlight;

class ArrayOfRuleTextResponseLine implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RuleTextResponseLine[] $RuleTextResponseLine
     */
    protected $RuleTextResponseLine = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RuleTextResponseLine[]
     */
    public function getRuleTextResponseLine()
    {
      return $this->RuleTextResponseLine;
    }

    /**
     * @param RuleTextResponseLine[] $RuleTextResponseLine
     * @return \App\models\ATSFlight\ArrayOfRuleTextResponseLine
     */
    public function setRuleTextResponseLine(array $RuleTextResponseLine = null)
    {
      $this->RuleTextResponseLine = $RuleTextResponseLine;
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
      return isset($this->RuleTextResponseLine[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RuleTextResponseLine
     */
    public function offsetGet($offset)
    {
      return $this->RuleTextResponseLine[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RuleTextResponseLine $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RuleTextResponseLine[] = $value;
      } else {
        $this->RuleTextResponseLine[$offset] = $value;
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
      unset($this->RuleTextResponseLine[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RuleTextResponseLine Return the current element
     */
    public function current()
    {
      return current($this->RuleTextResponseLine);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RuleTextResponseLine);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RuleTextResponseLine);
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
      reset($this->RuleTextResponseLine);
    }

    /**
     * Countable implementation
     *
     * @return RuleTextResponseLine Return count of elements
     */
    public function count()
    {
      return count($this->RuleTextResponseLine);
    }

}
