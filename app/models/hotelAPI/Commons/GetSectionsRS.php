<?php

namespace App\models\hotelAPI\Commons;

class GetSectionsRS
{

    /**
     * @var Section[] $sections
     */
    protected $sections = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Section[]
     */
    public function getSections()
    {
      return $this->sections;
    }

    /**
     * @param Section[] $sections
     * @return \App\models\hotelAPI\Commons\GetSectionsRS
     */
    public function setSections(array $sections = null)
    {
      $this->sections = $sections;
      return $this;
    }

}
