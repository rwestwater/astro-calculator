<?php

namespace SolarSystem;

use PHPUnit\Framework\TestCase;
require 'models/Planet.php';


class PlanetTest extends TestCase
{
    
    public function testAPlanetHasAName()
    {
        $planet = new Planet('Earth', 50, 25);
        $this->assertEquals('Earth', $planet->getPlanetName());
    }
    
    public function testAPlanetHasAUuid()
    {
        $uuid = Identity::generate();
        $planet = new Planet('Earth', 50, 25);
        $this->assertEquals($uuid, $planet->getPlanetUuid());
    }

    public function testAPlanetHasAMass()
    {
        $planet = new Planet('Earth', 50, 25);
        $this->assertEquals(50, $planet->getPlanetMass());
    }

    public function testAPlanetHasAnAstronomicalDistance()
    {
        $planet = new Planet('Earth', 50, 25);
        $this->assertEquals(25, $planet->getPlanetAstroUnit());
    }
    
}
