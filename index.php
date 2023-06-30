<?php

class Movie {

    public $name;
    public $genre;
    public $director;

    public function getFullOptions() {

        return $this -> name . "" . $this -> genre . "" . $this -> director;
    }

}

$movie1 = new Movie();
$movie1 -> name = "Django";
$movie1 -> genre= "Action";
$movie1 -> director = "Tarantino";

$movie2 = new Movie();
$movie2 -> name = "Venom";
$movie2 -> genre= "Superhero";
$movie2 -> director = "Serkis";

echo $movie1 -> getFullOptions();

echo "<br><br>";

echo $movie2 -> getFullOptions();