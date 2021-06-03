<?php

namespace SolarSystem;
require './models/SolarSystem.php';
require './models/Planet.php';
require './models/Star.php';


class Calculator {

    public static function totalMassOfSolarSystem($solar_system)
    {
        $total_mass = 0;

        foreach ( $solar_system->array_of_stars_and_planets as $star )
        {
            $mass_of_star = $star->totalMassOfStar();
            $total_mass = $total_mass + $mass_of_star;
        }

        return $total_mass;
    }

    // find the farthest away planet
    public static function findTheFarthestAwayPlanet($star) 
    {
        $max_array = array();
        
        // for every planet in the orbitting planets array
        foreach ( $star->arrayOfOrbittingPlanets() as $planet )
        {
            $planet_name = $planet->getPlanetName();
            // make an array of all planets and their masses using the uuid as the key
            $max_array["$planet_name"] = $planet->getPlanetMass();
            $farthest_away_planet = array_search(max($max_array), $max_array);
        }
        
        // find the max integer of the planets
        return $max_array;
    }
    
    public static function findTheDiameterOfTheSolarSystem($star) 
    {
        $farthest_away_planet = self::findTheFarthestAwayPlanet($star);
        $solar_system_diameter = max($farthest_away_planet) * 2;
        return $solar_system_diameter;
    }
}

// $planet = new Planet("Rachel", 96, 100);
// $planet_1 = new Planet("Granty", 900, 1000);
// $planet_2 = new Planet("BAZZA", 9001, 20000);
// $planet_3 = new Planet("BIG BOY", 50000, 20000);

// $star = new Star("Joe", "3986596", 150);
// $solar_system = new SolarSystem("J", "Jdawg69", 69);

// $star->addPlanetToArray($planet);
// $star->addPlanetToArray($planet_1);
// $star->addPlanetToArray($planet_2);
// $star->addPlanetToArray($planet_3);


// $solar_system->addStarToSolarSystem($star);
// print_r($solar_system);


// $total_mass = Calculator::totalMassOfSolarSystem($solar_system);
// print_r($total_mass);

// Calculator::findTheFarthestAwayPlanet($star);
