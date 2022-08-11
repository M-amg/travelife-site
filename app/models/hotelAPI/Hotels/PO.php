<?php

namespace App\models\hotelAPI\Hotels;

class PO
{

    /**
     * @var string $descriptionText
     */
    protected $descriptionText = null;

    /**
     * @var EstablishmentDataRS[] $establishment
     */
    protected $establishment = null;

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $paxType
     */
    protected $paxType = null;

    /**
     * @var string[] $poClass
     */
    protected $poClass = null;

    /**
     * @var POPrice[] $poPrice
     */
    protected $poPrice = null;

    /**
     * @var string $titulo
     */
    protected $titulo = null;

    /**
     * @var \DateTime $valid_from
     */
    protected $valid_from = null;

    /**
     * @var \DateTime $valid_to
     */
    protected $valid_to = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDescriptionText()
    {
      return $this->descriptionText;
    }

    /**
     * @param string $descriptionText
     * @return \App\models\hotelAPI\Hotels\PO
     */
    public function setDescriptionText($descriptionText)
    {
      $this->descriptionText = $descriptionText;
      return $this;
    }

    /**
     * @return EstablishmentDataRS[]
     */
    public function getEstablishment()
    {
      return $this->establishment;
    }

    /**
     * @param EstablishmentDataRS[] $establishment
     * @return \App\models\hotelAPI\Hotels\PO
     */
    public function setEstablishment(array $establishment = null)
    {
      $this->establishment = $establishment;
      return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \App\models\hotelAPI\Hotels\PO
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaxType()
    {
      return $this->paxType;
    }

    /**
     * @param string $paxType
     * @return \App\models\hotelAPI\Hotels\PO
     */
    public function setPaxType($paxType)
    {
      $this->paxType = $paxType;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getPoClass()
    {
      return $this->poClass;
    }

    /**
     * @param string[] $poClass
     * @return \App\models\hotelAPI\Hotels\PO
     */
    public function setPoClass(array $poClass = null)
    {
      $this->poClass = $poClass;
      return $this;
    }

    /**
     * @return POPrice[]
     */
    public function getPoPrice()
    {
      return $this->poPrice;
    }

    /**
     * @param POPrice[] $poPrice
     * @return \App\models\hotelAPI\Hotels\PO
     */
    public function setPoPrice(array $poPrice = null)
    {
      $this->poPrice = $poPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitulo()
    {
      return $this->titulo;
    }

    /**
     * @param string $titulo
     * @return \App\models\hotelAPI\Hotels\PO
     */
    public function setTitulo($titulo)
    {
      $this->titulo = $titulo;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValid_from()
    {
      if ($this->valid_from == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->valid_from);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $valid_from
     * @return \App\models\hotelAPI\Hotels\PO
     */
    public function setValid_from(\DateTime $valid_from = null)
    {
      if ($valid_from == null) {
       $this->valid_from = null;
      } else {
        $this->valid_from = $valid_from->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValid_to()
    {
      if ($this->valid_to == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->valid_to);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $valid_to
     * @return \App\models\hotelAPI\Hotels\PO
     */
    public function setValid_to(\DateTime $valid_to = null)
    {
      if ($valid_to == null) {
       $this->valid_to = null;
      } else {
        $this->valid_to = $valid_to->format(\DateTime::ATOM);
      }
      return $this;
    }

}
