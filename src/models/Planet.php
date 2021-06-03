<?php

namespace SolarSystem;
require 'Identity.php';

class Planet 
{

    public $name;
    public $uuid;
    public $mass;
    public $astro_unit;

    public function __construct($name, $mass, $astro_unit) 
    {
        $this->name = $name;
        $this->uuid = Identity::generate();
        $this->mass = $mass;
        $this->astro_unit = $astro_unit;
    }

    // return the planet's name
    public function getPlanetName() 
    {
        return $this->name;
    }

    // return the planet's uuid
    public function getPlanetUuid() : Identity
    {
        print $this->uuid;
    }

    // return the planet's mass
    public function getPlanetMass() 
    {
        return $this->mass;
    }

    // return the astronomical unit
    public function getPlanetAstroUnit() 
    {
        return $this->astro_unit;
    }
    
}