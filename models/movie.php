<?php
class Movie{
    private string $title;
    private string $description;
    private int $vote;
    private string $release_date;
    public Genre $genre; 

    public function __construct(string $title, Genre $genre) {

        $this->title    = $title;
        $this->genre    = $genre;
    }

    function setDescription($description){
        $this->description = $description;
    }
    
    function setVote($vote){
        $this->vote = $vote;
    }

    function setDate($date){
        $this->release_date = $date;
    }

    function getTitle() {
        return "Nome: " . $this->title;
    }
    
    function getDescription() {
        return "Trama: " . $this->description;
    }
    
    function getVote() {
        return "Voto: " . $this->vote; 
    }
    
    function getDate() {
        return "Data di uscita: " . $this->release_date;
    }
}

?>