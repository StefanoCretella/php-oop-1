<?php

class Movie {
    public $title;
    public $director;
    public $year;
    public $genres = [];
    public $actors = [];
    public static $moviesCount = 0;

    public function __construct($title, $director, $year, $genres = []) {
        $this->title = $title;
        $this->director = $director;

        if (!is_numeric($year) || $year < 1888 || $year > date("Y")) {
            throw new Exception("Anno non valido: $year");
        }
        $this->year = $year;

        if (!is_array($genres)) {
            throw new Exception("Generi non validi: deve essere un array");
        }
        $this->genres = $genres;
        
        self::$moviesCount++;
    }

    public function getMovieInfo() {
        $genres_str = implode(", ", $this->genres);
        $actors_str = implode(", ", array_map(fn($actor) => $actor->getFullName(), $this->actors));
        return "Titolo: $this->title, Regista: $this->director, Anno: $this->year, Generi: $genres_str, Attori: $actors_str";
    }

    public function addGenre($genre) {
        $this->genres[] = $genre;
    }

    public function addActor(Actor $actor) {
        $this->actors[] = $actor;
    }

    public static function getMoviesCount() {
        return self::$moviesCount;
    }
}

?>
