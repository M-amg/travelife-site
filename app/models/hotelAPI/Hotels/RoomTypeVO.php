<?php

namespace App\models\hotelAPI\Hotels;

class RoomTypeVO
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var int $maxPaxes
     */
    protected $maxPaxes = null;

    /**
     * @var int $minAdults
     */
    protected $minAdults = null;

    /**
     * @var int $minChildren
     */
    protected $minChildren = null;

    /**
     * @var int $minPaxes
     */
    protected $minPaxes = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param int $maxPaxes
     * @param int $minAdults
     * @param int $minChildren
     * @param int $minPaxes
     */
    public function __construct($maxPaxes, $minAdults, $minChildren, $minPaxes)
    {
      $this->maxPaxes = $maxPaxes;
      $this->minAdults = $minAdults;
      $this->minChildren = $minChildren;
      $this->minPaxes = $minPaxes;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return \App\models\hotelAPI\Hotels\RoomTypeVO
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \App\models\hotelAPI\Hotels\RoomTypeVO
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxPaxes()
    {
      return $this->maxPaxes;
    }

    /**
     * @param int $maxPaxes
     * @return \App\models\hotelAPI\Hotels\RoomTypeVO
     */
    public function setMaxPaxes($maxPaxes)
    {
      $this->maxPaxes = $maxPaxes;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinAdults()
    {
      return $this->minAdults;
    }

    /**
     * @param int $minAdults
     * @return \App\models\hotelAPI\Hotels\RoomTypeVO
     */
    public function setMinAdults($minAdults)
    {
      $this->minAdults = $minAdults;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinChildren()
    {
      return $this->minChildren;
    }

    /**
     * @param int $minChildren
     * @return \App\models\hotelAPI\Hotels\RoomTypeVO
     */
    public function setMinChildren($minChildren)
    {
      $this->minChildren = $minChildren;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinPaxes()
    {
      return $this->minPaxes;
    }

    /**
     * @param int $minPaxes
     * @return \App\models\hotelAPI\Hotels\RoomTypeVO
     */
    public function setMinPaxes($minPaxes)
    {
      $this->minPaxes = $minPaxes;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \App\models\hotelAPI\Hotels\RoomTypeVO
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
