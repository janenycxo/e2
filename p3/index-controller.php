<?php

session_start();

if ($_POST['answer'] == 'Labrador Retriever'){
    $correct = 'true';
} else {
    $results = 'Incorrect';
}


<?php

//OUTCOME
$winner = null;

//POSSIBLE CHOICES
$choice = ['Labrador Retriever', 'German Shepherd',];

//RANDOM SELECTION FROM PLAYERS
$player1choice = $choice [rand (0,2)];
$player2choice = $choice [rand (0,2)];

//THROW COMBINATIONS
if ($player1choice == 'Labrador Retriever' and $player2choice == 'German Shepherd') {
    $winner = 'Sorry! You did not answer correctly. Please visit <a href="https://www.akc.org"> AKC </a> for more interesting facts about dog breeds.';
} elseif ($player1choice =='Labrador Retriever' and $player2choice == 'Labrador Retriever') {
    $winner = 'You won! Visit <a href="https://www.akc.org"> AKC </a> for more interesting facts about dog breeds.';
} elseif ($player1choice =='German Shepherd' and $player2choice == 'German Shepherd') {
    $winner = 'You won! Visit <a href="https://www.akc.org"> AKC </a> for more interesting facts about dog breeds.';
} elseif ($player1choice =='German Shepherd' and $player2choice == 'Labrador Retriever') {
    $winner = 'Sorry! You did not answer correctly. Please visit <a href="https://www.akc.org"> AKC </a> for more interesting facts about dog breeds.';
}