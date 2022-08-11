<?php

namespace App\models\ATSFlight;

class ArrayOfRuleInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RuleInfo[] $RuleInfo
     */
    protected $RuleInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RuleInfo[]
     */
    public function getRuleInfo()
    {
      return $this->RuleInfo;
    }

    /**
     * @param RuleInfo[] $RuleInfo
     * @return \App\models\ATSFlight\ArrayOfRuleInfo
     */
    public function setRuleInfo(array $RuleInfo = null)
    {
      $this->RuleInfo = $RuleInfo;
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
      return isset($this->RuleInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RuleInfo
     */
    public function offsetGet($offset)
    {
      return $this->RuleInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RuleInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RuleInfo[] = $value;
      } else {
        $this->RuleInfo[$offset] = $value;
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
      unset($this->RuleInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RuleInfo Return the current element
     */
    public function current()
    {
      return current($this->RuleInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RuleInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RuleInfo);
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
      reset($this->RuleInfo);
    }

    /**
     * Countable implementation
     *
     * @return RuleInfo Return count of elements
     */
    public function count()
    {
      return count($this->RuleInfo);
    }

}
