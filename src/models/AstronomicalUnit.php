<?php

namespace SolarSystem;

final class AstronomicalUnit
{

    public $distance;

    public function __construct(float $distance)
    {
        $this->distance = $distance;
    }

    // return the astronomical unit
    public function getAstronomicalUnit() 
    {
        return $this->distance;
    }

}