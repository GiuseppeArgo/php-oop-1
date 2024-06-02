<?php 

require_once "models/genre.php";
require_once "models/movie.php";

$genre1 = new Genre('fantascienza','si');
$movie1 = new Movie('Underwater', $genre1);
$movie1-> setDescription("Un gruppo di scienziati lavora in un laboratorio subacqueo. Quando un terremoto mette tutti in pericolo mortale, i ricercatori cercano di trovare un modo per tornare in superficie prima che sia troppo tardi.");
$movie1-> setVote(3);
$movie1-> setDate("19 agosto 2019");

var_dump($movie1->getTitle());
var_dump($movie1->getDescription());
var_dump($movie1->getVote());
var_dump($movie1->getDate());
var_dump($movie1->genre->getGenre());
var_dump($movie1->genre->getRecommended());

echo "-----------------------------------------";

$genre2 = new Genre('avventura','si');
$movie2 = new Movie('Monster Hunter', $genre2);
$movie2-> setDescription("Artemis è a capo di un'unità militare delle Nazioni Unite: la sua missione è combattere i mostri che hanno invaso la Terra. Un giorno incontra un uomo col quale dovrà chiudere un portale per impedire ai mostri di attaccare il loro pianeta.");
$movie2-> setVote (2);
$movie2-> setDate ("4 dicembre 2020");

var_dump($movie2->getTitle());
var_dump($movie2->getDescription());
var_dump($movie2->getVote());
var_dump($movie2->getDate());
var_dump($movie2->genre->getGenre());
var_dump($movie2->genre->getRecommended());



?>