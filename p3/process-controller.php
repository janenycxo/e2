<?php

session_start();

$winner = null;
$name = $_GET['name'];

$choice = ['Labrador Retriever', 'German Shepherd']
$breed =$_GET['dog breed'];
$player1choice = $choice [rand (0,1)];
$player2choice = $choice [rand (0,1)];
if ($breed ==$player1choice) {
    $winner = true;
} else {
    $winner = 'false';
}


