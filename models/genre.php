<?php

class Genre{
    private string $name;
    private string $recommended;

    public function __construct(string $name, string $recommended) {

        $this->name         = $name;
        $this->recommended   = $recommended;
    }

    function getGenre() {
        return "Genere:" . $this->name;
    }

    function getRecommended() {
        return "Raccomandato:" . $this->recommended;
    }
}
?>