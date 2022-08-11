<?php

namespace App\models\ATSFlight;

class ArrayOfRuleTextRequestLeg implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RuleTextRequestLeg[] $RuleTextRequestLeg
     */
    protected $RuleTextRequestLeg = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RuleTextRequestLeg[]
     */
    public function getRuleTextRequestLeg()
    {
      return $this->RuleTextRequestLeg;
    }

    /**
     * @param RuleTextRequestLeg[] $RuleTextRequestLeg
     * @return \App\models\ATSFlight\ArrayOfRuleTextRequestLeg
     */
    public function setRuleTextRequestLeg(array $RuleTextRequestLeg = null)
    {
      $this->RuleTextRequestLeg = $RuleTextRequestLeg;
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
      return isset($this->RuleTextRequestLeg[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RuleTextRequestLeg
     */
    public function offsetGet($offset)
    {
      return $this->RuleTextRequestLeg[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RuleTextRequestLeg $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RuleTextRequestLeg[] = $value;
      } else {
        $this->RuleTextRequestLeg[$offset] = $value;
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
      unset($this->RuleTextRequestLeg[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RuleTextRequestLeg Return the current element
     */
    public function current()
    {
      return current($this->RuleTextRequestLeg);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RuleTextRequestLeg);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RuleTextRequestLeg);
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
      reset($this->RuleTextRequestLeg);
    }

    /**
     * Countable implementation
     *
     * @return RuleTextRequestLeg Return count of elements
     */
    public function count()
    {
      return count($this->RuleTextRequestLeg);
    }

}
