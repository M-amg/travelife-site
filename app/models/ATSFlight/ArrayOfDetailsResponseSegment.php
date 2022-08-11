<?php

namespace App\models\ATSFlight;

class ArrayOfDetailsResponseSegment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DetailsResponseSegment[] $DetailsResponseSegment
     */
    protected $DetailsResponseSegment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DetailsResponseSegment[]
     */
    public function getDetailsResponseSegment()
    {
      return $this->DetailsResponseSegment;
    }

    /**
     * @param DetailsResponseSegment[] $DetailsResponseSegment
     * @return \App\models\ATSFlight\ArrayOfDetailsResponseSegment
     */
    public function setDetailsResponseSegment(array $DetailsResponseSegment = null)
    {
      $this->DetailsResponseSegment = $DetailsResponseSegment;
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
      return isset($this->DetailsResponseSegment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DetailsResponseSegment
     */
    public function offsetGet($offset)
    {
      return $this->DetailsResponseSegment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DetailsResponseSegment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DetailsResponseSegment[] = $value;
      } else {
        $this->DetailsResponseSegment[$offset] = $value;
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
      unset($this->DetailsResponseSegment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DetailsResponseSegment Return the current element
     */
    public function current()
    {
      return current($this->DetailsResponseSegment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DetailsResponseSegment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DetailsResponseSegment);
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
      reset($this->DetailsResponseSegment);
    }

    /**
     * Countable implementation
     *
     * @return DetailsResponseSegment Return count of elements
     */
    public function count()
    {
      return count($this->DetailsResponseSegment);
    }

}
