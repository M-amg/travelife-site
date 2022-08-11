<?php

namespace App\models\hotelAPI\Hotels;

class POClass
{

    /**
     * @var boolean $hasChildren
     */
    protected $hasChildren = null;

    /**
     * @var boolean $hasChildrenWithActiveOffer
     */
    protected $hasChildrenWithActiveOffer = null;

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $idParent
     */
    protected $idParent = null;

    /**
     * @var int $level
     */
    protected $level = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var boolean $newClass
     */
    protected $newClass = null;

    /**
     * @var int $order
     */
    protected $order = null;

    /**
     * @var string $photo
     */
    protected $photo = null;

    /**
     * @var PO[] $po
     */
    protected $po = null;

    /**
     * @var POClass[] $poClass
     */
    protected $poClass = null;

    /**
     * @var string $slug
     */
    protected $slug = null;

    /**
     * @var boolean $status
     */
    protected $status = null;

    /**
     * @param boolean $hasChildren
     * @param boolean $hasChildrenWithActiveOffer
     * @param boolean $newClass
     */
    public function __construct($hasChildren, $hasChildrenWithActiveOffer, $newClass)
    {
      $this->hasChildren = $hasChildren;
      $this->hasChildrenWithActiveOffer = $hasChildrenWithActiveOffer;
      $this->newClass = $newClass;
    }

    /**
     * @return boolean
     */
    public function getHasChildren()
    {
      return $this->hasChildren;
    }

    /**
     * @param boolean $hasChildren
     * @return \App\models\hotelAPI\Hotels\POClass
     */
    public function setHasChildren($hasChildren)
    {
      $this->hasChildren = $hasChildren;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasChildrenWithActiveOffer()
    {
      return $this->hasChildrenWithActiveOffer;
    }

    /**
     * @param boolean $hasChildrenWithActiveOffer
     * @return \App\models\hotelAPI\Hotels\POClass
     */
    public function setHasChildrenWithActiveOffer($hasChildrenWithActiveOffer)
    {
      $this->hasChildrenWithActiveOffer = $hasChildrenWithActiveOffer;
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
     * @return \App\models\hotelAPI\Hotels\POClass
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdParent()
    {
      return $this->idParent;
    }

    /**
     * @param string $idParent
     * @return \App\models\hotelAPI\Hotels\POClass
     */
    public function setIdParent($idParent)
    {
      $this->idParent = $idParent;
      return $this;
    }

    /**
     * @return int
     */
    public function getLevel()
    {
      return $this->level;
    }

    /**
     * @param int $level
     * @return \App\models\hotelAPI\Hotels\POClass
     */
    public function setLevel($level)
    {
      $this->level = $level;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \App\models\hotelAPI\Hotels\POClass
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNewClass()
    {
      return $this->newClass;
    }

    /**
     * @param boolean $newClass
     * @return \App\models\hotelAPI\Hotels\POClass
     */
    public function setNewClass($newClass)
    {
      $this->newClass = $newClass;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrder()
    {
      return $this->order;
    }

    /**
     * @param int $order
     * @return \App\models\hotelAPI\Hotels\POClass
     */
    public function setOrder($order)
    {
      $this->order = $order;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhoto()
    {
      return $this->photo;
    }

    /**
     * @param string $photo
     * @return \App\models\hotelAPI\Hotels\POClass
     */
    public function setPhoto($photo)
    {
      $this->photo = $photo;
      return $this;
    }

    /**
     * @return PO[]
     */
    public function getPo()
    {
      return $this->po;
    }

    /**
     * @param PO[] $po
     * @return \App\models\hotelAPI\Hotels\POClass
     */
    public function setPo(array $po = null)
    {
      $this->po = $po;
      return $this;
    }

    /**
     * @return POClass[]
     */
    public function getPoClass()
    {
      return $this->poClass;
    }

    /**
     * @param POClass[] $poClass
     * @return \App\models\hotelAPI\Hotels\POClass
     */
    public function setPoClass(array $poClass = null)
    {
      $this->poClass = $poClass;
      return $this;
    }

    /**
     * @return string
     */
    public function getSlug()
    {
      return $this->slug;
    }

    /**
     * @param string $slug
     * @return \App\models\hotelAPI\Hotels\POClass
     */
    public function setSlug($slug)
    {
      $this->slug = $slug;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param boolean $status
     * @return \App\models\hotelAPI\Hotels\POClass
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
