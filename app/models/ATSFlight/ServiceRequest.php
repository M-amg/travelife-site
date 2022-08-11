<?php

namespace App\models\ATSFlight;

class ServiceRequest
{

    /**
     * @var string $Carrier
     */
    protected $Carrier = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var string $Location
     */
    protected $Location = null;

    /**
     * @var ArrayOfint $PassengerSelection
     */
    protected $PassengerSelection = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var ArrayOfint $SegmentSelection
     */
    protected $SegmentSelection = null;

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
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param string $Carrier
     * @return \App\models\ATSFlight\ServiceRequest
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
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
     * @return \App\models\ATSFlight\ServiceRequest
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
      if ($this->Date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date
     * @return \App\models\ATSFlight\ServiceRequest
     */
    public function setDate(\DateTime $Date = null)
    {
      if ($Date == null) {
       $this->Date = null;
      } else {
        $this->Date = $Date->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
      return $this->Location;
    }

    /**
     * @param string $Location
     * @return \App\models\ATSFlight\ServiceRequest
     */
    public function setLocation($Location)
    {
      $this->Location = $Location;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getPassengerSelection()
    {
      return $this->PassengerSelection;
    }

    /**
     * @param ArrayOfint $PassengerSelection
     * @return \App\models\ATSFlight\ServiceRequest
     */
    public function setPassengerSelection($PassengerSelection)
    {
      $this->PassengerSelection = $PassengerSelection;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return \App\models\ATSFlight\ServiceRequest
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getSegmentSelection()
    {
      return $this->SegmentSelection;
    }

    /**
     * @param ArrayOfint $SegmentSelection
     * @return \App\models\ATSFlight\ServiceRequest
     */
    public function setSegmentSelection($SegmentSelection)
    {
      $this->SegmentSelection = $SegmentSelection;
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
     * @return \App\models\ATSFlight\ServiceRequest
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
