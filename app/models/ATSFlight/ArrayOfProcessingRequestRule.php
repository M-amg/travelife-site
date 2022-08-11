<?php

namespace App\models\ATSFlight;

class ArrayOfProcessingRequestRule implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProcessingRequestRule[] $ProcessingRequestRule
     */
    protected $ProcessingRequestRule = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProcessingRequestRule[]
     */
    public function getProcessingRequestRule()
    {
      return $this->ProcessingRequestRule;
    }

    /**
     * @param ProcessingRequestRule[] $ProcessingRequestRule
     * @return \App\models\ATSFlight\ArrayOfProcessingRequestRule
     */
    public function setProcessingRequestRule(array $ProcessingRequestRule = null)
    {
      $this->ProcessingRequestRule = $ProcessingRequestRule;
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
      return isset($this->ProcessingRequestRule[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProcessingRequestRule
     */
    public function offsetGet($offset)
    {
      return $this->ProcessingRequestRule[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProcessingRequestRule $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ProcessingRequestRule[] = $value;
      } else {
        $this->ProcessingRequestRule[$offset] = $value;
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
      unset($this->ProcessingRequestRule[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProcessingRequestRule Return the current element
     */
    public function current()
    {
      return current($this->ProcessingRequestRule);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProcessingRequestRule);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProcessingRequestRule);
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
      reset($this->ProcessingRequestRule);
    }

    /**
     * Countable implementation
     *
     * @return ProcessingRequestRule Return count of elements
     */
    public function count()
    {
      return count($this->ProcessingRequestRule);
    }

}
