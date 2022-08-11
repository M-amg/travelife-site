<?php

namespace App\models\hotelAPI\Hotels;

class ConfirmExtendsRS extends ConfirmRS
{

    /**
     * @param int $positionInBasket
     */
    public function __construct($positionInBasket)
    {
      parent::__construct($positionInBasket);
    }

}
