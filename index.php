<?php

class Movie {
    public $title;
    public $director;
    public $year;
    public $genre;

    public function __construct($title, $director, $year, $genre) {
        $this->title = $title;
        $this->director = $director;

        if (!is_numeric($year) || $year < 1888 || $year > date("Y")) {
            throw new Exception("Anno non valido: $year");
        }
        $this->year = $year;
        
        $this->genre = $genre;
    }

    public function getMovieInfo() {
        return "Titolo: $this->title, Regista: $this->director, Anno: $this->year, Genere: $this->genre";
    }
}

try {
    $movie1 = new Movie("Inception", "Christopher Nolan", 2010, "Sci-Fi");
    $movie2 = new Movie("The Godfather", "Francis Ford Coppola", 1972, "Crime");

    echo $movie1->getMovieInfo() . "<br>";
    echo $movie2->getMovieInfo() . "<br>";
} catch (Exception $e) {
    echo "Errore: " . $e->getMessage();
}

?>
