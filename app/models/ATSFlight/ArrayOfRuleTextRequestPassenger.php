<?php

namespace App\models\ATSFlight;

class ArrayOfRuleTextRequestPassenger implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RuleTextRequestPassenger[] $RuleTextRequestPassenger
     */
    protected $RuleTextRequestPassenger = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RuleTextRequestPassenger[]
     */
    public function getRuleTextRequestPassenger()
    {
      return $this->RuleTextRequestPassenger;
    }

    /**
     * @param RuleTextRequestPassenger[] $RuleTextRequestPassenger
     * @return \App\models\ATSFlight\ArrayOfRuleTextRequestPassenger
     */
    public function setRuleTextRequestPassenger(array $RuleTextRequestPassenger = null)
    {
      $this->RuleTextRequestPassenger = $RuleTextRequestPassenger;
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
      return isset($this->RuleTextRequestPassenger[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RuleTextRequestPassenger
     */
    public function offsetGet($offset)
    {
      return $this->RuleTextRequestPassenger[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RuleTextRequestPassenger $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RuleTextRequestPassenger[] = $value;
      } else {
        $this->RuleTextRequestPassenger[$offset] = $value;
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
      unset($this->RuleTextRequestPassenger[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RuleTextRequestPassenger Return the current element
     */
    public function current()
    {
      return current($this->RuleTextRequestPassenger);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RuleTextRequestPassenger);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RuleTextRequestPassenger);
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
      reset($this->RuleTextRequestPassenger);
    }

    /**
     * Countable implementation
     *
     * @return RuleTextRequestPassenger Return count of elements
     */
    public function count()
    {
      return count($this->RuleTextRequestPassenger);
    }

}
