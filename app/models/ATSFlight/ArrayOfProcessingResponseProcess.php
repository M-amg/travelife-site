<?php

namespace App\models\ATSFlight;

class ArrayOfProcessingResponseProcess implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProcessingResponseProcess[] $ProcessingResponseProcess
     */
    protected $ProcessingResponseProcess = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProcessingResponseProcess[]
     */
    public function getProcessingResponseProcess()
    {
      return $this->ProcessingResponseProcess;
    }

    /**
     * @param ProcessingResponseProcess[] $ProcessingResponseProcess
     * @return \App\models\ATSFlight\ArrayOfProcessingResponseProcess
     */
    public function setProcessingResponseProcess(array $ProcessingResponseProcess = null)
    {
      $this->ProcessingResponseProcess = $ProcessingResponseProcess;
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
      return isset($this->ProcessingResponseProcess[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProcessingResponseProcess
     */
    public function offsetGet($offset)
    {
      return $this->ProcessingResponseProcess[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProcessingResponseProcess $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ProcessingResponseProcess[] = $value;
      } else {
        $this->ProcessingResponseProcess[$offset] = $value;
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
      unset($this->ProcessingResponseProcess[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProcessingResponseProcess Return the current element
     */
    public function current()
    {
      return current($this->ProcessingResponseProcess);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProcessingResponseProcess);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProcessingResponseProcess);
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
      reset($this->ProcessingResponseProcess);
    }

    /**
     * Countable implementation
     *
     * @return ProcessingResponseProcess Return count of elements
     */
    public function count()
    {
      return count($this->ProcessingResponseProcess);
    }

}
