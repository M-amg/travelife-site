<?php

namespace App\models\hotelAPI\Basket;

class GetBasketExtendedRS extends GetBasketRS
{

    /**
     * @var string[] $comments
     */
    protected $comments = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string[]
     */
    public function getComments()
    {
      return $this->comments;
    }

    /**
     * @param string[] $comments
     * @return \App\models\hotelAPI\Basket\GetBasketExtendedRS
     */
    public function setComments(array $comments = null)
    {
      $this->comments = $comments;
      return $this;
    }

}
