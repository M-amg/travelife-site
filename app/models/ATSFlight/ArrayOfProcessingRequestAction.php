<?php

namespace App\models\ATSFlight;

class ArrayOfProcessingRequestAction implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProcessingRequestAction[] $ProcessingRequestAction
     */
    protected $ProcessingRequestAction = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProcessingRequestAction[]
     */
    public function getProcessingRequestAction()
    {
      return $this->ProcessingRequestAction;
    }

    /**
     * @param ProcessingRequestAction[] $ProcessingRequestAction
     * @return \App\models\ATSFlight\ArrayOfProcessingRequestAction
     */
    public function setProcessingRequestAction(array $ProcessingRequestAction = null)
    {
      $this->ProcessingRequestAction = $ProcessingRequestAction;
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
      return isset($this->ProcessingRequestAction[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProcessingRequestAction
     */
    public function offsetGet($offset)
    {
      return $this->ProcessingRequestAction[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProcessingRequestAction $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ProcessingRequestAction[] = $value;
      } else {
        $this->ProcessingRequestAction[$offset] = $value;
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
      unset($this->ProcessingRequestAction[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProcessingRequestAction Return the current element
     */
    public function current()
    {
      return current($this->ProcessingRequestAction);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProcessingRequestAction);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProcessingRequestAction);
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
      reset($this->ProcessingRequestAction);
    }

    /**
     * Countable implementation
     *
     * @return ProcessingRequestAction Return count of elements
     */
    public function count()
    {
      return count($this->ProcessingRequestAction);
    }

}
