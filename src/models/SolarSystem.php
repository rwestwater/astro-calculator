<?php

namespace SolarSystem;

// final means that this class cannot be extended
final class SolarSystem
{
    public $name;
    public $uuid;
    public $mass;
    public $array_of_stars_and_planets;

    public function __construct($name, $mass) 
        {
            $this->name = $name;
            $this->uuid = $uuid;
            $this->mass = $mass;
            $this->array_of_stars_and_planets = array();
        }

    // return the star's name
    public function getSolarSystemName() 
    {
        return $this->name;
    }

    // return the unique id of the star
    public function getSolarSystemUuid() : Identity
    {
        return $this->uuid;
    }

    // return the mass of the star
    public function getSolarSystemMass()
    {
        return $this->mass;
    }

    // return an array of planets orbitting the star
    public function arrayOfStarsAndPlanets()
    {
        return $this->array_of_stars_and_planets;
    }

    public function addStarToSolarSystem($star)
    {
        array_push($this->array_of_stars_and_planets, $star);
    }
}
