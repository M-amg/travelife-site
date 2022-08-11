<?php

namespace App\models\hotelAPI\Commons;

class SectionBase
{

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var int $order
     */
    protected $order = null;

    /**
     * @var string $slug
     */
    protected $slug = null;

    /**
     * @param int $order
     */
    public function __construct($order)
    {
      $this->order = $order;
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
     * @return \App\models\hotelAPI\Commons\SectionBase
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \App\models\hotelAPI\Commons\SectionBase
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrder()
    {
      return $this->order;
    }

    /**
     * @param int $order
     * @return \App\models\hotelAPI\Commons\SectionBase
     */
    public function setOrder($order)
    {
      $this->order = $order;
      return $this;
    }

    /**
     * @return string
     */
    public function getSlug()
    {
      return $this->slug;
    }

    /**
     * @param string $slug
     * @return \App\models\hotelAPI\Commons\SectionBase
     */
    public function setSlug($slug)
    {
      $this->slug = $slug;
      return $this;
    }

}
