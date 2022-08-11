<?php

namespace App\models\hotelAPI\Hotels;

class ConfirmExtendsRSV12 extends ConfirmRS
{

    /**
     * @param int $positionInBasket
     */
    public function __construct($positionInBasket)
    {
      parent::__construct($positionInBasket);
    }

}
