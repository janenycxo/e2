<?php

session_start();

<?php
session_start();
$winner = null;
$dogBreed = ['Labrador Retriever', 'German Shepherd'];
$breed = $_GET['breed'];

$player1choice = $dogBreed[rand(0, 1)];

if ($breed == $player1choice) {
    $winner = true;
} else {
    $winner = false;
}
$results = [
    'winner' => $winner,
    'player1choice' => $player1choice,
    'breed' => $breed,
];
$_SESSION['results'] = $results;

header('Location: index.php');
