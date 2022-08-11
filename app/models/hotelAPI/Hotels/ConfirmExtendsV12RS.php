<?php

namespace App\models\hotelAPI\Hotels;

class ConfirmExtendsV12RS extends ConfirmExtendsRS
{

    /**
     * @param int $positionInBasket
     */
    public function __construct($positionInBasket)
    {
      parent::__construct($positionInBasket);
    }

}
