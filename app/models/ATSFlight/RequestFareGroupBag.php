<?php

namespace App\models\ATSFlight;

class RequestFareGroupBag
{

    /**
     * @var ArrayOfRequestFareGroup $FareGroupItems
     */
    protected $FareGroupItems = null;

    /**
     * @var string $GroupTitle
     */
    protected $GroupTitle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfRequestFareGroup
     */
    public function getFareGroupItems()
    {
      return $this->FareGroupItems;
    }

    /**
     * @param ArrayOfRequestFareGroup $FareGroupItems
     * @return \App\models\ATSFlight\RequestFareGroupBag
     */
    public function setFareGroupItems($FareGroupItems)
    {
      $this->FareGroupItems = $FareGroupItems;
      return $this;
    }

    /**
     * @return string
     */
    public function getGroupTitle()
    {
      return $this->GroupTitle;
    }

    /**
     * @param string $GroupTitle
     * @return \App\models\ATSFlight\RequestFareGroupBag
     */
    public function setGroupTitle($GroupTitle)
    {
      $this->GroupTitle = $GroupTitle;
      return $this;
    }

}
