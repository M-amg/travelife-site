<?php

namespace App\models\ATSFlight;

class ArrayOfRuleTextRequestSegment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RuleTextRequestSegment[] $RuleTextRequestSegment
     */
    protected $RuleTextRequestSegment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RuleTextRequestSegment[]
     */
    public function getRuleTextRequestSegment()
    {
      return $this->RuleTextRequestSegment;
    }

    /**
     * @param RuleTextRequestSegment[] $RuleTextRequestSegment
     * @return \App\models\ATSFlight\ArrayOfRuleTextRequestSegment
     */
    public function setRuleTextRequestSegment(array $RuleTextRequestSegment = null)
    {
      $this->RuleTextRequestSegment = $RuleTextRequestSegment;
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
      return isset($this->RuleTextRequestSegment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RuleTextRequestSegment
     */
    public function offsetGet($offset)
    {
      return $this->RuleTextRequestSegment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RuleTextRequestSegment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RuleTextRequestSegment[] = $value;
      } else {
        $this->RuleTextRequestSegment[$offset] = $value;
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
      unset($this->RuleTextRequestSegment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RuleTextRequestSegment Return the current element
     */
    public function current()
    {
      return current($this->RuleTextRequestSegment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RuleTextRequestSegment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RuleTextRequestSegment);
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
      reset($this->RuleTextRequestSegment);
    }

    /**
     * Countable implementation
     *
     * @return RuleTextRequestSegment Return count of elements
     */
    public function count()
    {
      return count($this->RuleTextRequestSegment);
    }

}
