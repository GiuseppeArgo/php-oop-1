<?php

class Genre{
    public string $name;
    public string $recommended;

    public function __construct(string $name, string $recommended) {

        $this->name         = $name;
        $this->recommended   = $recommended;
    }
}
?>