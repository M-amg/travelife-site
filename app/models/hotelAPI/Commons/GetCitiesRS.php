<?php

namespace App\models\hotelAPI\Commons;

class GetCitiesRS
{

    /**
     * @var Item[] $list
     */
    protected $list = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Item[]
     */
    public function getList()
    {
      return $this->list;
    }

    /**
     * @param Item[] $list
     * @return \App\models\hotelAPI\Commons\GetCitiesRS
     */
    public function setList(array $list = null)
    {
      $this->list = $list;
      return $this;
    }

}
