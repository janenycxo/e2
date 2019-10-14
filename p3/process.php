<?php

session_start();

if ($_GET['dogBreed'] == 'dogBreed') {
    $correct = true;
} else {
    $correct = false;
}

//OUTCOME
$winner = null;

//FORM
$name = $_GET['name'];

//POSSIBLE CHOICES
$dogBreed = ['Labrador Retriever', 'German Shepherd'];
$breed = $_GET['breed'];

//SELECTION FROM PLAYERS
$player1choice = $dogBreed [rand (0,1)];
$player2choice = $dogBreed [rand (0,1)];


if ($player1choice == $player2choice) {
    $result ['winner']= 'You won! Visit <a href="https://www.akc.org"> AKC </a> for more interesting 
facts about dog breeds.';
} else ($player1choice !== $player2choice) {
    $result ['winner']= 'Sorry! You did not answer correctly. Please visit <a href="https://www.akc.org"> 
AKC </a> for more interesting facts about dog breeds.';
}


$result['player1'] = $player1choice;
$result['player2'] = $player2choice;



$_SESSION['results'] = $results;

header('Location: index.php');
