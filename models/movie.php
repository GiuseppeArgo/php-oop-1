<?php
class Movie{
    public string $title;
    public string $description;
    public int $vote;
    public string $release_date;
    public Genre $genre; 

    public function __construct(string $title, Genre $genre) {

        $this->title    = $title;
        $this->genre    = $genre;
    }
}

?>