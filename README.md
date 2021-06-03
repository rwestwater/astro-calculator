# Solar System

## Problem Definition

An astrophysics laboratory studying Planets beyond our Solar System require a way to continually update their
understanding of the discoveries they have made. Once a discovery has been confirmed, the model of the new Solar System
needs updated with the new information.

At the moment, the team must perform regular activities, such as calculating the
mass of the Solar System (by totaling the mass of the known objects) and estimating the diameter of the SolarSystem.

## Task

Using our own solar system as context, create a service which will allow us to query information regarding our
Solar System, Star and Planets. The ability to query for the total mass of these objects is required along with the
ability to query for the currently known diameter.

As the application will be expanded to include many Solar Systems to aid in the discovery of exoplanets, develop the
functionality required to discover new Planets. Ensure the mass of new discoveries are taken into consideration when
calculating the mass of the Solar System. Also ensure the distance of the new discovery is also considered when
calculating the diameter of the Solar System.

Expose a simple interface of your choosing which will allow interaction with the service.

## Deliverables

The code should be written in PHP. It should contain documentation, setup instructions and unit tests which show your understanding of the problem.

We have provided some basics, to get you started. You can choose to use the code/tools provided, or start fresh. 

Once complete, send over a zip of the source code.

## MVP
- create a service which will allow us to query information regarding our Solar System, Star and Planets
- find out the total mass of these objects
- find out the currently known diameter of these obejcts
- develop the functionality required to discover new Planets
- add the mass of new discoveries to the mass of the Solar System to get a new total mass
- add the distance of the new discovery to the existing Solar System to get a new total diameter of the Solar System
- create a simple UI for interaction using laravel

## Extensions
- CRUD IT UP do we want to be able to remove a planet?

## How to install
- things installed: PHP 7.3.11 Laravel V, Docker Desktop,

How to install Laravel
`curl -s "https://laravel.build/example-app" | bash` if you have Docker Desktop installed like I did.

Starting Docker: make sure you're in the correct directory and run `docker compose up`

How to run tests:
from the src file
`../vendor/bin/phpunit ../tests/PlanetTest.php`

## what we can do
- we can add a planet to a star
- we can add a star to a solar system
- we can find out the total mass of the solar system
- we can find out the diameter of the solar system

## Pseudocode

## Author notes