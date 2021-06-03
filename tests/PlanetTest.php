<?php

namespace SolarSystem;

use PHPUnit\Framework\TestCase;
require 'models/Planet.php';

class PlanetTest extends TestCase
{
    
    public function testAPlanetHasAName()
    {
        $planet = new Planet('Earth', '343287vjhv', 50, 25);
        $this->assertEquals('Earth', $planet->getPlanetName());
    }

    public function testAPlanetHasAUuid()
    {
        // @todo
    }
}


    // public function test_a_planet_has_a_mass()
    // {
    //     // @todo
    // }

    // public function test_a_planet_has_an_astronomical_distance()
    // {
    //     // @todo
    // }
    // }