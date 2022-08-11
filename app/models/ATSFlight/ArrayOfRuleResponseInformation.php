<?php

namespace App\models\ATSFlight;

class ArrayOfRuleResponseInformation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RuleResponseInformation[] $RuleResponseInformation
     */
    protected $RuleResponseInformation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RuleResponseInformation[]
     */
    public function getRuleResponseInformation()
    {
      return $this->RuleResponseInformation;
    }

    /**
     * @param RuleResponseInformation[] $RuleResponseInformation
     * @return \App\models\ATSFlight\ArrayOfRuleResponseInformation
     */
    public function setRuleResponseInformation(array $RuleResponseInformation = null)
    {
      $this->RuleResponseInformation = $RuleResponseInformation;
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
      return isset($this->RuleResponseInformation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RuleResponseInformation
     */
    public function offsetGet($offset)
    {
      return $this->RuleResponseInformation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RuleResponseInformation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RuleResponseInformation[] = $value;
      } else {
        $this->RuleResponseInformation[$offset] = $value;
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
      unset($this->RuleResponseInformation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RuleResponseInformation Return the current element
     */
    public function current()
    {
      return current($this->RuleResponseInformation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RuleResponseInformation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RuleResponseInformation);
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
      reset($this->RuleResponseInformation);
    }

    /**
     * Countable implementation
     *
     * @return RuleResponseInformation Return count of elements
     */
    public function count()
    {
      return count($this->RuleResponseInformation);
    }

}
