<?php

namespace App\models\ATSFlight;

class ArrayOfDetailsResponseLeg implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DetailsResponseLeg[] $DetailsResponseLeg
     */
    protected $DetailsResponseLeg = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DetailsResponseLeg[]
     */
    public function getDetailsResponseLeg()
    {
      return $this->DetailsResponseLeg;
    }

    /**
     * @param DetailsResponseLeg[] $DetailsResponseLeg
     * @return \App\models\ATSFlight\ArrayOfDetailsResponseLeg
     */
    public function setDetailsResponseLeg(array $DetailsResponseLeg = null)
    {
      $this->DetailsResponseLeg = $DetailsResponseLeg;
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
      return isset($this->DetailsResponseLeg[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DetailsResponseLeg
     */
    public function offsetGet($offset)
    {
      return $this->DetailsResponseLeg[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DetailsResponseLeg $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DetailsResponseLeg[] = $value;
      } else {
        $this->DetailsResponseLeg[$offset] = $value;
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
      unset($this->DetailsResponseLeg[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DetailsResponseLeg Return the current element
     */
    public function current()
    {
      return current($this->DetailsResponseLeg);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DetailsResponseLeg);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DetailsResponseLeg);
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
      reset($this->DetailsResponseLeg);
    }

    /**
     * Countable implementation
     *
     * @return DetailsResponseLeg Return count of elements
     */
    public function count()
    {
      return count($this->DetailsResponseLeg);
    }

}
