<?php

namespace App\models\ATSFlight;

class ArrayOfRuleChapter implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RuleChapter[] $RuleChapter
     */
    protected $RuleChapter = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RuleChapter[]
     */
    public function getRuleChapter()
    {
      return $this->RuleChapter;
    }

    /**
     * @param RuleChapter[] $RuleChapter
     * @return \App\models\ATSFlight\ArrayOfRuleChapter
     */
    public function setRuleChapter(array $RuleChapter = null)
    {
      $this->RuleChapter = $RuleChapter;
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
      return isset($this->RuleChapter[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RuleChapter
     */
    public function offsetGet($offset)
    {
      return $this->RuleChapter[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RuleChapter $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RuleChapter[] = $value;
      } else {
        $this->RuleChapter[$offset] = $value;
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
      unset($this->RuleChapter[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RuleChapter Return the current element
     */
    public function current()
    {
      return current($this->RuleChapter);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RuleChapter);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RuleChapter);
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
      reset($this->RuleChapter);
    }

    /**
     * Countable implementation
     *
     * @return RuleChapter Return count of elements
     */
    public function count()
    {
      return count($this->RuleChapter);
    }

}
