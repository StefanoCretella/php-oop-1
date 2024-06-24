<?php

class Movie {
    public $title;
    public $director;
    public $year;
    public $genres;

    public function __construct($title, $director, $year, $genres) {
        $this->title = $title;
        $this->director = $director;

        if (!is_numeric($year) || $year < 1888 || $year > date("Y")) {
            throw new Exception("Anno non valido: $year");
        }
        $this->year = $year;
        
        if (!is_array($genres) || empty($genres)) {
            throw new Exception("Generi non validi: deve essere un array non vuoto");
        }
        $this->genres = $genres;
    }

    public function getMovieInfo() {
        $genres_str = implode(", ", $this->genres);
        return "Titolo: $this->title, Regista: $this->director, Anno: $this->year, Generi: $genres_str";
    }
}




?>
