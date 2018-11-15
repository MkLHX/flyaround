<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="flight")
 */
class Flight
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Site", inversedBy="departures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $departure;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Site", inversedBy="arrivals")
     * @ORM\JoinColumn(nullable=false)
     */
    private $arrival;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\PlaneModel", inversedBy="planeModels")
     * @ORM\JoinColumn(nullable=false)
     */
    private $plane;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="pilots")
     * @ORM\JoinColumn(nullable=false)
     */
    private $pilot;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbFreeSeats;

    /**
     * @ORM\Column(type="float")
     */
    private $seatPrice;

    /**
     * @ORM\Column(type="datetime")
     */
    private $takeOfTime;

    /**
     * @ORM\Column(type="datetime")
     */
    private $publicationDate;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="boolean")
     */
    private $wasDone;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Reservation", mappedBy="flight")
     */
    private $flights;

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->departure . " " . $this->arrival;
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
     * @return mixed
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * @param mixed $departure
     */
    public function setDeparture($departure)
    {
        $this->departure = $departure;
    }

    /**
     * @return mixed
     */
    public function getArrival()
    {
        return $this->arrival;
    }

    /**
     * @param mixed $arrival
     */
    public function setArrival($arrival)
    {
        $this->arrival = $arrival;
    }

    /**
     * @return mixed
     */
    public function getPlane()
    {
        return $this->plane;
    }

    /**
     * @param mixed $plane
     */
    public function setPlane($plane)
    {
        $this->plane = $plane;
    }

    /**
     * @return mixed
     */
    public function getPilot()
    {
        return $this->pilot;
    }

    /**
     * @param mixed $pilot
     */
    public function setPilot($pilot)
    {
        $this->pilot = $pilot;
    }

    /**
     * @return mixed
     */
    public function getNbFreeSeats()
    {
        return $this->nbFreeSeats;
    }

    /**
     * @param mixed $nbFreeSeats
     */
    public function setNbFreeSeats($nbFreeSeats)
    {
        $this->nbFreeSeats = $nbFreeSeats;
    }

    /**
     * @return mixed
     */
    public function getSeatPrice()
    {
        return $this->seatPrice;
    }

    /**
     * @param mixed $seatPrice
     */
    public function setSeatPrice($seatPrice)
    {
        $this->seatPrice = $seatPrice;
    }

    /**
     * @return mixed
     */
    public function getTakeOfTime()
    {
        return $this->takeOfTime;
    }

    /**
     * @param mixed $takeOfTime
     */
    public function setTakeOfTime($takeOfTime)
    {
        $this->takeOfTime = $takeOfTime;
    }

    /**
     * @return mixed
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * @param mixed $publicationDate
     */
    public function setPublicationDate($publicationDate)
    {
        $this->publicationDate = $publicationDate;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getWasDone()
    {
        return $this->wasDone;
    }

    /**
     * @param mixed $wasDone
     */
    public function setWasDone($wasDone)
    {
        $this->wasDone = $wasDone;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->flights = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add flight.
     *
     * @param \AppBundle\Entity\Reservation $flight
     *
     * @return Flight
     */
    public function addFlight(\AppBundle\Entity\Reservation $flight)
    {
        $this->flights[] = $flight;

        return $this;
    }

    /**
     * Remove flight.
     *
     * @param \AppBundle\Entity\Reservation $flight
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeFlight(\AppBundle\Entity\Reservation $flight)
    {
        return $this->flights->removeElement($flight);
    }

    /**
     * Get flights.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFlights()
    {
        return $this->flights;
    }
}
