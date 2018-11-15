<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="reservation")
 */
class Reservation
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="passengers")
     * @ORM\JoinColumn(nullable=false)
     */
    private $passenger;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Flight", inversedBy="flights")
     * @ORM\JoinColumn(nullable=false)
     */
    private $flight;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbReservedSeats;

    /**
     * @ORM\Column(type="datetime")
     */
    private $publicationDate;

    /**
     * @ORM\Column(type="boolean")
     */
    private $wasDone;

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->id;
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
     * @return int
     */
    public function getPassenger()
    {
        return $this->passenger;
    }

    /**
     * @param int $passenger
     */
    public function setPassenger($passenger)
    {
        $this->passenger = $passenger;
    }

    /**
     * @return int
     */
    public function getFlight()
    {
        return $this->flight;
    }

    /**
     * @param int $flight
     */
    public function setFlight($flight)
    {
        $this->flight = $flight;
    }

    /**
     * @return int
     */
    public function getNbReservedSeats()
    {
        return $this->nbReservedSeats;
    }

    /**
     * @param int $nbReservedSeats
     */
    public function setNbReservedSeats($nbReservedSeats)
    {
        $this->nbReservedSeats = $nbReservedSeats;
    }

    /**
     * @return \DateTime
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * @param \DateTime $publicationDate
     */
    public function setPublicationDate($publicationDate)
    {
        $this->publicationDate = $publicationDate;
    }

    /**
     * @return bool
     */
    public function isWasDone()
    {
        return $this->wasDone;
    }

    /**
     * @param bool $wasDone
     */
    public function setWasDone($wasDone)
    {
        $this->wasDone = $wasDone;
    }

    /**
     * Get wasDone.
     *
     * @return bool
     */
    public function getWasDone()
    {
        return $this->wasDone;
    }
}
