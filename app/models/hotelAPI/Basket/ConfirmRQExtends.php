<?php

namespace App\models\hotelAPI\Basket;

class ConfirmRQExtends extends ConfirmRQ
{

    /**
     * @var string $agencyReference
     */
    protected $agencyReference = null;

    /**
     * @var string[] $comment
     */
    protected $comment = null;

    /**
     * @var string $sendDocumentationTo
     */
    protected $sendDocumentationTo = null;

    /**
     * @var string $titular
     */
    protected $titular = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getAgencyReference()
    {
      return $this->agencyReference;
    }

    /**
     * @param string $agencyReference
     * @return \App\models\hotelAPI\Basket\ConfirmRQExtends
     */
    public function setAgencyReference($agencyReference)
    {
      $this->agencyReference = $agencyReference;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getComment()
    {
      return $this->comment;
    }

    /**
     * @param string[] $comment
     * @return \App\models\hotelAPI\Basket\ConfirmRQExtends
     */
    public function setComment(array $comment = null)
    {
      $this->comment = $comment;
      return $this;
    }

    /**
     * @return string
     */
    public function getSendDocumentationTo()
    {
      return $this->sendDocumentationTo;
    }

    /**
     * @param string $sendDocumentationTo
     * @return \App\models\hotelAPI\Basket\ConfirmRQExtends
     */
    public function setSendDocumentationTo($sendDocumentationTo)
    {
      $this->sendDocumentationTo = $sendDocumentationTo;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitular()
    {
      return $this->titular;
    }

    /**
     * @param string $titular
     * @return \App\models\hotelAPI\Basket\ConfirmRQExtends
     */
    public function setTitular($titular)
    {
      $this->titular = $titular;
      return $this;
    }

}
