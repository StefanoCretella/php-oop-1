<?php

require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Actor.php';

$actor1 = new Actor("Leonardo", "DiCaprio");
$actor2 = new Actor("Joseph", "Gordon-Levitt");
$actor3 = new Actor("Marlon", "Brando");
$actor4 = new Actor("Al", "Pacino");
$actor5 = new Actor("John", "Travolta");
$actor6 = new Actor("Samuel", "L. Jackson");

$movies = [
    $movie1 = new Movie("Inception", "Christopher Nolan", 2010, ["Sci-Fi", "Action"]),
    $movie2 = new Movie("The Godfather", "Francis Ford Coppola", 1972, ["Crime", "Drama"]),
    $movie3 = new Movie("Pulp Fiction", "Quentin Tarantino", 1994, ["Crime", "Drama"])
];

$movie1->addActor($actor1);
$movie1->addActor($actor2);

$movie2->addActor($actor3);
$movie2->addActor($actor4);

$movie3->addActor($actor5);
$movie3->addActor($actor6);

?>
