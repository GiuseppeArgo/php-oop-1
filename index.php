<?php 

require_once "models/genre.php";
require_once "models/movie.php";

$genre1 = new Genre('fantascienza','si');
$movie1 = new Movie('Underwater', $genre1);
$movie1-> description = "Un gruppo di scienziati lavora in un laboratorio subacqueo. Quando un terremoto mette tutti in pericolo mortale, i ricercatori cercano di trovare un modo per tornare in superficie prima che sia troppo tardi.";
$movie1-> vote = 3;
$movie1-> release_date = "19 agosto 2019";
var_dump($movie1);

$genre2 = new Genre('avventura','si');
$movie2 = new Movie('Monster Hunter', $genre2);
$movie2-> description = "Artemis è a capo di un'unità militare delle Nazioni Unite: la sua missione è combattere i mostri che hanno invaso la Terra. Un giorno incontra un uomo col quale dovrà chiudere un portale per impedire ai mostri di attaccare il loro pianeta.";
$movie2-> vote = 2;
$movie1-> release_date = "4 dicembre 2020";
var_dump($movie2);

?>