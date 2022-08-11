<?php

namespace App\models\hotelAPI\Commons;

class Section extends SectionBase
{

    /**
     * @var Area[] $areas
     */
    protected $areas = null;

    /**
     * @param int $order
     */
    public function __construct($order)
    {
      parent::__construct($order);
    }

    /**
     * @return Area[]
     */
    public function getAreas()
    {
      return $this->areas;
    }

    /**
     * @param Area[] $areas
     * @return \App\models\hotelAPI\Commons\Section
     */
    public function setAreas(array $areas = null)
    {
      $this->areas = $areas;
      return $this;
    }

}
