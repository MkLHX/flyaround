<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="planemodel")
 */
class PlaneModel
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $model;

    /**
     * @ORM\Column(type="string")
     */
    private $manufacturer;

    /**
     * @ORM\Column(type="integer")
     */
    private $cruiseSpeed;

    /**
     * @ORM\Column(type="integer")
     */
    private $planeNbSeats;

    /**
     * @ORM\Column(type="string")
     */
    private $isAvailable;

    /**
     * @ORM\OneToMany(targetEntity="Flight", mappedBy="plane")
     */
    private $planeModels;

    /**
     * Constructor
     */
    public function __constructor()
    {
        $this->planeModels = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->model;

    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set model
     *
     * @param string $model
     * @return PlaneModel
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set manufacturer
     *
     * @param string $manufacturer
     * @return PlaneModel
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    /**
     * Get manufacturer
     *
     * @return string 
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Set cruiseSpeed
     *
     * @param integer $cruiseSpeed
     * @return PlaneModel
     */
    public function setCruiseSpeed($cruiseSpeed)
    {
        $this->cruiseSpeed = $cruiseSpeed;

        return $this;
    }

    /**
     * Get cruiseSpeed
     *
     * @return integer 
     */
    public function getCruiseSpeed()
    {
        return $this->cruiseSpeed;
    }

    /**
     * @return int
     */
    public function getPlaneNbSeats()
    {
        return $this->planeNbSeats;
    }

    /**
     * @param int $planeNbSeats
     */
    public function setPlaneNbSeats($planeNbSeats)
    {
        $this->planeNbSeats = $planeNbSeats;
    }

    /**
     * @return string
     */
    public function getisAvailable()
    {
        return $this->isAvailable;
    }

    /**
     * @param string $isAvailable
     */
    public function setIsAvailable($isAvailable)
    {
        $this->isAvailable = $isAvailable;
    }

    /**
     * @return mixed
     */
    public function getPlaneModels()
    {
        return $this->planeModels;
    }

    /**
     * Add planeModel.
     *
     * @param \AppBundle\Entity\Flight $planeModel
     *
     * @return PlaneModel
     */
    public function addPlaneModel(Flight $planeModel)
    {
        $this->planeModels[] = $planeModel;

        return $this;
    }

    /**
     * Remove planeModel.
     *
     * @param \AppBundle\Entity\Flight $planeModel
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removePlaneModel(Flight $planeModel)
    {
        return $this->planeModels->removeElement($planeModel);
    }
}
