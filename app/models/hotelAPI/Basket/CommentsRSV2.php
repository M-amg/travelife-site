<?php

namespace App\models\hotelAPI\Basket;

class CommentsRSV2 extends CommentsRS
{

    /**
     * @var Conditions $conditions
     */
    protected $conditions = null;

    /**
     * @var string $errataType
     */
    protected $errataType = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return Conditions
     */
    public function getConditions()
    {
      return $this->conditions;
    }

    /**
     * @param Conditions $conditions
     * @return \App\models\hotelAPI\Basket\CommentsRSV2
     */
    public function setConditions($conditions)
    {
      $this->conditions = $conditions;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrataType()
    {
      return $this->errataType;
    }

    /**
     * @param string $errataType
     * @return \App\models\hotelAPI\Basket\CommentsRSV2
     */
    public function setErrataType($errataType)
    {
      $this->errataType = $errataType;
      return $this;
    }

}
