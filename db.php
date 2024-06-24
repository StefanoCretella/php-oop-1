<?php

require_once __DIR__ . '/Models/Movie.php';

$movies = [
    new Movie("Inception", "Christopher Nolan", 2010, ["Sci-Fi", "Action"], "inception_small.jpg"),
    new Movie("The Godfather", "Francis Ford Coppola", 1972, ["Crime", "Drama"], "godfather_small.jpg"),
    new Movie("Pulp Fiction", "Quentin Tarantino", 1994, ["Crime", "Drama"], "pulpfiction_small.jpg"),
    // Aggiungi altri film con il nome del file dell'immagine rimpicciolita
];




?>
