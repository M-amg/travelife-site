<?php

namespace App\models\hotelAPI\Commons;

class GetAreasRQV12 extends GetAreasRQ
{

    /**
     * @var string $sectionId
     */
    protected $sectionId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getSectionId()
    {
      return $this->sectionId;
    }

    /**
     * @param string $sectionId
     * @return \App\models\hotelAPI\Commons\GetAreasRQV12
     */
    public function setSectionId($sectionId)
    {
      $this->sectionId = $sectionId;
      return $this;
    }

}
