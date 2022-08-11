<?php

namespace App\models\ATSFlight;

class ArrayOfPercentageConfig implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PercentageConfig[] $PercentageConfig
     */
    protected $PercentageConfig = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PercentageConfig[]
     */
    public function getPercentageConfig()
    {
      return $this->PercentageConfig;
    }

    /**
     * @param PercentageConfig[] $PercentageConfig
     * @return \App\models\ATSFlight\ArrayOfPercentageConfig
     */
    public function setPercentageConfig(array $PercentageConfig = null)
    {
      $this->PercentageConfig = $PercentageConfig;
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
      return isset($this->PercentageConfig[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PercentageConfig
     */
    public function offsetGet($offset)
    {
      return $this->PercentageConfig[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PercentageConfig $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PercentageConfig[] = $value;
      } else {
        $this->PercentageConfig[$offset] = $value;
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
      unset($this->PercentageConfig[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PercentageConfig Return the current element
     */
    public function current()
    {
      return current($this->PercentageConfig);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PercentageConfig);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PercentageConfig);
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
      reset($this->PercentageConfig);
    }

    /**
     * Countable implementation
     *
     * @return PercentageConfig Return count of elements
     */
    public function count()
    {
      return count($this->PercentageConfig);
    }

}
