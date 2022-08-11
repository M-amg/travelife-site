<?php

namespace App\models\hotelAPI\Hotels;

class ConfirmExtendsRSV15 extends ConfirmRS
{

    /**
     * @param int $positionInBasket
     */
    public function __construct($positionInBasket)
    {
      parent::__construct($positionInBasket);
    }

}
