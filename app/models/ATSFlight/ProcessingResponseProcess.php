<?php

namespace App\models\ATSFlight;

class ProcessingResponseProcess
{

    /**
     * @var ArrayOfProcessingResponseContact $ContactDetails
     */
    protected $ContactDetails = null;

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var ArrayOfProcessResponseStatus $ProcessStati
     */
    protected $ProcessStati = null;

    /**
     * @var ArrayOfProcessResponseSegment $Segments
     */
    protected $Segments = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfProcessingResponseContact
     */
    public function getContactDetails()
    {
      return $this->ContactDetails;
    }

    /**
     * @param ArrayOfProcessingResponseContact $ContactDetails
     * @return \App\models\ATSFlight\ProcessingResponseProcess
     */
    public function setContactDetails($ContactDetails)
    {
      $this->ContactDetails = $ContactDetails;
      return $this;
    }

    /**
     * @return int
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param int $ID
     * @return \App\models\ATSFlight\ProcessingResponseProcess
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return ArrayOfProcessResponseStatus
     */
    public function getProcessStati()
    {
      return $this->ProcessStati;
    }

    /**
     * @param ArrayOfProcessResponseStatus $ProcessStati
     * @return \App\models\ATSFlight\ProcessingResponseProcess
     */
    public function setProcessStati($ProcessStati)
    {
      $this->ProcessStati = $ProcessStati;
      return $this;
    }

    /**
     * @return ArrayOfProcessResponseSegment
     */
    public function getSegments()
    {
      return $this->Segments;
    }

    /**
     * @param ArrayOfProcessResponseSegment $Segments
     * @return \App\models\ATSFlight\ProcessingResponseProcess
     */
    public function setSegments($Segments)
    {
      $this->Segments = $Segments;
      return $this;
    }

}
