<?php

namespace App\models\ATSFlight;

class ArrayOfSeasonDateData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SeasonDateData[] $SeasonDateData
     */
    protected $SeasonDateData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SeasonDateData[]
     */
    public function getSeasonDateData()
    {
      return $this->SeasonDateData;
    }

    /**
     * @param SeasonDateData[] $SeasonDateData
     * @return \App\models\ATSFlight\ArrayOfSeasonDateData
     */
    public function setSeasonDateData(array $SeasonDateData = null)
    {
      $this->SeasonDateData = $SeasonDateData;
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
      return isset($this->SeasonDateData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SeasonDateData
     */
    public function offsetGet($offset)
    {
      return $this->SeasonDateData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SeasonDateData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->SeasonDateData[] = $value;
      } else {
        $this->SeasonDateData[$offset] = $value;
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
      unset($this->SeasonDateData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SeasonDateData Return the current element
     */
    public function current()
    {
      return current($this->SeasonDateData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SeasonDateData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SeasonDateData);
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
      reset($this->SeasonDateData);
    }

    /**
     * Countable implementation
     *
     * @return SeasonDateData Return count of elements
     */
    public function count()
    {
      return count($this->SeasonDateData);
    }

}
