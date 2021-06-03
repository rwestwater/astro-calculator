<?php

namespace SolarSystem;

class Star 
{

    public $name;
    public $uuid;
    public $mass;
    public $array_of_planets;

    public function __construct($name, $mass) 
    {
        $this->name = $name;
        $this->uuid = Identity::generate();
        $this->mass = $mass;
        $this->array_of_planets = array();
    }

    // return the star's name
    public function getStarName() 
    {
        return $this->name;
    }

    // return the unique id of the star
    public function getStarUuid() : Identity
    {
        return $this->uuid;
    }

    // return the mass of the star
    public function getStarMass()
    {
        return $this->mass;
    }

    // return an array of planets orbitting the star
    public function arrayOfOrbittingPlanets()
    {
        return $this->array_of_planets;
    }

    // return the mass of the star and it's orbitting planets
    public function addPlanetToArray($planet)
    {
        $planet_array = array_push($this->array_of_planets, $planet);
        return $planet_array;
    }

    // return the mass of the star and it's orbitting planets
    public function totalMassOfStar()
    {
        $total_mass = 0;

        foreach ( $this->array_of_planets as $planet ) {
            $mass_of_planet = $planet->getPlanetMass();
            $total_mass = $total_mass + $mass_of_planet;
        }

        $final_mass = $total_mass + $this->getStarMass();
        return $final_mass;
    }

}
