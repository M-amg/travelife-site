<?php

namespace App\models\ATSFlight;

class ArrayOfRuleTextResponseTitle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RuleTextResponseTitle[] $RuleTextResponseTitle
     */
    protected $RuleTextResponseTitle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RuleTextResponseTitle[]
     */
    public function getRuleTextResponseTitle()
    {
      return $this->RuleTextResponseTitle;
    }

    /**
     * @param RuleTextResponseTitle[] $RuleTextResponseTitle
     * @return \App\models\ATSFlight\ArrayOfRuleTextResponseTitle
     */
    public function setRuleTextResponseTitle(array $RuleTextResponseTitle = null)
    {
      $this->RuleTextResponseTitle = $RuleTextResponseTitle;
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
      return isset($this->RuleTextResponseTitle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RuleTextResponseTitle
     */
    public function offsetGet($offset)
    {
      return $this->RuleTextResponseTitle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RuleTextResponseTitle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RuleTextResponseTitle[] = $value;
      } else {
        $this->RuleTextResponseTitle[$offset] = $value;
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
      unset($this->RuleTextResponseTitle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RuleTextResponseTitle Return the current element
     */
    public function current()
    {
      return current($this->RuleTextResponseTitle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RuleTextResponseTitle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RuleTextResponseTitle);
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
      reset($this->RuleTextResponseTitle);
    }

    /**
     * Countable implementation
     *
     * @return RuleTextResponseTitle Return count of elements
     */
    public function count()
    {
      return count($this->RuleTextResponseTitle);
    }

}
