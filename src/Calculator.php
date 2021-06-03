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
            $max_array["$planet_name"] = $planet->getPlanetAstroUnit();
        }
        // find the max integer of the planets
        $farthest_away_planet = max($max_array);
        
        return $farthest_away_planet;
    }
    
    public static function findTheDiameterOfTheSolarSystem($star) 
    {
        $farthest_away_planet = self::findTheFarthestAwayPlanet($star);
        $solar_system_diameter = $farthest_away_planet * 2;
        return $solar_system_diameter;
    }
}