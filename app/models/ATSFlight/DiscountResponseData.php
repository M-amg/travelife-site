<?php

namespace App\models\ATSFlight;

class DiscountResponseData
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $DiscountID
     */
    protected $DiscountID = null;

    /**
     * @var ArrayOfint $PassengerSelections
     */
    protected $PassengerSelections = null;

    /**
     * @var ArrayOfint $SegmentSelections
     */
    protected $SegmentSelections = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \App\models\ATSFlight\DiscountResponseData
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getDiscountID()
    {
      return $this->DiscountID;
    }

    /**
     * @param string $DiscountID
     * @return \App\models\ATSFlight\DiscountResponseData
     */
    public function setDiscountID($DiscountID)
    {
      $this->DiscountID = $DiscountID;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getPassengerSelections()
    {
      return $this->PassengerSelections;
    }

    /**
     * @param ArrayOfint $PassengerSelections
     * @return \App\models\ATSFlight\DiscountResponseData
     */
    public function setPassengerSelections($PassengerSelections)
    {
      $this->PassengerSelections = $PassengerSelections;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getSegmentSelections()
    {
      return $this->SegmentSelections;
    }

    /**
     * @param ArrayOfint $SegmentSelections
     * @return \App\models\ATSFlight\DiscountResponseData
     */
    public function setSegmentSelections($SegmentSelections)
    {
      $this->SegmentSelections = $SegmentSelections;
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \App\models\ATSFlight\DiscountResponseData
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
