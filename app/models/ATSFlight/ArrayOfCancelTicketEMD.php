<?php

namespace App\models\ATSFlight;

class ArrayOfCancelTicketEMD implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CancelTicketEMD[] $CancelTicketEMD
     */
    protected $CancelTicketEMD = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CancelTicketEMD[]
     */
    public function getCancelTicketEMD()
    {
      return $this->CancelTicketEMD;
    }

    /**
     * @param CancelTicketEMD[] $CancelTicketEMD
     * @return \App\models\ATSFlight\ArrayOfCancelTicketEMD
     */
    public function setCancelTicketEMD(array $CancelTicketEMD = null)
    {
      $this->CancelTicketEMD = $CancelTicketEMD;
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
      return isset($this->CancelTicketEMD[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CancelTicketEMD
     */
    public function offsetGet($offset)
    {
      return $this->CancelTicketEMD[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CancelTicketEMD $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CancelTicketEMD[] = $value;
      } else {
        $this->CancelTicketEMD[$offset] = $value;
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
      unset($this->CancelTicketEMD[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CancelTicketEMD Return the current element
     */
    public function current()
    {
      return current($this->CancelTicketEMD);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CancelTicketEMD);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CancelTicketEMD);
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
      reset($this->CancelTicketEMD);
    }

    /**
     * Countable implementation
     *
     * @return CancelTicketEMD Return count of elements
     */
    public function count()
    {
      return count($this->CancelTicketEMD);
    }

}
