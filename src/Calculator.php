<?php

namespace SolarSystem;
require './models/SolarSystem.php';
require './models/Planet.php';
require './models/Star.php';


class Calculator {

    // calculate the total mass of the solar system
    public static function totalMassOfSolarSystem($solar_system)
    {
        $total_mass = 0;
        // loop through star in the solar system
        foreach ( $solar_system->array_of_stars_and_planets as $star )
        {
            // get the mass of the star and planets in the array
            $mass_of_star = $star->totalMassOfStar();
            // add the mass of the star and planets to the total mass
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
            // make an array of all planets and their astro units using the name as the key
            $max_array["$planet_name"] = $planet->getPlanetAstroUnit();
        }
        // find the max integer of the planets
        $farthest_away_planet = max($max_array);
        
        return $farthest_away_planet;
    }
    
    // calculate the diameter of the solar system
    public static function findTheDiameterOfTheSolarSystem($star) 
    {
        // call in the instance of findTheFarthestAwayPlanet() function
        $farthest_away_planet = self::findTheFarthestAwayPlanet($star);
        // times the return of findTheFarthestAwayPlanet() by 2
        $solar_system_diameter = $farthest_away_planet * 2;
        return $solar_system_diameter;
    }
}