<?php

namespace App\models\hotelAPI\Commons;

class GetCountriesRS
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
     * @return \App\models\hotelAPI\Commons\GetCountriesRS
     */
    public function setList(array $list = null)
    {
      $this->list = $list;
      return $this;
    }

}
