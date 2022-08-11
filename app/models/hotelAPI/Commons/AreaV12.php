<?php

namespace App\models\hotelAPI\Commons;

class AreaV12 extends Area
{

    /**
     * @var SectionBase[] $sections
     */
    protected $sections = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return SectionBase[]
     */
    public function getSections()
    {
      return $this->sections;
    }

    /**
     * @param SectionBase[] $sections
     * @return \App\models\hotelAPI\Commons\AreaV12
     */
    public function setSections(array $sections = null)
    {
      $this->sections = $sections;
      return $this;
    }

}
