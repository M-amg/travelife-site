<?php

namespace App\models\ATSFlight;

class ArrayOfRuleResponseTicketType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RuleResponseTicketType[] $RuleResponseTicketType
     */
    protected $RuleResponseTicketType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RuleResponseTicketType[]
     */
    public function getRuleResponseTicketType()
    {
      return $this->RuleResponseTicketType;
    }

    /**
     * @param RuleResponseTicketType[] $RuleResponseTicketType
     * @return \App\models\ATSFlight\ArrayOfRuleResponseTicketType
     */
    public function setRuleResponseTicketType(array $RuleResponseTicketType = null)
    {
      $this->RuleResponseTicketType = $RuleResponseTicketType;
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
      return isset($this->RuleResponseTicketType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RuleResponseTicketType
     */
    public function offsetGet($offset)
    {
      return $this->RuleResponseTicketType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RuleResponseTicketType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RuleResponseTicketType[] = $value;
      } else {
        $this->RuleResponseTicketType[$offset] = $value;
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
      unset($this->RuleResponseTicketType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RuleResponseTicketType Return the current element
     */
    public function current()
    {
      return current($this->RuleResponseTicketType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RuleResponseTicketType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RuleResponseTicketType);
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
      reset($this->RuleResponseTicketType);
    }

    /**
     * Countable implementation
     *
     * @return RuleResponseTicketType Return count of elements
     */
    public function count()
    {
      return count($this->RuleResponseTicketType);
    }

}
