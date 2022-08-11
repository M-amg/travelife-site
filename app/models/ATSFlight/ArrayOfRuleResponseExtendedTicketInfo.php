<?php

namespace App\models\ATSFlight;

class ArrayOfRuleResponseExtendedTicketInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RuleResponseExtendedTicketInfo[] $RuleResponseExtendedTicketInfo
     */
    protected $RuleResponseExtendedTicketInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RuleResponseExtendedTicketInfo[]
     */
    public function getRuleResponseExtendedTicketInfo()
    {
      return $this->RuleResponseExtendedTicketInfo;
    }

    /**
     * @param RuleResponseExtendedTicketInfo[] $RuleResponseExtendedTicketInfo
     * @return \App\models\ATSFlight\ArrayOfRuleResponseExtendedTicketInfo
     */
    public function setRuleResponseExtendedTicketInfo(array $RuleResponseExtendedTicketInfo = null)
    {
      $this->RuleResponseExtendedTicketInfo = $RuleResponseExtendedTicketInfo;
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
      return isset($this->RuleResponseExtendedTicketInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RuleResponseExtendedTicketInfo
     */
    public function offsetGet($offset)
    {
      return $this->RuleResponseExtendedTicketInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RuleResponseExtendedTicketInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->RuleResponseExtendedTicketInfo[] = $value;
      } else {
        $this->RuleResponseExtendedTicketInfo[$offset] = $value;
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
      unset($this->RuleResponseExtendedTicketInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RuleResponseExtendedTicketInfo Return the current element
     */
    public function current()
    {
      return current($this->RuleResponseExtendedTicketInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->RuleResponseExtendedTicketInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->RuleResponseExtendedTicketInfo);
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
      reset($this->RuleResponseExtendedTicketInfo);
    }

    /**
     * Countable implementation
     *
     * @return RuleResponseExtendedTicketInfo Return count of elements
     */
    public function count()
    {
      return count($this->RuleResponseExtendedTicketInfo);
    }

}
