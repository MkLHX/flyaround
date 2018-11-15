<?php

namespace AppBundle\Service;

class FlightInfo
{

    /**
     * @var string
     */
    private $unit;

    /**
     * Constructor
     */
    public function __construct($unit)
    {
        $this->unit = $unit;
    }

    /**
     * @param float $latitudeFrom Departure
     * @param float $longitudeFrom Departure
     * @param float $latitudeTo Arrival
     * @param float $longitudeTo Arrival
     *
     * @return float
     */
    public function getDistance($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo)
    {
        $d = 0;
        $earth_radius = 6371;
        $dLat = deg2rad($latitudeTo - $latitudeFrom);
        $dLon = deg2rad($longitudeTo - $longitudeFrom);

        $a = sin($dLat / 2) * sin($dLat / 2) + cos(deg2rad($latitudeFrom)) * cos(deg2rad($latitudeTo)) * sin($dLon / 2) * sin($dLon / 2);
        $c = 2 * asin(sqrt($a));
        switch ($this->unit) {
            case 'km':
                $d = $c * $earth_radius;
                break;
            case 'mi':
                $d = $c * $earth_radius / 1.609344;
                break;
            case 'nmi':
                $d = $c * $earth_radius / 1.852;
                break;
        }

        return $d;
    }

    /**
     * @param $distance
     * @param $speed
     *
     * @return  \DateTime
     */
    public function getTime($distance, $speed)
    {
        $time = $distance / $speed;

        return sprintf('%02d:%02d', (int) $time, fmod($time, 1) * 60);

    }
}