<?php

namespace App\models\ATSFlight;

class ArrayOfProcessingRequestProcess implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProcessingRequestProcess[] $ProcessingRequestProcess
     */
    protected $ProcessingRequestProcess = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProcessingRequestProcess[]
     */
    public function getProcessingRequestProcess()
    {
      return $this->ProcessingRequestProcess;
    }

    /**
     * @param ProcessingRequestProcess[] $ProcessingRequestProcess
     * @return \App\models\ATSFlight\ArrayOfProcessingRequestProcess
     */
    public function setProcessingRequestProcess(array $ProcessingRequestProcess = null)
    {
      $this->ProcessingRequestProcess = $ProcessingRequestProcess;
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
      return isset($this->ProcessingRequestProcess[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProcessingRequestProcess
     */
    public function offsetGet($offset)
    {
      return $this->ProcessingRequestProcess[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProcessingRequestProcess $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ProcessingRequestProcess[] = $value;
      } else {
        $this->ProcessingRequestProcess[$offset] = $value;
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
      unset($this->ProcessingRequestProcess[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProcessingRequestProcess Return the current element
     */
    public function current()
    {
      return current($this->ProcessingRequestProcess);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProcessingRequestProcess);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProcessingRequestProcess);
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
      reset($this->ProcessingRequestProcess);
    }

    /**
     * Countable implementation
     *
     * @return ProcessingRequestProcess Return count of elements
     */
    public function count()
    {
      return count($this->ProcessingRequestProcess);
    }

}
